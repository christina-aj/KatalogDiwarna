<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>DIWARNA | Contact Us</title>

<!-- Stylesheets -->
<link href="<?= Yii::getAlias('@web') ?>/assets/css/bootstrap.css" rel="stylesheet">
<link href="<?= Yii::getAlias('@web') ?>/assets/css/style.css" rel="stylesheet">
<link href="<?= Yii::getAlias('@web') ?>/assets/css/meanmenu.min.css" rel="stylesheet">
<link href="<?= Yii::getAlias('@web') ?>/assets/css/responsive.css" rel="stylesheet">

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

<link rel="shortcut icon" href="<?= Yii::getAlias('@web') ?>/assets/images/favicon.png" type="image/x-icon">
<link rel="icon" href="<?= Yii::getAlias('@web') ?>/assets/images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>


<?php $this->beginBody() ?>
<body>
<div class="page-wrapper">
	<!-- Contact Info -->
	<section class="contact-info">
		<div class="auto-container">
			<div class="row clearfix">

				<!-- Info Block One -->
				<div class="info-block_one col-lg-4 col-md-6 col-sm-12">
					<div class="info-block_one-inner">
						<div class="info-block_one-icon">
							<i class="flaticon-telephone"></i>
						</div>
						<h4>Telepon</h4>
						<a href="tel:+6282117761248">+62821177612488</a> <br>
					</div>
				</div>

				<!-- Info Block One -->
				<div class="info-block_one active col-lg-4 col-md-6 col-sm-12">
					<div class="info-block_one-inner">
						<div class="info-block_one-icon">
							<i class="flaticon-mail"></i>
						</div>
						<h4>Email</h4>
						<a href="mailto:">order@diwarna.com</a> <br>
					</div>
				</div>

				<!-- Info Block One -->
				<div class="info-block_one col-lg-4 col-md-6 col-sm-12">
					<div class="info-block_one-inner">
						<div class="info-block_one-icon">
							<i class="flaticon-placeholder"></i>
						</div>
						<h4>Lokasi</h4>
						<div class="text">Jl. Kedinding Lor Gg Anggrek No. 36, Surabaya</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End Faq One -->

	<!-- Contact Two -->
	<section class="contact-two">
		<div class="auto-container">
			<div class="row clearfix">
				<!-- Column -->
				<div class="column col-lg-5 col-md-12 col-sm-12">
					<!-- Sec Title -->
					<div class="sec-title">
						<div class="sec-title_title">Contact Me</div>
						<h2 class="sec-title_heading">Contact with me for Best assistance Now!</h2>
					</div>
					<!-- Social Box -->
					<div class="contact-social_box">
						<a href="https://facebook.com/"><i class="fa-brands fa-facebook-f"></i></a>
						<a href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a>
						<a href="https://youtube.com/"><i class="fa-brands fa-youtube"></i></a>
						<a href="https://instagram.com/"><i class="fa-brands fa-instagram"></i></a>
					</div>
				</div>
				<!-- Column -->
				<div class="column col-lg-7 col-md-12 col-sm-12">
					<div class="contact-form">
						<h3 class="contact-one_form-title">Get in Touch...</h3>
						<form method="post" action="sendemail.php" id="contact-form">
							<div class="row clearfix">
								<!--Form Group-->
								<div class="form-group col-lg-6 col-md-6 col-sm-6">
									<input type="text" name="name" value="" placeholder="Name" required>
								</div>
								<!--Form Group-->
								<div class="form-group col-lg-6 col-md-6 col-sm-6">
									<input type="email" name="email" value="" placeholder="Email" required>
								</div>
								<div class="form-group col-lg-6 col-md-6 col-sm-6">
									<input type="text" name="phone" value="" placeholder="Phone" required>
								</div>
								<div class="form-group col-lg-6 col-md-6 col-sm-6">
									<input type="text" name="subject" value="" placeholder="Subject" required>
								</div>
								<div class="col-lg-12 col-md-12 col-sm-12 form-group">
									<textarea class="" name="message" placeholder="Type comment here*"></textarea>
								</div>
								<div class="form-group col-lg-12 col-md-12 col-sm-12">
									<button type="button" class="template-btn btn-style-one">
										<span class="btn-wrap">
											<span class="text-one">Submit Now <i class="flaticon-next"></i></span>
											<span class="text-two">Submit Now <i class="flaticon-next"></i></span>
										</span>
									</button>
								</div>
								
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Contact Two -->

	<!-- Map One -->
	<section class="map-one">
		<div class="auto-container">
			<div class="map-one_map">
				<iframe width="820" height="560" id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.1991734921066!2d112.77272807481249!3d-7.21810799278773!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f84e25971a4f%3A0x507848b9324d3e60!2sJalan%20Kedinding%20Lor%20Gg.%20Anggrek%20No.36%2C%20RT.008%2FRW.01%2C%20Tanah%20Kali%20Kedinding%2C%20Kec.%20Kenjeran%2C%20Surabaya%2C%20Jawa%20Timur%2060129!5e0!3m2!1sid!2sid!4v1726853919975!5m2!1sid!2sid"></iframe>
			</div>
		</div>
	</section>
	<!-- End Map One -->
	
	<!-- Search Popup -->
	<div class="search-popup">
		<div class="color-layer"></div>
		<button class="close-search"><span class="flaticon-close-1"></span></button>
		<form method="post" action="blog.html">
			<div class="form-group">
				<input type="search" name="search-field" value="" placeholder="Search Here" required="">
				<button class="fa fa-solid fa-magnifying-glass fa-fw" type="submit"></button>
			</div>
		</form>
	</div>
	<!-- End Search Popup -->
	
	<!-- Sidebar Cart Item -->
	<div class="xs-sidebar-group info-group">
		<div class="xs-overlay xs-bg-black"></div>
		<div class="xs-sidebar-widget">
			<div class="sidebar-widget-container">
				<div class="close-button">
					<span class="fa-solid fa-xmark fa-fw"></span>
				</div>
				<div class="sidebar-textwidget">
					
					<!-- Sidebar Info Content -->
					<div class="sidebar-info-contents">
						<div class="content-inner">
						
							<!-- Title Box -->
							<div class="title-box">
								<h5>Vroom <span>Bikers</span></h5>
								<div class="price">$15 from free economy shipping</div>
							</div>
							
							<!-- Empty Cart Box -->
							<div class="empty-cart-box">
								<!-- No Product -->
								<div class="no-cart">
									<span class="icon fa-solid fa-cart-flatbed-suitcase fa-fw"></span>
									No products in cart.
								</div>
							</div>
							
							<!-- Lower Box -->
							<div class="lower-box">
								<h5>Popular <span>Suggestions</span></h5>
									
								<!-- Post Block -->
								<div class="post-block">
									<div class="inner-box">
										<div class="image">
											<img src="<?= Yii::getAlias('@web') ?>/assets/images/resource/post-thumb-1.jpg" alt="" />
										</div>
										<h6><a href="#">Motorcycle Rallies</a></h6>
										<div class="rating">
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
										</div>
										<div class="price-box">$125</div>
										<a class="theme-btn bag-btn" href="#">add to bag</a>
									</div>
								</div>
								
								<!-- Post Block -->
								<div class="post-block">
									<div class="inner-box">
										<div class="image">
											<img src="<?= Yii::getAlias('@web') ?>/assets/images/resource/post-thumb-2.jpg" alt="" />
										</div>
										<h6><a href="#">Adventure Tours</a></h6>
										<div class="rating">
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
										</div>
										<div class="price-box">$205</div>
										<a class="theme-btn bag-btn" href="#">add to bag</a>
									</div>
								</div>
								
								<!-- Post Block -->
								<div class="post-block">
									<div class="inner-box">
										<div class="image">
											<img src="<?= Yii::getAlias('@web') ?>/assets/images/resource/post-thumb-3.jpg" alt="" />
										</div>
										<h6><a href="#">Group Rides</a></h6>
										<div class="rating">
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
										</div>
										<div class="price-box">$25</div>
										<a class="theme-btn bag-btn" href="#">add to bag</a>
									</div>
								</div>
								
							</div>
							
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	
	<!-- About Sidebar -->
	<div class="about-sidebar">
		<div class="gradient-layer"></div>
		<!-- Close Button -->
		<div class="close-sidebar-widget close-button">
			<span class="fa-solid fa-xmark fa-fw"></span>
		</div>
		<div class="sidebar-inner">
			<div class="upper-box">
				<div class="image">
					<img src="<?= Yii::getAlias('@web') ?>/assets/images/resource/about.jpg" alt="" />
				</div>
				<div class="content-box">
					<h3>About <span>vroom</span></h3>
					<div class="text">From scenic rides to thrilling encounters, our videos showcase the beauty and camaraderie of motorcycling. Whether  an experienced rider or a curious newcomer, there's something for everyone to enjoy in our content of moto vloggers.</div>
					<ul class="about-one_list">
						<li>Motorcycle Rallies</li>
						<li>Adventure Tours</li>
						<li>Group Rides</li>
						<li>Road Warrior</li>
					</ul>
				</div>
			</div>
			<!-- Social Box -->
			<div class="social-box">
				<a href="https://facebook.com/"><i class="fa-brands fa-facebook-f"></i></a>
				<a href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a>
				<a href="https://youtube.com/"><i class="fa-brands fa-youtube"></i></a>
				<a href="https://instagram.com/"><i class="fa-brands fa-instagram"></i></a>
			</div>
		</div>
	</div>
	<!-- End About Sidebar -->
	
