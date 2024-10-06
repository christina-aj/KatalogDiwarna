<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Vroom Biker & Hiker Business HTML-5 Template | Event Detail</title>

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
		<!-- Mobile Menu  -->
		<div class="mobile-menu">
			<div class="menu-backdrop"></div>
			<div class="close-btn"><span class="icon flaticon-close-1"></span></div>
			
			<nav class="menu-box">
				<!-- <div class="nav-logo"><a href="index.html"><img src="<?= Yii::getAlias('@web') ?>/assets/images/footer-diwarna_logo.png" alt="" title=""></a></div> -->
				<div class="nav-logo"><a href="index.html"><img src="<?= \yii\helpers\Url::to($katalogAwal->url_k_awal) ?>" alt="" title=""></a></div>


				<div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
			</nav>
		</div>
		<!-- End Mobile Menu -->
		
	</header>
	<!-- End Main Header -->
	
	<!-- Page Title -->
    <!-- <section class="page-title" style="background-image:url(<?= Yii::getAlias('@web') ?>/assets/images/background/1.jpg)"> -->
    <!-- <section class="page-title">
        <div class="auto-container">
			<h2>Detail Produk</h2>
			<ul class="bread-crumb clearfix">
				<li><a href="index.html"><i class="fa-solid fa-house fa-fw"></i> Home</a></li>
				<li>Event Detail</li>
			</ul>
        </div> -->
    </section>
    <!-- End Page Title -->
	
	<!-- Sidebar Page Container -->
    <div class="sidebar-page-container">
    	<div class="auto-container">
        	<div class="row clearfix">
				
				<!-- Content Side -->
				<h2 class="event-detail_main_title">Detail Produk</h2>
                <div class="content-side col-lg-7 col-md-12 col-sm-12">
					<div class="event-detail.html">
						<div class="event-detail_inner">
							<div class="event-detail_image">
								<!-- <img src="<?= Yii::getAlias('@web') ?>/assets/images/resource/event-11.jpg" alt="" /> -->
								<img src="<?= \yii\helpers\Url::to($katalogAwal->url_k_awal) ?>" alt="gambar produk" />
							</div>
							<!-- <div class="event-detail_info">
								<div class="row clearfix">
									<div class="event-detail_info-block col-xl-4 col-lg-6 col-md-6 col-sm-6">
										<div class="event-detail_info-block_inner">
											<div class="event-detail_info-block_content">
												<div class="event-detail_info-block_icon flaticon-calendar-1"></div>
												Event Date
												<strong>20 March, 2024</strong>
											</div>
										</div>
									</div>
									<div class="event-detail_info-block col-xl-4 col-lg-6 col-md-6 col-sm-6">
										<div class="event-detail_info-block_inner">
											<div class="event-detail_info-block_content">
												<div class="event-detail_info-block_icon flaticon-calendar-1"></div>
												Event Timing
												<strong>10.00am - 12:00pm</strong>
											</div>
										</div>
									</div>
									<div class="event-detail_info-block col-xl-4 col-lg-6 col-md-6 col-sm-6">
										<div class="event-detail_info-block_inner">
											<div class="event-detail_info-block_content">
												<div class="event-detail_info-block_icon flaticon-calendar-1"></div>
												Event Location
												<strong>Stockton, 408-E</strong>
											</div>
										</div>
									</div>
								</div>
							</div> -->
							<h3 class="event-detail_title"><?= $katalogAwal->text_k_awal ?></h3>
							<!-- <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa me. Aliquam  hendrerit urna  vitae mattis tellus ultrices.. Pellentesque sit amet sapien fringilla, mattis Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi. Aliquam  hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices Maecenas ligula consectetur, ultric Maecenas vitae mattis tellus.</p> -->
							<p><?= $katalogAwal->detailProduk->deskripsi_detail_p ?></p>
							<ul class="event-detail_list">
								<li><i class="fa-solid fa-check fa-fw"></i><?= $katalogAwal->detailProduk->list_desk_detail_p ?></li>
								<li><i class="fa-solid fa-check fa-fw"></i>Commitment to Excellence</li>
								<li><i class="fa-solid fa-check fa-fw"></i>Collaborative Partnership</li>
							</ul>
							<!-- <p>We are a team of the dedicated patent professionals, united by our commitment toour  excellence patent protection. With years of collective experience acros diverse industries.</p> -->
							<p><?= $katalogAwal->detailProduk->penutup_detail_p ?></p>
						</div>
					</div>
				</div>
				
				<!-- Sidebar Side -->
                <div class="sidebar-side col-lg-5 col-md-12 col-sm-12">
                	<aside class="sidebar">
						
						<!-- Map Widget -->
						<div class="sidebar-widget map-widget">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.1991734921066!2d112.77272807481249!3d-7.21810799278773!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f84e25971a4f%3A0x507848b9324d3e60!2sJalan%20Kedinding%20Lor%20Gg.%20Anggrek%20No.36%2C%20RT.008%2FRW.01%2C%20Tanah%20Kali%20Kedinding%2C%20Kec.%20Kenjeran%2C%20Surabaya%2C%20Jawa%20Timur%2060129!5e0!3m2!1sid!2sid!4v1726853919975!5m2!1sid!2sid"></iframe>
						</div>
						
						<div class="sidebar-inner">
							
							<!-- Support Widget -->
							<div class="sidebar-widget support-widget">
								<div class="widget-content">
									<div class="support-phone">
										<span class="icon flaticon-whatsapp"></span>
										Tertarik Membeli?
										<strong>Segera Hubungi Untuk Order / Tanya</strong>
									</div>
									<!-- <div class="support-widget_pricing">Price start from <span>$20</span></div> -->
									<a href="<?= $katalogAwal->detailProduk->linkwa_detail_p ?>" class="support-widget_button theme-btn">Order Sekarang<i class="flaticon-next"></i></a>
									<div class="support-widget_off">Diskusikan request di Whatsapp</div>
								</div>
							</div>
							
							
						</div>
					</aside>
				</div>
				
			</div>
		</div>
	</div>
	<!-- End Sidebar Page Container -->
	
	<!-- Newsletter One -->
	<section class="newsletter-one">
		<div class="auto-container">
			<div class="inner-container">
				<div class="newsletter-one_pattern" style="background-image: url(<?= Yii::getAlias('@web') ?>/assets/images/background/pattern-3.png)"></div>
				<div class="row clearfix">
					<!-- Column -->
					<div class="column col-lg-6 col-md-12 col-sm-12">
						<h2 class="newsletter-one_heading">Subscribe To My Newsletter for latest Updates</h2>
					</div>
					<!-- Column -->
					<div class="column col-lg-6 col-md-12 col-sm-12">
						<div class="newsletter-box">
							<form method="post" action="contact.html">
								<div class="form-group">
									<span class="icon flaticon-mail"></span>
									<input type="email" name="search-field" value="" placeholder="Your Email" required>
									<button type="submit" class="theme-btn submit-btn">
										Subscribe Now <i class="flaticon-bell"></i>
									</button>
								</div>
							</form>
						</div>
						<div class="newsletter-one_span">*We Never Span</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Newsletter One -->

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

<div class="progress-wrap">
	<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
		<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
	</svg>
</div>

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
<script src="<?= Yii::getAlias('@web') ?>/assets/js/jquery.countdown.js"></script>
<script src="<?= Yii::getAlias('@web') ?>/assets/js/element-in-view.js"></script>
<script src="<?= Yii::getAlias('@web') ?>/assets/js/script.js"></script>

<?php $this->endBody() ?>
</body>
</html>