<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\SidebarWidget;
use yii\helpers\Url;
use yii\bootstrap5\Html;


$KatalogDetail = Url::to(['site/event-detail']);


$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
$this->title = 'Homepage'; 
?>

<?php $this->beginPage() ?>

<?php $this->beginBody() ?>
<body>

<div class="page-wrapper">
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
									<div class="slider-one_title"><i><img src="<?= Yii::getAlias('@web') ?>/assets/images/main-slider/grid.svg" alt="" /></i> Efisien, Hemat, Berkualitas.</div>
									<h1 class="slider-one_heading">Back To School With DIWARNA!</h1>
									<div class="slider-one_text">Berkolaborasi Dengan Teknologi, Kami Menghadirkan EFISIENSI Dalam Pelayanan.</div>
									<div class="slider-one_button">
										<a href="#produk-kami" class="theme-btn btn-style-one">
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
									<img src="<?= Yii::getAlias('@web') ?>/assets/images/diwarna-logoo.png" alt="" />
									<!-- <div class="slider-one_video">
										<div class="slider-one_video-outer">
											<a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-video slider-one_play"><span class="flaticon-play"><i class="ripple"></i></span></a>
											For Better <br> Understanding
										</div>
									</div> -->
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
	<section class="events-one" id="produk-kami">
		
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title">
				<div class="sec-title_title"><i><img src="<?= Yii::getAlias('@web') ?>/assets/images/main-slider/grid.svg" alt="" /></i> PRODUK KAMI</div>
				<h2 class="sec-title_heading">Perlengkapan Sekolah <br> Dengan Bahan Berkualitas</h2>

			<div class="vlog-one_button">
				<a href="site/about-diwarna" class="theme-btn btn-style-two">
					<span class="btn-wrap">
						<span class="text-one">Lihat Lebih Banyak<i class="flaticon-next-1"></i></span>
						<!-- <span class="text-two">Lihat Lebih Banyak<i class="flaticon-next-1"></i></span> -->
					</span>
				</a>
			</div>
			</div>

			<!-- Category Buttons -->
			<!-- <div class="category-buttons">
				<button class="category-button">Semua</button>
				<button class="category-button">Pakaian</button>
				<button class="category-button">Aksesoris</button>
			</div> -->

			

			

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
					
				</div>
				
				<!-- If we need pagination -->
				<div class="three-items_slider-pagination"></div>
				
				<!-- If we need navigation buttons -->

				<!-- <div class="three-items_slider-prev fas fa-angle-left fa-fw"></div>
				<div class="three-items_slider-next fas fa-angle-right fa-fw"></div> -->
				
				
			</div>
			
		</div>
	</section>
	<!-- End Events One -->
	
	<!-- vlog One -->
	<section class="vlog-one">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title d-flex justify-content-between align-items-center flex-wrap">
				<div class="left-box">
					<div class="sec-title_title"><i><img src="assets/images/main-slider/grid.svg" alt="" /></i> Galeri</div>
					<h2 class="sec-title_heading">Galeri Produk DIWARNA</h2>
				</div>
				<!-- Button -->
				<div class="vlog-one_button">
					<a href="site/about-diwarna" class="theme-btn btn-style-two">
						<span class="btn-wrap">
							<span class="text-one">Lihat Lebih Banyak<i class="flaticon-next-1"></i></span>
							<span class="text-two">Lihat Lebih Banyak<i class="flaticon-next-1"></i></span>
						</span>
					</a>
				</div>
			</div>
			<div class="inner-container">
				<div class="single-item_slider swiper-container">
					<div class="swiper-wrapper">

						<!-- Slide -->
						<div class="swiper-slide">
							<!-- Vlog Block One -->
							<div class="vlog-block_one">
								<div class="vlog-block_one-inner">
									<div class="vlog-block_one-image">
										<img src="assets/images/produk/slider1.png" alt="" />
										<!-- <img src="assets/images/resource/vlog-1.jpg" alt="" /> -->
										<div class="vlog-block_one-content">
											<ul class="vlog-block_one-meta">
												<li><a href="#">Kaos Kaki</a></li>
												<li><a href="#">Badge</a></li>
											</ul>
											<!-- <h3 class="vlog-block_one-title"><a href="blog-detail.html">Epic Ride Exploring California <br> on Two Wheels</a></h3> -->
											<h3 class="vlog-block_one-title"><a href="#">Badge Keperluan Apapun <br> Badge Bordir, Rajut, Sablon</a></h3>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Slide -->
						<div class="swiper-slide">
							<!-- Vlog Block One -->
							<div class="vlog-block_one">
								<div class="vlog-block_one-inner">
									<div class="vlog-block_one-image">
										<img src="assets/images/produk/slider2.png" alt="" />
										<div class="vlog-block_one-content">
											<ul class="vlog-block_one-meta">
												<li><a href="#">Kaos Kaki</a></li>
												<li><a href="#">Badge</a></li>
											</ul>
											<h3 class="vlog-block_one-title"><a href="#">Kaos Kaki Keperluan Apapun <br> Bahan Kain Bagus</a></h3>
										</div>
									</div>
								</div>
							</div>
					</div>
					</div>
				</div>
				
				<!-- If we need navigation buttons -->
				<div class="single-item_slider-prev fas fa-arrow-left fa-fw"></div>
				<div class="single-item_slider-next fas fa-arrow-right fa-fw"></div>
				
				<!-- If we need pagination -->
				<div class="single-item_slider-pagination"></div>
				
			</div>
		</div>
	</section>
	<!-- End vlog One -->
	
	<!-- Faq One -->
	<section class="faq-one">
		<div class="faq-one_pattern" style="background-image:url(assets/images/background/pattern-2.png)"></div>
		<div class="auto-container">
			<div class="inner-container">
				<div class="row clearfix">
					
					<!-- Image Column -->
					<div class="faq-one_form-column col-lg-6 col-md-12 col-sm-12">
						<div class="faq-one_form-outer">
							<h3 class="faq-one_form-title">Get in Touch...</h3>
							<div class="default-form">
								<form method="post" action="contact.html">
									
									<!--Form Group-->
									<div class="form-group">
										<input type="text" name="name" value="" placeholder="Name*" required>
									</div>
									
									<!--Form Group-->
									<div class="form-group">
										<input type="email" name="email" value="" placeholder="Email*" required>
									</div>
									
									<div class="form-group">
										<input type="text" name="phone" value="" placeholder="Phone*" required>
									</div>
									
									<!--Form Group-->
									<div class="form-group">
										<select name="country" class="custom-select-box">
											<option>Subject</option>
											<option>Subject 01</option>
											<option>Subject 02</option>
											<option>Subject 03</option>
										</select>
									</div>
									
									<div class="form-group">
										<textarea class="" name="message" placeholder="Message"></textarea>
									</div>
									
									<div class="form-group">
										<button type="button" class="template-btn btn-style-three">
											<span class="btn-wrap">
												<span class="text-one">submit now <i class="flaticon-next"></i></span>
												<span class="text-two">submit now <i class="flaticon-next"></i></span>
											</span>
										</button>
									</div>
									
								</form>
							</div>
						</div>
					</div>
					
					<!-- Accordion Column -->
					<div class="faq-one_accordion-column col-lg-6 col-md-12 col-sm-12">
						<div class="faq-one_accordion-outer">
							<!-- Sec Title -->
							<div class="sec-title title-anim">
								<div class="sec-title_title"><i><img src="assets/images/main-slider/grid.svg" alt="" /></i> Got Questions?</div>
								<h2 class="sec-title_heading">Frequently Asked Questions About Moto Vlogging.</h2>
							</div>
							
							<!-- Accordion Box -->
							<ul class="accordion-box">
										
								<!-- Block -->
								<li class="accordion block active-block">
									<div class="acc-btn active"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>How do you stay safe while moto vlogging?</div>
									<div class="acc-content current">
										<div class="content">
											<div class="text">Lorem ipsum dolor sit amet consectetur adipis of our cing elit Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris.Interview fellow riders, vendors, and organizers.</div>
										</div>
									</div>
								</li>
											
								<!-- Block -->
								<li class="accordion block">
									<div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>Can you recommend any resources?</div>
									<div class="acc-content">
										<div class="content">
											<div class="text">Lorem ipsum dolor sit amet consectetur adipis of our cing elit Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris.Interview fellow riders, vendors, and organizers.</div>
										</div>
									</div>
								</li>
								
								<!-- Block -->
								<li class="accordion block">
									<div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>How do you deal with negative comments?</div>
									<div class="acc-content">
										<div class="content">
											<div class="text">Lorem ipsum dolor sit amet consectetur adipis of our cing elit Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris.Interview fellow riders, vendors, and organizers.</div>
										</div>
									</div>
								</li>
											
								<!-- Block -->
								<li class="accordion block">
									<div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>How do you mount your camera?</div>
									<div class="acc-content">
										<div class="content">
											<div class="text">Lorem ipsum dolor sit amet consectetur adipis of our cing elit Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris.Interview fellow riders, vendors, and organizers.</div>
										</div>
									</div>
								</li>
								
							</ul>
						</div>
					</div>
				
				</div>
			</div>
		</div>
	</section>
	<!-- End Faq One -->
	
	<!-- Newsletter One -->
	<section class="newsletter-one">
		<div class="auto-container">
			<div class="inner-container">
				<div class="newsletter-one_pattern" style="background-image: url(assets/images/background/pattern-3.png)"></div>
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
	
	<!-- Main Footer -->
	<footer class="main-footer">
		<div class="main-footer_stars" style="background-image: url(assets/images/background/stars.png)"></div>
		<div class="main-footer_pattern" style="background-image: url(assets/images/background/pattern-4.png)"></div>
		<!-- Widgets Section -->
		<div class="widgets-section">
			<div class="auto-container">
				<div class="row clearfix">
							
					<!-- Big Column -->
					<div class="big-column col-lg-6 col-md-12 col-sm-12">
						<div class="row clearfix">

							<!-- Footer Column -->
							<div class="footer_column col-lg-6 col-md-6 col-sm-12">
								<div class="footer-widget">
									<div class="footer-logo"><a href="index.html"><img src="assets/images/diwarna_logo.png" alt="" title=""></a></div>
									<div class="footer-text">Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi. Aliquam in hendrerit urna pellentes.</div>
									<!-- Social Box -->
									<div class="footer_socials">
										<a href="https://facebook.com/"><i class="fa-brands fa-facebook-f"></i></a>
										<a href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a>
										<a href="https://youtube.com/"><i class="fa-brands fa-youtube"></i></a>
										<a href="https://instagram.com/"><i class="fa-brands fa-instagram"></i></a>
									</div>
								</div>
							</div>

							<!-- Footer Column -->
							<div class="footer_column col-lg-6 col-md-6 col-sm-12">
								<div class="footer-widget links-widget">
									<h5 class="footer-title">Useful Link</h5>
									<ul class="footer-list">
										<li><a href="#">Home</a></li>
										<li><a href="#">About Us</a></li>
										<li><a href="#">My Gear</a></li>
										<li><a href="#">My Videos</a></li>
										<li><a href="#">My Gallery</a></li>
										<li><a href="#">Services</a></li>
										<li><a href="#">Join Me</a></li>
									</ul>
								</div>
							</div>

						</div>
					</div>

					<!-- Big Column -->
					<div class="big-column col-lg-6 col-md-12 col-sm-12">
						<div class="row clearfix">

							<!-- Footer Column -->
							<div class="footer_column col-lg-6 col-md-6 col-sm-12">
								<div class="footer-widget links-widget">
									<h5 class="footer-title">Resources</h5>
									<ul class="footer-list">
										<li><a href="#">Blog</a></li>
										<li><a href="#">Faq\'s</a></li>
										<li><a href="#">Help Center</a></li>
										<li><a href="#">Case Studies</a></li>
										<li><a href="#">Whitepapers</a></li>
										<li><a href="#">services</a></li>
										<li><a href="#">Contact Me</a></li>
									</ul>
								</div>
							</div>

							<!-- Footer Column -->
							<div class="footer_column col-lg-6 col-md-6 col-sm-12">
								<div class="footer-widget instagram-widget">
									<h5 class="footer-title">My Gallery</h5>
									<div class="images-outer clearfix">
										<!--Image Box-->
										<figure class="image-box"><a class="lightbox-image" href="assets/images/gallery/1.jpg"><img src="assets/images/gallery/instagram-1.jpg" alt=""></a></figure>
										<!--Image Box-->
										<figure class="image-box"><a class="lightbox-image" href="assets/images/gallery/2.jpg"><img src="assets/images/gallery/instagram-2.jpg" alt=""></a></figure>
										<!--Image Box-->
										<figure class="image-box"><a class="lightbox-image" href="assets/images/gallery/3.jpg"><img src="assets/images/gallery/instagram-3.jpg" alt=""></a></figure>
										<!--Image Box-->
										<figure class="image-box"><a class="lightbox-image" href="assets/images/gallery/4.jpg"><img src="assets/images/gallery/instagram-4.jpg" alt=""></a></figure>
										<!--Image Box-->
										<figure class="image-box"><a class="lightbox-image" href="assets/images/gallery/5.jpg"><img src="assets/images/gallery/instagram-5.jpg" alt=""></a></figure>
										<!--Image Box-->
										<figure class="image-box"><a class="lightbox-image" href="assets/images/gallery/6.jpg"><img src="assets/images/gallery/instagram-6.jpg" alt=""></a></figure>
									</div>
								</div>
							</div>

						</div>
					</div>

				</div>
				
				<div class="footer-info_outer">
					<h5 class="footer-title">Contact Me</h5>
					<div class="row clearfix">
						<!-- Column -->
						<div class="column col-lg-4 col-md-4 col-sm-6">
							<div class="title">Call Me</div>
							<a href="tel:+56-955-525-285">+56-955-525-285</a>
						</div>
						<!-- Column -->
						<div class="column col-lg-4 col-md-4 col-sm-6">
							<div class="title">Email Me</div>
							<a href="mailto:hello-bikers@vroom.com">hello-bikers@vroom.com</a>
						</div>
						<!-- Column -->
						<div class="column col-lg-4 col-md-4 col-sm-6">
							<div class="title">Location</div>
							<div class="text">Stockton, New Hampshire</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
		<!-- End Widgets Section -->
	
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
					<img src="<?= Yii::getAlias('@web') ?>/assets/images/resource/about.jpg" alt="" />
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<script>
	$(document).ready(function(){
    // Select all links with hashes
    $('a[href^="#"]').on('click', function(event) {
        event.preventDefault();

        var target = this.hash;
        var $target = $(target);

        $('html, body').animate({
            scrollTop: $target.offset().top
        }, 1000, function(){
            window.location.hash = target;
        });
    });
});
</script>

<?php $this->endBody() ?>
</body>
</html>

