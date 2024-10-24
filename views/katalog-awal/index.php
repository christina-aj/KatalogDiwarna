<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\SidebarWidget;
use yii\helpers\Url;
use yii\bootstrap5\Html;

?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Vroom Biker & Hiker Business HTML-5 Template | Homepage 01</title>

<!-- Stylesheets -->
<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/meanmenu.min.css" rel="stylesheet">
<link href="assets/css/responsive.css" rel="stylesheet">

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

<link rel="shortcut icon" href="<?= Yii::getAlias('@web') ?>/assets/images/favicon.svg" type="image/x-icon">
<link rel="icon" href="<?= Yii::getAlias('@web') ?>/assets/images/favicon.svg" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>
<?php $this->beginBody() ?>

<div class="page-wrapper">
	
	<!-- Cursor -->
	<div class="cursor"></div>
	<div class="cursor-follower"></div>
	<!-- Cursor End -->
 	
	<!-- Preloader -->
    <div class="preloader"></div>
	<!-- End Preloader -->
	
	<!-- Main Header -->
	<header class="main-header">
		
		<!-- Header Top -->
		<div class="header-top">
			<div class="auto-container">
				<div class="inner-container">
					<div class="d-flex justify-content-between align-items-center flex-wrap">
						<div class="left-box d-flex align-items-center flex-wrap">
							<!-- Info List -->
							<ul class="header-top_list d-flex flex-wrap">
								<li><span class="icon flaticon-send-1"></span><a href="mailto:info@diwarna.com">info@diwarna.com</a></li>
								<li><span class="icon flaticon-telephone"></span><a href="tel:+56-955-525-285"> 0812-1725-7108</a></li>
							</ul>
						</div>
						<div class="right-box d-flex align-items-center flex-wrap">
							
							<!-- Language DropDown -->
							<!-- <div class="language-dropdown">
								<button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
									<i class="flaticon-language"></i> Language <span class="fa fa-solid fa-angle-down fa-fw"></span>
								  </button>
								<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
									<li><a class="dropdown-item" href="#">English</a></li>
									<li><a class="dropdown-item" href="#">Arbic</a></li>
									<li><a class="dropdown-item" href="#">German</a></li>
									<li><a class="dropdown-item" href="#">French</a></li>
								</ul>
							</div> -->
							
							<!-- Header Socials -->
							<div class="header_socials d-flex align-items-center flex-wrap">
								<!-- <span>Follow Diwarna :</span> -->
								<a class="fa-brands fa-facebook-f fa-fw" href="#"></a>
								<a class="fa-brands fa-instagram fa-fw" href="#"></a>
								<a class="fa-brands fa-twitter fa-fw" href="#"></a>
								<a class="fa-brands fa-google-plus fa-fw" href="#"></a>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Header Lower -->
		<div class="header-lower">
			<div class="auto-container">
				<div class="inner-container">
					<div class="d-flex justify-content-between align-items-center flex-wrap">
							
						<!-- Logo Box -->
						<div class="logo-box">
							<div class="logo"><a href="index.html"><img src="assets/images/diwarna_logo.png" alt="" title=""></a></div>
						</div>
						<!-- End Logo Box -->
						
						<!-- Nav Outer -->
						<div class="nav-outer d-flex align-items-center flex-wrap">
							<!-- Main Menu -->
							<nav class="main-menu navbar-expand-md">
								<div class="navbar-header">
									<!-- Toggle Button -->    	
									<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
								
								<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
									<ul class="navigation clearfix">
										<li><a href="index.html">Home</a></li>
										<li><a class="about-widget">About</a></li>
										
										<!-- <li class="dropdown"><a href="#">Home</a>
											<ul>
												<li><a href="index.html">Homepage 01</a></li>
												<li><a href="index-2.html">Homepage 02</a></li>
												<li><a href="index-3.html">Homepage 03</a></li>
												<li class="dropdown"><a href="#">Header Styles</a>
													<ul>
														<li><a href="index.html">Header 01</a></li>
														<li><a href="index-2.html">Header 02</a></li>
														<li><a href="index-3.html">Header 03</a></li>
													</ul>
												</li>
											</ul> -->
										<!-- </li> -->
										<!-- <li class="dropdown"><a href="#">About</a>
											<ul>
												<li><a href="about.html">About us</a></li>
												<li><a href="faq.html">Faq</a></li>
												<li><a href="gallery.html">Gallery</a></li>
												<li><a href="shop.html">shop</a></li>
												<li><a href="testimonial.html">testimonial</a></li>
												<li><a href="video.html">Video</a></li>
											</ul>
										</li>
										<li class="dropdown"><a href="#">events</a>
											<ul>
												<li><a href="events.html">events</a></li>
												<li><a href="event-detail.html">events detail</a></li>
											</ul>
										</li>
										<li class="dropdown"><a href="#">adventure</a>
											<ul>
												<li><a href="adventure.html">adventure</a></li>
												<li><a href="adventure-detail.html">adventure detail</a></li>
											</ul>
										</li>
										<li class="dropdown"><a href="#">Blog</a>
											<ul>
												<li><a href="blog.html">Blog</a></li>
												<li><a href="blog-classic.html">Blog Classic</a></li>
												<li><a href="blog-detail.html">Blog Detail</a></li>
												<li><a href="not-found.html">Not Found</a></li>
											</ul>
										</li> -->
										<li><a href="contact.html">Contact</a></li>
									</ul>
								</div>
							</nav>
						</div>
						<!-- End Nav Outer -->
						
						<!-- Outer Box -->
						<div class="outer-box d-flex align-items-center flex-wrap">
							
							<!-- Header Options Box -->
							<div class="header-options_box d-flex align-items-center">
							
								<!-- Search Btn -->
								<div class="search-box-btn search-box-outer"><span class="icon fa fa-search"></span></div>
								
								<!-- Nav Btn -->
								<!-- <div class="nav-btn navSidebar-button">
									<i class="fas fa-shopping-cart fa-fw"></i>
									<span>02</span>
								</div> -->
								
								<!-- About Widget -->
								<!-- <span class="about-widget">
									<i class="flaticon-menu-1"></i>
								</span> -->
								
							</div>
							
							<!-- Header Button Box -->
							<!-- <div class="header_button-box">
								<a href="event-detail.html" class="theme-btn btn-style-one">
									<span class="btn-wrap">
										<span class="text-one">Subscribe now <i class="flaticon-bell"></i></span>
										<span class="text-two">Subscribe now <i class="flaticon-bell"></i></span>
									</span>
								</a>
							</div> -->
							<!-- Mobile Navigation Toggler -->
							<div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
						</div>
						<!-- End Outer Box -->
						
					</div>
				</div>
			</div>
		</div>
		<!-- End Header Lower -->
		
		<!-- Mobile Menu  -->
		<div class="mobile-menu">
			<div class="menu-backdrop"></div>
			<div class="close-btn"><span class="icon flaticon-close-1"></span></div>
			
			<nav class="menu-box">
				<div class="nav-logo"><a href="index.html"><img src="<?= Yii::getAlias('@web') ?>/assets/images/diwarna_logo.png" alt="" title=""></a></div>
				<div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
			</nav>
		</div>
		<!-- End Mobile Menu -->
		
	</header>
	<!-- End Main Header -->
	
	<!-- Slider One -->
	<section class="slider-one">
		<div class="slider-one_pattern" style="background-image:url(assets/images/main-slider/pattern-1.png)"></div>
		<div class="main-slider swiper-container">
			<div class="swiper-wrapper">

				<!-- Slide -->
				<div class="swiper-slide">
					<div class="auto-container">
						<div class="row clearfix">
						
							<!-- Content Column -->
							<div class="slider-one_content col-lg-6 col-md-12 col-sm-12">
								<div class="slider-one_content-inner">
									<div class="slider-one_title"><i><img src="assets/images/main-slider/grid.svg" alt="" /></i> Efisien, Hemat, Berkualitas.</div>
									<h1 class="slider-one_heading">Back To School With DIWARNA!</h1>
									<div class="slider-one_text">Berkolaborasi Dengan Teknologi, Kami Menghadirkan EFISIENSI Dalam Pelayanan.</div>
									<div class="slider-one_button">
										<a href="about.html" class="theme-btn btn-style-one">
											<span class="btn-wrap">
												<span class="text-one">Lihat Produk <i class="flaticon-arrow-2"></i></span>
												<span class="text-two">Lihat Produk <i class="flaticon-arrow-2"></i></span>
											</span>
										</a>
									</div>
									<!-- <div class="slider-one_events">
										<div class="slider-one_events-title">Upcoming Events:</div> -->
										<!-- Time Countdown -->
										<!-- <div class="time-countdown clearfix" data-countdown="2024/10/1"></div>
										<a href="#" class="slider-one_events-more">Learn More <i class="flaticon-next-1"></i></a>
									</div> -->
								</div>
							</div>
							
							<!-- Image Column -->
							<div class="slider-one_image-column col-lg-6 col-md-8 col-sm-12">
								<div class="slider-one_image">
									<!-- <img src="assets/images/main-slider/image-1.jpg" alt="" /> -->
									<img src="assets/images/diwarna-logo-png.png" alt="" />
									<div class="slider-one_video">
										<div class="slider-one_video-outer">
											<a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-video slider-one_play"><span class="flaticon-play"><i class="ripple"></i></span></a>
											For Better <br> Understanding
										</div>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End Services One -->
	
	<!-- Events One -->
	<section class="events-one">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title">
				<div class="sec-title_title"><i><img src="assets/images/main-slider/grid.svg" alt="" /></i> PRODUK KAMI</div>
				<h2 class="sec-title_heading">Perlengkapan Sekolah <br> Dengan Bahan Berkualitas</h2>
			</div>
			<div class="three-items_slider swiper-container">
				<div class="swiper-wrapper">

					<!-- Slide -->
					<?php foreach ($katalog_awal as $kat): ?>
					<div class="swiper-slide">
						<!-- Event Block One -->
						<div class="event-block_one">
							<div class="event-block_one-inner">
								<div class="event-block_one-image">
									<a href="event-detail.html"><img src="<?= $kat->url_k_awal ?>" alt="" /></a>
								</div>
								<div class="event-block_one-content">
									<div class="upper-box">
										<!-- <div class="event-block_one-date">June 12-14, 2024</div> -->
										<h4 class="event-block_one-title"><a href="event-detail.html"><?= $kat->text_k_awal?></a></h4>
										<div class="event-block_one-text"><?= $kat->desc_k_awal?> </div>
									</div>
									<div class="lower-box">
										<a class="event-block_one-location" href="event-detail.html"><i class="flaticon-send-1"></i>Lihat Produk Badge Bordir</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php endforeach; ?>
    </section>
	
	<!-- Search Popup -->
	<!-- <div class="search-popup">
		<div class="color-layer"></div>
		<button class="close-search"><span class="flaticon-close-1"></span></button>
		<form method="post" action="blog.html">
			<div class="form-group">
				<input type="search" name="search-field" value="" placeholder="Search Here" required="">
				<button class="fa fa-solid fa-magnifying-glass fa-fw" type="submit"></button>
			</div>
		</form>
	</div> -->
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
											<img src="assets/images/resource/post-thumb-1.jpg" alt="" />
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
											<img src="assets/images/resource/post-thumb-2.jpg" alt="" />
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
											<img src="assets/images/resource/post-thumb-3.jpg" alt="" />
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
					<img src="assets/images/resource/about.jpg" alt="" />
				</div>
				<div class="content-box">
					<h3>About <span>vroom</span></h3>
					<div class="text">From scenic rides to thrilling encounters, our videos showcase the beauty and camaraderie of motorcycling. Whether  an experienced rider or a curious newcomer, there\'s something for everyone to enjoy in our content of moto vloggers.</div>
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

<div class="progress-wrap">
	<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
		<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
	</svg>
</div>

<script src="assets/js/jquery.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/appear.js"></script>
<script src="assets/js/parallax.min.js"></script>
<script src="assets/js/tilt.jquery.min.js"></script>
<script src="assets/js/jquery.paroller.min.js"></script>
<script src="assets/js/wow.js"></script>
<script src="assets/js/swiper.min.js"></script>
<script src="assets/js/backtotop.js"></script>
<script src="assets/js/odometer.js"></script>
<script src="assets/js/parallax-scroll.js"></script>

<script src="assets/js/gsap.min.js"></script>
<script src="assets/js/SplitText.min.js"></script>
<script src="assets/js/ScrollTrigger.min.js"></script>
<script src="assets/js/ScrollToPlugin.min.js"></script>
<script src="assets/js/ScrollSmoother.min.js"></script>

<script src="assets/js/magnific-popup.min.js"></script>
<script src="assets/js/jquery.meanmenu.min.js"></script>
<script src="assets/js/nav-tool.js"></script>
<script src="assets/js/jquery-ui.js"></script>
<script src="assets/js/jquery.countdown.js"></script>
<script src="assets/js/element-in-view.js"></script>
<script src="assets/js/script.js"></script>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
