<?php include 'incl/db-connect.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>EZ Villas Bali | Best Villas for Your Holiday in Bali Price Guaranteed</title>
<link rel="canonical" href="https://www.ezvillasbali.com/">
<meta name="description" content="EZ Villas Bali offer selection of best villas for your holiday in Bali. We offer best price guaranteed."/>
<meta name="keywords" content="bali villas">
<meta name="author" content="EZ Villas Bali">
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<style>
	.search {
	display: flex;
	justify-content: center;
	z-index: 999;
	position: relative;
	}
	.fa.fa-search {
	border: 0;
	color: white;
	font-size: 20px;
	}
	.search button {
	border: solid 1px #8e8f97;
	background: #8e8f97;
	}
	.search input, .search button, .search select {
	outline: none;
	}
	.search input, .search select {
    border-top: solid 1px #8e8f97;
    border-bottom: solid 1px #8e8f97;
    border-left: solid 1px #8e8f97;
    border-right: 0;
    margin-right: -5px;
    height: 45px;
    width: 100px;
    color: #757575;
	background: #fff;
	}
	input[type="date"] {
    top: -1px;
    position: relative;
    box-shadow: none;
	}
	/*This will work for firefox*/
	@-moz-document url-prefix() {
		input[type="date"] {
		top: 0;
		font-size: 15px;
		}
		.search input, .search select {
		font-size: 15px;
		}
	}
	.carousel-inner {
	max-height: 650px;
	}
	.carousel-caption {
	top: 200px !important;
	}
	input::-webkit-outer-spin-button,
	input::-webkit-inner-spin-button {
	-webkit-appearance: none;
	margin: 0;
	}
	input[type=number] {
	-moz-appearance: textfield;
	}
	@media screen and (max-width: 480px) {
		.search {
		width: 150%;
		margin: -30px 0 0 -63px;
		}
		.search select, .search input {
		width: 80px;
		font-size: 12.3px;
		height: 35px;
		}
		.fa.fa-search {
		font-size: 12px;
		}
		.d-none {
		display: block !important;
		}
		.search button {
		margin-left: 2px;
		height: 34px;
		}
		input[type="date"] {
		top: 0;
		}
		.carousel-caption h5, .carousel-caption h4 {
		display: none;
		}
	}
</style>
<?php include 'incl/header.php';?>
<!-- slider -->
<div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
	<div class="carousel-inner">
		<div class="carousel-item active">
		  <img class="d-block w-100" src="assets/images/slider/AG1_1142.jpg" alt="Luxury Villas Bali">
		  <div class="carousel-caption d-md-block">
			<div class="search">
				<form method="POST" action="search-result.php">
				<select id="location" name="location">
				<option value="">Location</option>
				<option value="canggu">Canggu</option>
				<option value="jimbaran">Jimbaran</option>
				<option value="kerobokan">Kerobokan</option>
				<option value="kuta">Kuta</option>
				<option value="nusa dua">Nusa Dua</option>
				<option value="seminyak">Seminyak</option>
				<option value="tanah lot">Tanah Lot</option>
				<option value="uluwatu">Uluwatu</option>
				</select>
				<select id="bedroom" name="bedroom">
				<option value="">Bedroom</option>
				<option value="1">1 Bedroom</option>
				<option value="2">2 Bedroom</option>
				<option value="3">3 Bedroom</option>
				<option value="4">4 Bedroom</option>
				<option value="5">5 Bedroom</option>
				<option value="6">6 Bedroom</option>
				<option value="7">7 Bedroom</option>
				<option value="8">8 Bedroom</option>
				</select>
				<input type="text" name="checkin" placeholder="Check In" onfocus="(this.type='date')">
				<input type="text" name="checkout" placeholder="Check Out" onfocus="(this.type='date')">
				<button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
				</form>
			</div>
			<h5>STYLISH MODERN VILLAS IN BALI</h5>
			<h4>THIS IS OUR OLD WEBSITE</h4>
			<h4>THE NEW WEBSITE COMING SOON</h4>
		  </div>
		</div>	
	</div>
