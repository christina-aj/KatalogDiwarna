<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

use app\widgets\SidebarWidget;
use yii\helpers\Url;


$HomeDiwarnas = Url::to(['site/index']);
$AboutDiwarnas = Url::to(['site/about-diwarna']);
$ContactDiwarnas = Url::to(['site/contact-diwarna']);

?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<?php $this->beginBody() ?>
<body class="d-flex flex-column h-100">

<div>
	
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
							<div class="logo"><a href="index.html"><img src="<?= Yii::getAlias('@web') ?>/assets/images/diwarna_logo.png" alt="" title=""></a></div>
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
										<li><a href=<?= $HomeDiwarnas ?>>Home</a></li>
										<!-- <li><a class="about-widget" >About</a></li> -->
										<li><a href=<?= $AboutDiwarnas ?> >About</a></li>
										
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
										<li><a href=<?= $ContactDiwarnas ?> >Contact</a></li>
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
				<div class="nav-logo"><a href="index.html"><img src="<?= Yii::getAlias('@web') ?>/assets/images/footer-diwarna_logo.png" alt="" title=""></a></div>
				<div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
			</nav>
		</div>
		<!-- End Mobile Menu -->
		
	</header>
</div>

<main id="main" class="flex-shrink-0" role="main">
    <div class="container" style="--bs-gutter-x: 0">
        <?= $content ?>
    </div>
</main>

<footer id="footer" class="mt-auto py-3 bg-light">
    <div class="container">
        <div class="row text-muted">
            <div class="col-md-6 text-center text-md-start">&copy; My Company <?= date('Y') ?></div>
            <div class="col-md-6 text-center text-md-end"><?= Yii::powered() ?></div>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
