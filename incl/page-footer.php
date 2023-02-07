<div class="footer">
<style>
         .fa.fa-whatsapp {
            border: solid 3px #fff;
            background: green;
            color: #fff;
            }
            
            .float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 40px;
            left: 40px;
            text-align: center;
            font-size: 30px;
            z-index: 100;
            }

        .float:hover{
            color: black;
        }

        .my-float{
            margin-top:4px;
        }
        @media only screen and (max-width: 768px) {
            .my-float {
              margin-top: 1px;
            }
            .float {
              position: fixed;
              font-size: 18px;
              width: 40px;
              height: 40px;
              bottom: 80px;
              left: 309px;
            }
        }
        .footer {
        margin-bottom: -50px;
        }
    </style>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <a href="https://api.whatsapp.com/send?phone=6285792260929" class="float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i></a>
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-12 text-center my-auto">
			<p>Copyright&copy; 2021 by EZ Villas Bali. All rights reserved.</p>
			</div><div class="col-md-4 col-sm-12 text-center my-auto">
			<p><a href="../privacy_policy.php">Privacy Policy</a> | <a href="../sitemap.xml">Site Map</a></p>
			</div>
			<div class="col-md-4 col-sm-12 text-center">
			<p>Follow us on: <a href="https://www.facebook.com/Ezvillasbali-105135831620191/" target="_blank"><i class="fa fa-facebook-f"></i></a></p>
			</div>
		</div>
	</div>
</div>
<!-- javascript -->
<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>
<script src="../assets/js/slider.js"></script>
<script src="../assets/vendor/js/jquery-3.5.1.slim.min.js"></script>
<script src="../assets/vendor/js/popper.min.js"></script>
<script src="../assets/vendor/js/bootstrap.min.js"></script>
<script src="../assets/js/main.js"></script>
<script>
$(function () {
    $(window).on('scroll', function () {
        if ( $(window).scrollTop() > 10 ) {
            $('.navbar').addClass('active');
        } else {
            $('.navbar').removeClass('active');
        }
    });
});
$('.carousel').carousel({
    pause: "false"
});
</script>

<script>
    $('#newsletterForm').submit(function(event) {
        event.preventDefault();
        var email = $('#email').val();
  
        grecaptcha.ready(function() {
            grecaptcha.execute('6LdSnDUfAAAAAIw0o-95xb9dO5Gv5BJmmu2h5cZJ', {action: 'subscribe_newsletter'}).then(function(token) {
                $('#mailer-form').prepend('<input type="hidden" name="token" value="' + token + '">');
                $('#mailer-form').prepend('<input type="hidden" name="action" value="send_enquiry_form">');
                $('#mailer-form').unbind('submit').submit();
            });;
        });
  });
  </script>
<script>
    function enableBtn(){
    document.getElementById("submit").disabled = false;
    }
</script>
</body>