</div>
<!-- End PageWrapper -->

<script src="<?= Yii::getAlias('@web') ?>/assets/js/jquery.js"></script>
<script src="<?= Yii::getAlias('@web') ?>/assets/js/popper.min.js"></script>
<script src="<?= Yii::getAlias('@web') ?>/assets/js/bootstrap.min.js"></script>
<script src="<?= Yii::getAlias('@web') ?>/assets/js/appear.js"></script>
<script src="<?= Yii::getAlias('@web') ?>/assets/js/parallax.min.js"></script>
<script src="<?= Yii::getAlias('@web') ?>/assets/js/tilt.jquery.min.js"></script>
<script src="<?= Yii::getAlias('@web') ?>/assets/js/jquery.paroller.min.js"></script>
<script src="<?= Yii::getAlias('@web') ?>/assets/js/wow.js"></script>
<script src="<?= Yii::getAlias('@web') ?>/assets/js/swiper.min.js"></script>
<script src="<?= Yii::getAlias('@web') ?>/assets/js/backtotop.js"></script>
<script src="<?= Yii::getAlias('@web') ?>/assets/js/odometer.js"></script>
<script src="<?= Yii::getAlias('@web') ?>/assets/js/parallax-scroll.js"></script>

<script src="<?= Yii::getAlias('@web') ?>/assets/js/gsap.min.js"></script>
<script src="<?= Yii::getAlias('@web') ?>/assets/js/SplitText.min.js"></script>
<script src="<?= Yii::getAlias('@web') ?>/assets/js/ScrollTrigger.min.js"></script>
<script src="<?= Yii::getAlias('@web') ?>/assets/js/ScrollToPlugin.min.js"></script>
<script src="<?= Yii::getAlias('@web') ?>/assets/js/ScrollSmoother.min.js"></script>

<script src="<?= Yii::getAlias('@web') ?>/assets/js/magnific-popup.min.js"></script>
<script src="<?= Yii::getAlias('@web') ?>/assets/js/jquery.meanmenu.min.js"></script>
<script src="<?= Yii::getAlias('@web') ?>/assets/js/nav-tool.js"></script>
<script src="<?= Yii::getAlias('@web') ?>/assets/js/jquery-ui.js"></script>
<script src="<?= Yii::getAlias('@web') ?>/assets/js/validate.js"></script>
<script src="<?= Yii::getAlias('@web') ?>/assets/js/element-in-view.js"></script>
<script src="<?= Yii::getAlias('@web') ?>/assets/js/script.js"></script>

<?php $this->endBody() ?>
</body>
</html>