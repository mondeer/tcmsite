<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Tropical College of Management</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Tropical College of Management, the management college in Eldoret" />
	<meta name="keywords" content="tropical college of management, college of management eldoret" />
	<meta name="author" content="tcm.co.ke" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>

	<!-- <div class="tcm-loader"></div> -->

	<div >
    <nav class="tcm-nav" role="navigation">
  		<div class="top">
  			<div class="container">
  				<div class="row">
  					<div class="col-xs-12 text-right">
  						<p class="num">Call: +254 725 662 430</p>
  						<ul class="tcm-social">
  							<li><a href="#"><i class="icon-twitter"></i></a></li>
  							<li><a href="#"><i class="icon-dribbble"></i></a></li>
  							<li><a href="#"><i class="icon-github"></i></a></li>
  						</ul>
  					</div>
  				</div>
  			</div>
  		</div>
      @yield('content')
	<footer id="tcm-footer" role="contentinfo">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-3 tcm-widget">
					<h4>About TCM</h4>
					<p class="text-justify">At Tropical College of Management, we opine that the future is rooted in todays value of education, so we invest heavily</p>
				</div>
				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
					<h4>Learning</h4>
					<ul class="tcm-footer-links">
						<li><a href="/course">Course</a></li>
						<li><a href="/blog">Blog</a></li>
						<li><a href="/contact">Contact</a></li>
						<li><a href="/research">Research</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
					<h4>Learn &amp; Grow</h4>
					<ul class="tcm-footer-links">
						<li><a href="#">Testimonials</a></li>
						<li><a href="#">Help Desk</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
					<h4>Engage us</h4>
					<ul class="tcm-footer-links">
						<li><a href="#">Matters Masomo</a></li>
						<li><a href="#">Contact Us</a></li>

					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
					<h4>Consultation</h4>
					<ul class="tcm-footer-links">
						<li><a href="#">Find A Mentor</a></li>
						<li><a href="#">Find a Course</a></li>
					</ul>
				</div>
			</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2017 Tropical College of Management . All Rights Reserved.</small>
						<small class="block">Designed by <a href="#" target="_blank">iMond Solutions</a></small>
					</p>
					<p>
						<ul class="tcm-social-icons">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#" target="_blank"><i class="icon-linkedin"></i></a></li>
							<li><a href="http://github.com/mondeer" target="_blank"><i class="icon-github"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	<script>
    $(document).ready(function(){
        $("#myModal").on("show.bs.modal", function(e) {
            var id = $(e.relatedTarget).data('target-id');
            $.get( "/controller/" + id, function( data ) {
                $(".modal-body").html(data.html);
            });

        });
    });
	</script>

	</body>
</html>
