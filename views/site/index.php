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
			
				<div class="category-buttons">
					<button class="btn btn-category" data-kategori="all">Semua Kategori</button>
					<?php foreach ($kategori as $kat): ?>
						<button class="btn btn-category" data-kategori="<?= $kat->slug ?>"><?= $kat->nama_kategori ?></button>
					<?php endforeach; ?>
				</div>
			</div>

			<div class="three-items_slider swiper-container">
				<div class="swiper-wrapper">

					<!-- Slide -->
					<?php foreach ($katalog_awal as $kat): ?>
					<div class="swiper-slide" data-kategori="<?= $kat->subKategori->kategori->slug ?>">
						<!-- Event Block One -->
						<div class="event-block_one">
							<div class="event-block_one-inner">
								<div class="event-block_one-image">
									<a href="<?= \yii\helpers\Url::to(['site/event-detail', 'id' => $kat->katalog_awal_id]) ?>"><img src="<?= $kat->url_k_awal ?>" alt="" /></a>
								</div>
								<div class="event-block_one-content">
									<div class="upper-box">
										<!-- <div class="event-block_one-date">June 12-14, 2024</div> -->
										<h4 class="event-block_one-title"><a href="<?= \yii\helpers\Url::to(['site/event-detail', 'id' => $kat->katalog_awal_id]) ?>"><?= $kat->text_k_awal?></a></h4>
										<div class="event-block_one-text"><?= $kat->desc_k_awal?> </div>
									</div>
									<div class="lower-box">
										<a class="event-block_one-location" href="<?= \yii\helpers\Url::to(['site/event-detail', 'id' => $kat->katalog_awal_id]) ?>"><i class="flaticon-send-1"></i>Lihat Produk Badge Bordir</a>
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
					<a href="site/about-diwarna#galeri" class="theme-btn btn-style-two">
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
						<?php foreach ($foto_slide as $fs): ?>
						<div class="swiper-slide">
							<!-- Vlog Block One -->
							<div class="vlog-block_one">
								<div class="vlog-block_one-inner">
									<div class="vlog-block_one-image">
										<img src="<?= $fs->url_foto_slide ?>" alt="<?= $fs->alt_foto_slide?>" />
										<div class="vlog-block_one-content">
											<ul class="vlog-block_one-meta">
												<li><a href="#">Kaos Kaki</a></li>
												<li><a href="#">Badge</a></li>
											</ul>
											<!-- <h3 class="vlog-block_one-title"><a href="blog-detail.html">Epic Ride Exploring California <br> on Two Wheels</a></h3> -->
											<h3 class="vlog-block_one-title"><a href="#"><?= $fs->judul_foto_slide?> <br><?= $fs->desk_foto_slide?></a></h3>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php endforeach; ?>
						<!-- Slide -->
						<!-- <div class="swiper-slide">
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
						</div> -->
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
	<section class="faq-one" id="faq">
		<div class="faq-one_pattern" style="background-image:url(assets/images/background/pattern-2.png)"></div>
		<div class="auto-container">
			<div class="inner-container">
				<div class="row clearfix">
					
					<!-- Image Column -->
					<div class="faq-one_form-column col-lg-6 col-md-12 col-sm-12">
						<div class="faq-one_form-outer">
						<div class="image-container">
							<img src="<?= Yii::getAlias('@web') ?>/assets/images/resource/about-diwarna.png" alt="Contact Image" style="width: 100%; height: auto; display: block;">
						</div>
						</div>
					</div>
					
					<!-- Accordion Column -->
					<div class="faq-one_accordion-column col-lg-6 col-md-12 col-sm-12">
						<div class="faq-one_accordion-outer">
							<!-- Sec Title -->
							<div class="sec-title title-anim">
								<div class="sec-title_title"><i><img src="assets/images/main-slider/grid.svg" alt="" /></i> Punya Pertanyaan?</div>
								<h2 class="sec-title_heading">Frequently Asked Questions Tentang Diwarna.</h2>
							</div>
							
							<!-- Accordion Box -->
							<ul class="accordion-box">
										
								<!-- Block -->
								<li class="accordion block active-block">
									<div class="acc-btn active"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>Berapa Minimum Order Quantity pesan produk kustom?</div>
									<div class="acc-content current">
										<div class="content">
											<div class="text">Untuk MOQ (Minimum Order Quantity) atau pemeesanan produk minimal ialah mulai dari 60 pcs per item.</div>
										</div>
									</div>
								</li>
											
								<!-- Block -->
								<li class="accordion block">
									<div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>Berapa lama estimasi pengerjaan pesanan?</div>
									<div class="acc-content">
										<div class="content">
											<div class="text">Untuk proses pengerjaan estimasi kurang lebih selama 5 - 21 hari kerja. Estimasi ini tergantung kepada jumlah pesanan dan juga antrian pesanan saat itu.</div>
										</div>
									</div>
								</li>
								
								<!-- Block -->
								<li class="accordion block">
									<div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>Bagaimana cara untuk memesan produk Diwarna?</div>
									<div class="acc-content">
										<div class="content">
											<div class="text">Untuk pemesanan produk dapat dilakukan melalui sales marketing Diwarna yang bisa dihubungi via akun sosial media atau WA yang tercantum di website ini.</div>
										</div>
									</div>
								</li>
											
								<!-- Block -->
								<!-- <li class="accordion block">
									<div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>How do you mount your camera?</div>
									<div class="acc-content">
										<div class="content">
											<div class="text">Lorem ipsum dolor sit amet consectetur adipis of our cing elit Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris.Interview fellow riders, vendors, and organizers.</div>
										</div>
									</div>
								</li> -->
								
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
<!-- <script src="<?= Yii::getAlias('@web') ?>/assets/js/script.js"></script> -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="<?= Yii::getAlias('@web') ?>/assets/js/katalogcat.js"></script>


<?php $this->endBody() ?>
</body>
</html>