</div>
<!-- content -->
<div class="container-fluid p-0">
	<div class="container">
		<div class="row margin-20">
			<div class="col-md-12 col-sm-12">
				<h1 class="width-70 text-center text-green">Selection of Best Villas for Your Holiday in Bali.</h1>
				<p class="width-70 text-center">Celebrating the laid-back vibe and island charm of Bali, EZ VILLAS BALI is a stylish accommodation provider to serve your requirement as a modern traveller. Selection of private villas that are available for short & long-term rental in popular locations all over the island of Bali. Private accommodation in Bali equipped with spacious living facilities, modern home conveniences and extravagant extras such as a personal swimming pool.</p>
				<!-- <p class="width-70 text-center"><a class="btn btn-link collapsed" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Read More</a></p>
				<div class="collapse" id="collapseExample">  -->
				<p class="width-70 text-center">As specialists in private villa holidays, we deliver exceptional service that goes above and beyond all expectation. For your holiday in Bali, we choose villas that are reputable and well-recognized by customers who have stayed before. Year after year guests have returned to rent the stunning selection of villas that listed on the website. The properties provide unique relaxing vacations experiences, all the villas we offer are staffed to the great services and offer a diverse range of experiences from absolute beachfront to rural retreat.</p>
				<h2 class="width-70 text-center text-green">Best Price Guaranteed</h2> 
				<p class="width-70 text-center">With EZ Villas Bali, you can be confident that you're paying at the best possible rate. We guarantee that you will get the best available rate when you book through us. Experience selection of private villas in the best location of Bali that are located in well-known tourism areas in Bali such as Seminyak, Canggu, Berawa, Pereranan, Umalas, Legian, Kuta, Uluwatu, Nusa Dua, Jimbaran, Sanur, Tanah Lot and Ubud.</p>
				<h2 class="width-70 text-center text-green">Things To Do in Bali</h2>
				<p class="width-70 text-center">There’s so much to see and do here. The island’s diverse landscape gives rise to a wide variety of natural attractions - from postcard-pretty beaches in the Bukit Peninsula, to sprawling rice fields, filled with the most beautiful and colourful beach-front bars stretches between Kerobokan and Echo Beach in Canggu or towering volcanoes and sparkling lakes in Central Bali. You’ll also discover much about Bali’s rich culture and history when you visit Ubud; it’s the arts and culture hub of the island, and home to numerous art galleries, museums, temples and traditional markets.</p>
				<h3 class="width-70 text-center text-green">Activities and Points of Interest in Bali</h3>
				<p class="width-70 text-center">These attractions are spread out across the island, yet it isn’t a stretch visiting multiple locations in a single day trip - just ask your Bali villa manager for tips on how to best organise your itinerary.</p>
				<p class="width-70 text-center">Here are some of our recommendations: watch a kecak fire dance performance at Uluwatu Temple, catch the surfers in action at Blue Point Beach, go snorkeling or free diving at Amed, do a sunrise trek at Mount Batur, explore the shopping streets of Seminyak or spend your day trying out the myriad spas, healthy cafes and yoga classes in Ubud.</p>
				<!-- </div> -->
			</div>
		</div>
	</div>
	<div class="par-section">
		<div class="container text-center text-white">
			<h2>Why Book With Us?</h2>
			<p>&nbsp;</p>
			<div class="margin-10">
				<div class="row feature">
					<div class="col-md-2 col-sm-4 col-6 text-center">
						<img src="assets/images/heart.png" alt="friendly services">
						<p>Friendly</p>
					</div>
					<div class="col-md-2 col-sm-4 col-6 text-center">
						<img src="assets/images/experienced-staff.png" alt="experienced staff">
						<p>Experienced</p>
					</div>
					<div class="col-md-2 col-sm-4 col-6 text-center">
						<img src="assets/images/responsible.png" alt="responsible staff">
						<p>Responsible</p>
					</div>
					<div class="col-md-2 col-sm-4 col-6 text-center">
						<img src="assets/images/reasonable-price.png" alt="reasonable prices">
						<p>Reasonable</p>
					</div>
					<div class="col-md-2 col-sm-4 col-6 text-center">
						<img src="assets/images/easy-booking.png" alt="easy booking">
						<p>Easy</p>
					</div>
					<div class="col-md-2 col-sm-4 col-6 text-center">
						<img src="assets/images/secure-booking.png" alt="secure services">
						<p>Secure</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="vid-section">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-12">
					<div class="text-green">
						<h2 class="text-center">What's Bali?</h2>
						<ul class="home-list">
							<li>Bali is 'Island of Gods'</li> 
							<li>Warms and friendly peoples</li> 
							<li>The most beautiful paces of the world</li>  
							<li>Easy access to anywhere</li>  
							<li>Number one tourist destination of the world</li>  
							<li>... and Much more</li> 
						</ul>
						<span class="float-right"><a href="about-bali.php" class="btn btn-outline-dark">Read More About Bali</a></span>
					</div>
				</div>
				<div class="col-md-6 col-sm-12 my-auto">
					<a href="#" data-toggle="modal" data-target="#exampleModal"><img src="assets/images/video-button.jpg"></a>
				</div>
			</div>
		</div>
	<!-- </div>
	<div class="bg-white">
		<div class="row">
			<div class="col-md-6 col-sm-12 col-12 margin-50 my-auto">
				<div class="col-md-7 col-sm-12 col-12 float-right">
				<h1 class="text-center">Selection Bali Villas</h1>
				<p> 
				<p class="width-70 text-center">We offer a selection of villas to suit your needs in Bali. Please choose the best villa we have selected for you ... </p>
				<p>&nbsp;</p>
				<span class="float-right"><a href="villa-selection.php" class="btn btn-outline-dark">Read More</a></span>
				</div>
			</div>
			<div class="col-md-6 col-sm-12 col-12 p-0">
				<img src="assets/images/bali-selection-villas.webp" width="100%" height="auto" alt="The best villa selection in Bali">
			</div>
		</div>
	</div>
	<div class="bg-grey">
		<div class="row">
			<div class="col-md-6 col-sm-12 col-12 p-0">
				<img src="assets/images/bali-villas-location.webp" width="100%" height="auto"  alt="The best villa location in Bali">
			</div>
			<div class="col-md-6 col-sm-12 col-12 margin-50 my-auto">
				<div class="col-md-7 col-sm-12 col-12">
				<h1 class="text-center">Bali Villas Location</h1>
				<p>Here we offer villas with the best locations in Bali. Please choose the villa that suits your plan while you are in Bali ... </p>
				<p>&nbsp;</p>
				<span><a href="bali-villas-location.php" class="btn btn-outline-dark">Read More</a></span>
				</div>
			</div>
		</div>
	</div>
	<div class="bg-white">
		<div class="row">
			<div class="col-md-6 col-sm-12 col-12 margin-50 my-auto">
				<div class="col-md-7 col-sm-12 col-12 float-right">
				<h1 class="text-center">Bali Villas Rates</h1>
				<p>Budget is sometimes a special consideration to determine your choice. We offer a selection of villas at the best prices in Bali ... </p>
				<p>&nbsp;</p>
				<span class="float-right"><a href="bali-villas-rate.php" class="btn btn-outline-dark">Read More</a></span>
				</div>
			</div>
			<div class="col-md-6 col-sm-12 col-12 p-0">
				<img src="assets/images/bali-villas-rate.webp" width="100%" height="auto"  alt="The best Bali villas rate">
			</div>
		</div>
	</div> -->
	<div class="bg-white">
		<div class="container top-50">
			<div class="col-md-12 text-center">
				<h1 class="text-green">Contact Us</h1>
			</div>
			<div class="row top-50">
				<div class="col-md-6 col-sm-12 col-12">
				<h3>Contact Detail</h3>
					<p>&nbsp;</p>
					<p class="address"><i class="fa fa-map-marker" aria-hidden="true"></i><br>
					Jl. Belong I No. 9, Seminyak, Kuta, Bali 80361
					</p>
					<p class="address"><i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:info@ezvillasbali.com" class="a-green">in&#102;o&#64;ezvi&#108;l&#97;sbali&#46;&#99;om</a><br>
					<i class="fa fa-phone" aria-hidden="true"></i> +62 (0) 8579 2260 929<br>
					<i class="fa fa-whatsapp" aria-hidden="true"></i> +62 (0) 8579 2260 929<br>
				</div>
				<div class="col-md-6 col-sm-12 col-12">
					<?php include 'incl/contact-form.php';?>	
				</div>
			</div>
		</div>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3943.9733700254064!2d115.17158571434692!3d-8.694078490967811!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd246d8891e0265%3A0xb656838992549855!2sJl.%20Belong%20I%2C%20Seminyak%2C%20Kuta%2C%20Kabupaten%20Badung%2C%20Bali%2080361!5e0!3m2!1sen!2sid!4v1610558526859!5m2!1sen!2sid" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	</div>
</div>
<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Bali on video</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <object data='https://www.youtube.com/embed/qjP4QdZK7tc?autoplay=1' width='100%' height='380px'></object>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php include 'incl/footer.php';?>
