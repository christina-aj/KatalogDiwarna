<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\SidebarWidget;
use yii\helpers\Url;
use yii\bootstrap5\Html;


$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
$this->title = 'Homepage'; 
?>

<?php $this->beginPage() ?>
<?php $this->beginBody() ?>
<body>
<div class="page-wrapper">
	
	<!-- Page Title -->
    <!-- <section class="page-title" style="background-image:url(<?= Yii::getAlias('@web') ?>/assets/images/background/1.jpg)"> -->
    <section class="page-title" style="background-image:url(<?= Yii::getAlias('@web') ?>/assets/images/background/banner2.png)">
        <div class="auto-containerr">
			<h1 style="color: black;"> CV DIGITAL WARNA MANDIRI</h1>
			<h3 style="color: #5e5e5e;">Computerized and modern textiles embroidery - knitting solution</h3>

			<!-- <ul class="bread-crumb clearfix">
				<li><a href="index.html"><i class="fa-solid fa-house fa-fw"></i> Home</a></li>
				<li>About me</li>
			</ul> -->
        </div>
    </section>
    <!-- End Page Title -->
	
	<!-- About One -->
	<section class="about-one">
		<div class="about-one_pattern" style="background-image:url(<?= Yii::getAlias('@web') ?>/assets/images/background/pattern-1.png)"></div>
		<div class="auto-container">
			<div class="inner-container">
				<div class="row clearfix">
					
					<!-- Image Column -->
					<div class="about-one_image-column col-lg-6 col-md-12 col-sm-12">
						<div class="about-one_image-outer">
							<div class="about-one_image">
								<img src="<?= Yii::getAlias('@web') ?>/assets/images/resource/about-diwarna.png" alt="" />
								<div class="about-one_experiance">
									<span class="odometer" data-count="7"></span><i>+</i>
									<div class="about-one_experiance-text">Tahun Berdiri Melayani</div>
								</div>
							</div>
						</div>
					</div>
					
					<!-- Content Column -->
					<div class="about-one_content-column col-lg-6 col-md-12 col-sm-12">
						<div class="about-one_content-outer">
							<!-- Sec Title -->
							<div class="sec-title title-anim">
								<div class="sec-title_title" style="font-size: 20px;"><i><img src="<?= Yii::getAlias('@web') ?>/assets/images/main-slider/grid.svg" alt="" /></i> CV DIGITAL WARNA MANDIRI</div>
								<h2 class="sec-title_heading" style="font-size: 50px; line-height: 1;">Tentang Perusahaan</h2>
								<div class="sec-title_text">Berdiri sejak tahun 2017 dengan fokus utama terhadap kebutuhan sekolah.
									Customer kami bervariasi dari toko, sales distributor dan sekolah langsung.
									Sekolah yang tersebar di seluruh pelosok Indonesia membuat kami memiliki
									sisi strategis dalam produksi & distribusi terutama di wilayah Indonesia Tengah
									& Timur karena letak kota Surabaya dan memiliki pelabuhan aktif dengan
									tujuan ke seluruh Indonesia.</div>
							</div>
							
							<!-- <div class="about-one_quote">
								<div class="about-one_quote-inner">
									<div class="quote flaticon-quote"></div>
									Find your ultimate freedom on the open Highway road.
									<div class="author d-flex justify-content-end"><i class="flaticon-arrow"></i> Micle Munies</div>
								</div>
							</div> -->
							
							<!-- Button -->
							<!-- <div class="about-one_button">
								<a href="adventure-detail" class="theme-btn btn-style-two">
									<span class="btn-wrap">
										<span class="text-one">Contact with Me <i class="flaticon-next-1"></i></span>
										<span class="text-two">Contact with Me <i class="flaticon-next-1"></i></span>
									</span>
								</a>
							</div> -->
							
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</section>
	<!-- End About One -->

	<!-- Testimonial Three -->
	<section class="testimonial-three">
		<div class="auto-container">
			<div class="row clearfix">
				<!-- Title Column -->
				<div class="testimonial-three_title-column col-lg-4 col-md-12 col-sm-12">
					<div class="testimonial-three_title-outer">
						<!-- Sec Title -->
						<div class="sec-title">
							<div class="sec-title_title" style="font-size: 15px;"><i><img src="<?= Yii::getAlias('@web') ?>/assets/images/main-slider/grid.svg" alt="" /></i> CV DIGITAL WARNA MANDIRI</div>
							<h2 class="sec-title_heading" style="font-size: 70px;">VISI & MISI</h2>
						</div>
					</div>
				</div>

				<div class="testimonial-three_carousel-column col-lg-8 col-md-12 col-sm-12">
					<div class="testimonial-three_carousel-outer">
						<div class="two-items_slider" style="display: flex; gap: 20px;">
							<!-- Visi Misi -->
							<div class="testimonial-block_three" style="flex: 1; display: flex;">
								<div class="testimonial-block_three-inner" style="flex: 1;">
									<div class="testimonial-block_three-text" style="font-size: 20px;">Menciptakan ekosistem one-stop order untuk segala atribut dan kelengkapan sekolah</div>
									<div class="testimonial-block_two-name">
										<strong style="font-size: 35px;">VISI</strong>
									</div>
								</div>
							</div>

							<div class="testimonial-block_three" style="flex: 1; display: flex;">
								<div class="testimonial-block_three-inner" style="flex: 1;">
									<div class="testimonial-block_three-text" style="font-size: 20px;">Memberikan kemudahan akses dan transparansi order bagi kustomer serta memberikan solusi produk atribut dengan tepat</div>
									<div class="testimonial-block_two-name">
										<strong style="font-size: 35px;">MISI</strong>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Testimonial Three -->

	<!-- Testimonial Three -->
	<section class="testimonial-three">
		<div class="auto-container">
			<div class="row clearfix">
				<!-- Title Column -->
				<div class="testimonial-three_title-column col-lg-4 col-md-12 col-sm-12">
					<div class="testimonial-three_title-outer">
						<!-- Sec Title -->
						<div class="sec-title">
							<div class="sec-title_title"><i><img src="<?= Yii::getAlias('@web') ?>/assets/images/main-slider/grid.svg" alt="" /></i> Testimonial</div>
							<h2 class="sec-title_heading">Review Jujur Dari Customer Diwarna</h2>
						</div>
						
						<!-- If we need navigation buttons -->
						<div class="testimonial-three_navs">
							<div class="two-items_slider-button-prev fas fa-angle-left fa-fw"></div>
							<div class="two-items_slider-button-next fas fa-angle-right fa-fw"></div>
						</div>
					</div>
				</div>
				<!-- Carousel Column -->
				<div class="testimonial-three_carousel-column col-lg-8 col-md-12 col-sm-12">
					<div class="testimonial-three_carousel-outer">
						<div class="two-items_slider swiper-container">
							<div class="swiper-wrapper">

								<!-- Slide -->
								<?php foreach ($testimonial as $testi): ?>
								<div class="swiper-slide">
									<!-- Testimonial Block Two -->
									<div class="testimonial-block_three">
										<div class="testimonial-block_three-inner">
											<div class="testimonial-block_three-author">
												<div class="testimonial-block_three-image">
													<!-- <img src="assets/images/resource/author-4.png" alt="" /> -->
												</div>
												<i class="flaticon-quote"></i>
											</div>
											<div class="testimonial-block_three-text"><?= $testi->desc_testi?></div>
											<div class="testimonial-block_two-name">
												<strong><?= $testi->nama_testi?></strong>
												<?= $testi->note_testi?>
											</div>
										</div>
									</div>
								</div>
								<?php endforeach; ?>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Testimonial Three -->
	
	<!-- Journey One -->
	<section class="journey-two">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title">
				<div class="sec-title_title"><i><img src="<?= Yii::getAlias('@web') ?>/assets/images/main-slider/grid.svg" alt="" /></i> Perjalanan</div>
				<h2 class="sec-title_heading">MILESTONE <br>CV DIGITAL WARNA MANDIRI</h2>
			</div>
			
			<div class="single-item_slider swiper-container">
				<div class="swiper-wrapper">

					<!-- Slide -->
					<div class="swiper-slide">
						<div class="inner-container">
							<span class="border-one"></span>
							<span class="border-two"></span>
							<span class="border-three"></span>
							<div class="row clearfix">
								
								<!-- Journey Block One -->
								<div class="journey-block_two col-lg-3 col-md-6 col-sm-12">
									<div class="journey-block_two-inner">
										<div class="journey-block_two-date">2017</div>
										<h4 class="journey-block_two-title"><a href="event-detail.html">Pijakan Awal</a></h4>
										<div class="journey-block_two-text">Medatangkan mesin bordir pertama kami dengan kapasitas 12 kepala. </div>
										<!-- <a class="journey-block_two-arrow" href="event-detail.html"><i class="flaticon-next"></i></a> -->
									</div>
								</div>
								
								<!-- Journey Block One -->
								<div class="journey-block_two offset-lg-3 col-lg-3 col-md-6 col-sm-12">
									<div class="journey-block_two-inner">
										<div class="journey-block_two-date">2020</div>
										<h4 class="journey-block_two-title"><a href="event-detail.html">Computerized Jacquard </a></h4>
										<div class="journey-block_two-text">Memutuskan untuk ekspansi ke atribut kaos kaki dengan impor mesin rajut kaos kaki computerized jacquard </div>
									</div>
								</div>
								
								<!-- Journey Block One -->
								<div class="journey-block_two offset-lg-3 col-lg-3 col-md-6 col-sm-12">
									<div class="journey-block_two-inner">
										<div class="journey-block_two-date">2018</div>
										<h4 class="journey-block_two-title"><a href="event-detail.html">Satu-satunya</a></h4>
										<div class="journey-block_two-text">Menambah armada bordir dengan mesin bordir 6 kepala. Menjadi satu-satunya bordir di Surabaya yang memiliki kemampuan bordir langsung di topi. Menjawab solusi suplai pesanan topi yang lambat.</div>
									</div>
								</div>
								
								<!-- Journey Block One -->
								<div class="journey-block_two offset-lg-3 col-lg-3 col-md-6 col-sm-12">
									<div class="journey-block_two-inner">
										<div class="journey-block_two-date">2022</div>
										<h4 class="journey-block_two-title"><a href="event-detail.html">Produksi Ribuan</a></h4>
										<div class="journey-block_two-text">Menambah kemampuan produksi mesin bordir hingga 24 kepala dan 4 mesin kaos kaki. Kemampuan produksi kaos kaki saat ini 700-850 pasang dan bordir hingga ribuan pcs per hari. </div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<!-- Slide -->
					<div class="swiper-slide">
						<div class="inner-container">
							<span class="border-one"></span>
							<span class="border-two"></span>
							<span class="border-three"></span>
							<div class="row clearfix">
								
								<!-- Journey Block One -->
								<div class="journey-block_two col-lg-3 col-md-6 col-sm-12">
									<div class="journey-block_two-inner">
										<div class="journey-block_two-date">2023</div>
										<h4 class="journey-block_two-title"><a href="event-detail.html">Kerjasama Produksi</a></h4>
										<div class="journey-block_two-text">Untuk pertama kalinya mendapatkan kepercayaan kerjasama produksi kaos kaki untuk salah satu Yayasan sekolah luar negeri tepatnya di Timor Leste sejumlah 2.500+ pasang. </div>
									</div>
								</div>

								
								<!-- Journey Block One -->
								<div class="journey-block_two offset-lg-3 col-lg-3 col-md-6 col-sm-12">
									<div class="journey-block_two-inner">
										<div class="journey-block_two-date">On going...</div>
										<h4 class="journey-block_two-title"><a href="event-detail.html">...</a></h4>
										<div class="journey-block_two-text">...</div>
									</div>
								</div>
								
								<!-- Journey Block One -->
								<div class="journey-block_two offset-lg-3 col-lg-3 col-md-6 col-sm-12">
									<div class="journey-block_two-inner">
										<div class="journey-block_two-date">2024 - saat ini</div>
										<h4 class="journey-block_two-title"><a href="event-detail.html">Terus Melayani</a></h4>
										<div class="journey-block_two-text">Hingga saat ini kami sudah melayani 100+ sekolah dalam pengadaan atribut.</div>
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
				
				<!-- If we need pagination -->
				<div class="single-item_slider-pagination"></div>
				
				<!-- If we need navigation buttons -->
				<div class="single-item_slider-prev fas fa-angle-left fa-fw"></div>
				<div class="single-item_slider-next fas fa-angle-right fa-fw"></div>
				
			</div>
			
		</div>
	</section>
	<!-- End Journey One -->
	
	<!-- Gallery One -->
	<section class="gallery-one" id="galeri">
		<div class="auto-container">
			<div class="inner-container">
				<!-- Sec Title -->
				<div class="sec-title light centered">
					<div class="sec-title_title"><i><img src="<?= Yii::getAlias('@web') ?>/assets/images/icons/title-icon.svg" alt="" /></i> GALERI PRODUK</div>
					<h2 class="sec-title_heading">PRODUK HASIL <br> PRODUKSI DIWARNA</h2>
				</div>
				<div class="four-items_slider swiper-container">
					<div class="swiper-wrapper">

						<!-- Slide -->
						<?php foreach ($foto_produk as $foto): ?>
						<div class="swiper-slide">
							<div class="gallery-block_one">
								<div class="gallery-block_one-inner">
									<div class="gallery-block_one-image">
										<img src="<?= $foto->url_foto_produk ?>" alt="" />
										<div class="gallery-block_one-content">
											<h3 class="gallery-block_one-title"><a href="#"><?= $foto->text_foto_produk?></a></h3>
											<div class="gallery-block_one-date"><?= $foto->desc_foto_produk?> </div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php endforeach; ?>
					</div>
					
					<!-- If we need pagination -->
					<div class="four-items_slider-pagination"></div>
					
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Gallery One -->
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

<script src="<?= Yii::getAlias('@web') ?>/assets/js/jquery.meanmenu.min.js"></script>
<script src="<?= Yii::getAlias('@web') ?>/assets/js/nav-tool.js"></script>
<script src="<?= Yii::getAlias('@web') ?>/assets/js/jquery-ui.js"></script>
<script src="<?= Yii::getAlias('@web') ?>/assets/js/jquery.countdown.js"></script>
<script src="<?= Yii::getAlias('@web') ?>/assets/js/element-in-view.js"></script>
<!-- <script src="<?= Yii::getAlias('@web') ?>/assets/js/script.js"></script> -->
 <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script> -->



<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage(); ?>