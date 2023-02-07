<?php include 'incl/db-connect.php';?>

<?php
    $location = $_POST['location'];
    $bedroom = (int)$_POST['bedroom'];
    //$max_rate = (int)$_POST['max_rate'];
    $query = "SELECT * FROM search";
    if(isset($location)) {
        $query = $query." WHERE location LIKE '%$location%'";    
    }
    if($bedroom) {
        $query = $query." AND bedroom LIKE '%$bedroom%'";
    //} elseif($min_rate != 0 && $max_rate == 0) {
        //$query = $query." AND rates > $min_rate";
    //} elseif($min_rate == 0 && $max_rate != 0) {
        //$query = $query." AND rates < $max_rate";
    }
    $query = $query." ORDER BY location ASC";
    
    $result = mysqli_query($connect, $query);

    if(!$result) {
        die("Query Error : ".mysqli_errno($connect)." - ".mysqli_error($connect));
    }
    // //kalau ini melakukan foreach atau perulangan
    // while ($row = mysqli_fetch_assoc($result)) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>EZ Villas Bali | Your Search Result</title>
<meta name="description" content="EZ Villas Bali offer best villa in Canggu area."/>
<meta name="keywords" content="bali canggu villas">
<meta name="author" content="EZ Villas Bali">
<?php include 'incl/header.php';?>
<style>
    .footer {
    min-width: 103%;
    margin-bottom: -50px;
    margin-left: -20px;
    }
</style>
<!-- header -->
<div id="header">
	<img class="d-block w-100" src="assets/images/banner.jpg" alt="Villa For Rent in Bali">
</div>
<!-- content -->
<div class="container-fluid py-5">
	<div class="container">
		<h1 class="width-70 text-center text-green">Your Search Result</h1>
	</div>
	<hr>
	<!-- Villa List -->
	<div class="container">
		<div class="row">
            <?php
            foreach($result as $data):
            ?>
            <div class="card col-md-3 col-sm-12 col-12">
            <a class="card-link" href="<?php echo $data['link']?>" target="_blank"><img class="card-img-top" src="<?php echo $data['photo']?>" alt="<?php echo $data['name']?>"></a>
			  <div class="card-body">
				<h4 class="card-title"><a class="card-link" href="<?php echo $data['link']?>" target="_blank"><?php echo $data['name']?></a></h4>
				<p><!-- Start From: US$ <strong><?php echo $data['rates']?></strong>/night<br> --><small><?php echo $data['bedroom']?> Bedroom</small></p>
				<p class="card-text"><?php echo $data['description']?></p>
				<a href="<?php echo $data['link']?>" class="btn btn-primary" target="_blank">Read More</a>
			  </div>
			</div>
            <?php endforeach;?>
            <?php if ($result->num_rows <= 0) : ?>
                <div class="container pt-5 pb-5 text-center">
                    <p>Ooopppsss.. data not found, please try the other keyword.</p>
                    <p>&nbsp;</p>
                    <p><a href="javascript: history.go(-1)">BACK</a></p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                </div>
            <?php endif;?>
	</div>
</div>
<?php include 'incl/footer.php';?>
