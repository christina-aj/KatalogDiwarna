<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Html;
use yii\helpers\Url;

$HomeDiwarnas = Url::to(['site/index']);
$AboutDiwarnas = Url::to(['site/about-diwarna']);
$ContactDiwarnas = Url::to(['site/contact-diwarna']);
$FAQ = Url::to(['site/index#faq']);
$Produk = Url::to(['site/index#produk-kami']);

?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="utf-8">
    <title>DIWARNA CATALOGUE</title>
    
    <!-- Stylesheets -->
    <link href="<?= Yii::getAlias('@web') ?>/assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?= Yii::getAlias('@web') ?>/assets/css/style.css" rel="stylesheet">
    <link href="<?= Yii::getAlias('@web') ?>/assets/css/meanmenu.min.css" rel="stylesheet">
    <link href="<?= Yii::getAlias('@web') ?>/assets/css/responsive.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="<?= Yii::getAlias('@web') ?>/assets/images/favicon.svg" type="image/x-icon">
    <!-- <link rel="icon" href="<?= Yii::getAlias('@web') ?>/assets/images/favicon.svg" type="image/x-icon"> -->
    <link rel="icon" href="<?= Yii::getAlias('@web') ?>/assets/images/diwarna-logoo.png" type="image/png">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->

    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
    <?php $this->beginBody() ?>

    <header class="main-header">
        <!-- Header Top -->
        <div class="header-top">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="d-flex justify-content-between align-items-center flex-wrap">
                        <div class="left-box d-flex align-items-center flex-wrap">
                            <ul class="header-top_list d-flex flex-wrap">
                                <li><span class="icon flaticon-send-1"></span><a href="mailto:info@diwarna.com">info@diwarna.com</a></li>
                                <li><span class="icon flaticon-telephone"></span><a href="tel:+56-955-525-285"> 0812-1725-7108</a></li>
                            </ul>
                        </div>
                        <div class="right-box d-flex align-items-center flex-wrap">
                            <div class="header_socials d-flex align-items-center flex-wrap">
                                <a class="fa-brands fa-facebook-f fa-fw" href="https://www.facebook.com/diwarnaID/" target="_blank"></a>
                                <a class="fa-brands fa-instagram fa-fw" href="https://www.instagram.com/diwarna/" target="_blank"></a>
                                <a class="fa-brands fa-twitter fa-fw" href="https://twitter.com/diwarnaID/" target="_blank"></a>
                                <a class="fa-solid fa-envelope" href="https://mail.google.com/mail/u/0/#inbox?compose=DmwnWtMrlxjpnfDMJDffJkmvLFQGKcqkSdrHDhPGjpWKHpWbmkQhgzVpLHGsTzWQRHBbkrgQGHNQ" target="_blank"></a>
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
                        <div class="logo-box">
                            <div class="logo"><a href="<?= $HomeDiwarnas ?>"><img src="<?= Yii::getAlias('@web') ?>/assets/images/diwarna_logo.png" alt=""></a></div>
                        </div>
                        <div class="nav-outer d-flex align-items-center flex-wrap">
                            <nav class="main-menu navbar-expand-md">
                                <div class="navbar-header">
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        <li><a href="<?= $HomeDiwarnas ?>">Home</a></li>
                                        <li><a href="<?= $AboutDiwarnas ?>">About</a></li>
                                        <li><a href="<?= $ContactDiwarnas ?>">Contact</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
						<div class="outer-box d-flex align-items-center flex-wrap">
							
							<!-- Header Options Box -->
							<div class="header-options_box d-flex align-items-center">
								<!-- Search Btn -->
								<div class="search-box-btn search-box-outer"><span class="icon fa fa-search"></span></div>						
							</div>
							<div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
						</div>
						<!-- End Outer Box -->
                    </div>
                </div>
            </div>
        </div>

		<!-- Mobile Menu  -->
		<div class="mobile-menu">
			<div class="menu-backdrop"></div>
			<div class="close-btn"><span class="icon flaticon-close-1"></span></div>
			
			<nav class="menu-box">
				<div class="nav-logo"><a href="index.html"><img src="assets/images/footer-diwarna_logo.png" alt="" title=""></a></div>
				<div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
			</nav>
		</div>
		<!-- End Mobile Menu -->
    </header>

    <main id="main" class="flex-shrink-0" role="main">
        <div class="container" style="--bs-gutter-x: 0">
            <?= $content ?>
        </div>
    </main>

	<!-- Main Footer -->
	<footer class="main-footer">
		<div class="main-footer_stars" style="background-image: url(<?= Yii::getAlias('@web') ?>/assets/images/background/stars.png)"></div>
		<div class="main-footer_pattern" style="background-image: url(<?= Yii::getAlias('@web') ?>/assets/images/background/pattern-4.png)"></div>
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
									<div class="footer-logo"><a href=<?= $HomeDiwarnas ?>><img src="<?= Yii::getAlias('@web') ?>/assets/images/diwarna_logo.png" alt="" title=""></a></div>
									<div class="footer-text">Computerized and modern textiles embroidery - knitting solution</div>
									<!-- Social Box -->
									<div class="footer_socials">
										<a href="https://www.facebook.com/diwarnaID/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
										<a href="https://twitter.com/diwarnaID/" target="_blank"><i class="fa-brands fa-twitter"></i></a>
										<a href="https://mail.google.com/mail/u/0/#inbox?compose=DmwnWtMrlxjpnfDMJDffJkmvLFQGKcqkSdrHDhPGjpWKHpWbmkQhgzVpLHGsTzWQRHBbkrgQGHNQ" target="_blank"><i class="fa-solid fa-envelope"></i></a>
										<a href="https://www.instagram.com/diwarna/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
									</div>
								</div>
							</div>

							<!-- Footer Column -->
							<div class="footer_column col-lg-6 col-md-6 col-sm-12">
								<div class="footer-widget links-widget">
									<h5 class="footer-title">Link</h5>
									<ul class="footer-list">
										<li><a href=<?= $HomeDiwarnas ?>>Home</a></li>
										<li><a href=<?= $AboutDiwarnas ?>>About Us</a></li>
										<li><a href=<?= $Produk ?>>Produk</a></li>
										<li><a href=<?= $FAQ ?>>FAQ</a></li>
									</ul>
								</div>
							</div>

						</div>
					</div>

					<!-- Big Column -->
					<div class="big-column col-lg-6 col-md-12 col-sm-12">
						<div class="row clearfix">

							<!-- Footer Column -->
							<!-- <div class="footer_column col-lg-6 col-md-6 col-sm-12">
								<div class="footer-widget links-widget">
									<h5 class="footer-title">Order</h5>
									<ul class="footer-list">
										<li><a href="#q ">Email</a></li>
										<li><a href="#">Whatsapp</a></li>
										<li><a href="#">Alamat</a></li>
									</ul>
								</div>
							</div> -->

							<div class="footer_column col-lg-6 col-md-6 col-sm-12">
								<div class="footer-widget links-widget">
									<h5 class="footer-title">Pengujung</h5>
									<ul class="footer-list">
									<!-- <a href="https://info.flagcounter.com/3CFK"><img src="https://s11.flagcounter.com/count2/3CFK/bg_EEEEEE/txt_474747/border_EEEEEE/columns_2/maxflags_8/viewers_3/labels_1/pageviews_1/flags_0/percent_1/" alt="Flag Counter" border="0"></a> -->
									<a href=#><img src="https://s11.flagcounter.com/count2/3CFK/bg_EEEEEE/txt_474747/border_EEEEEE/columns_2/maxflags_8/viewers_3/labels_1/pageviews_1/flags_0/percent_1/" alt="Flag Counter" border="0"></a>
									</ul>
								</div>
							</div>

							<!-- Footer Column -->
							<div class="footer_column col-lg-6 col-md-6 col-sm-12">
								<div class="footer-widget instagram-widget">
									<h5 class="footer-title">Galeri Produk</h5>
									<div class="images-outer clearfix">
										<!--Image Box-->
										<figure class="image-box"><a class="lightbox-image" href="<?= Yii::getAlias('@web') ?>/assets/images/produk/1-SDN-TEMBOK-DUKUH.png"><img src="<?= Yii::getAlias('@web') ?>/assets/images/produk/1-tembokdukuhicon.png" alt=""></a></figure>
										<!--Image Box-->
										<figure class="image-box"><a class="lightbox-image" href="<?= Yii::getAlias('@web') ?>/assets/images/produk/2-MADRASAH-AT-TIBYAN.png"><img src="<?= Yii::getAlias('@web') ?>/assets/images/produk/2-madrasah.png" alt=""></a></figure>
										<!--Image Box-->
										<figure class="image-box"><a class="lightbox-image" href="<?= Yii::getAlias('@web') ?>/assets/images/produk/3-SMP-NEGERI-1-KOTABARU.png"><img src="<?= Yii::getAlias('@web') ?>/assets/images/produk/3-smpkotabaru.png" alt=""></a></figure>
										
										<figure class="image-box"><a class="lightbox-image" href="<?= Yii::getAlias('@web') ?>/assets/images/produk/4-SMK-NEGERI-3.png"><img src="<?= Yii::getAlias('@web') ?>/assets/images/produk/4-smk3.png" alt=""></a></figure>
										
										<figure class="image-box"><a class="lightbox-image" href="<?= Yii::getAlias('@web') ?>/assets/images/produk/5-TK-ADHYAKSA-VIII.png"><img src="<?= Yii::getAlias('@web') ?>/assets/images/produk/5-tkadhyaksa.png" alt=""></a></figure>
										
										<figure class="image-box"><a class="lightbox-image" href="<?= Yii::getAlias('@web') ?>/assets/images/produk/6-TK-KRISTEN-PELITA-KASIH.png"><img src="<?= Yii::getAlias('@web') ?>/assets/images/produk/6-tkpelita.png" alt=""></a></figure>
									</div>
								</div>
							</div>

						</div>
					</div>

				</div>
				
				<div class="footer-info_outer">
					<h5 class="footer-title">Contact Diwarna</h5>
					<div class="row clearfix">
						<!-- Column -->
						<div class="column col-lg-4 col-md-4 col-sm-6">
							<div class="title">Telepon</div>
							<a href="tel:+56-955-525-285">0812-1725-7108</a>
						</div>
						<!-- Column -->
						<div class="column col-lg-4 col-md-4 col-sm-6">
							<div class="title">Email</div>
							<a href="mailto:hello-bikers@vroom.com">info@diwarna.com</a>
						</div>
						<!-- Column -->
						<div class="column col-lg-4 col-md-4 col-sm-6">
							<div class="title">Lokasi</div>
							<div class="text">Kedinding Lor Gg.Anggrek 36</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
		<!-- End Widgets Section -->
		
		<!-- Footer Bottom -->
		<div class="footer-bottom">
			<div class="auto-container">
				<div class="row clearfix">
					<!-- Column -->
					<div class="column col-lg-6 col-md-12 col-sm-12">
						<div class="copyright">Copyright &copy; 2024 <a href="#">Diwarna</a> All Rights Reserved</div>
					</div>
					<!-- Column -->
					<div class="column col-lg-6 col-md-12 col-sm-12">
						<ul class="footer-bottom_nav">
							<li><a href="#">Term & Condition</a></li>
							<li><a href="#">Policy & Privacy </a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		
	</footer>
	<!-- End Main Footer -->
	<script src="<?= Yii::getAlias('@web') ?>/assets/js/script.js"></script>

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
