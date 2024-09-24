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
    </header>

    <main id="main" class="flex-shrink-0" role="main">
        <div class="container" style="--bs-gutter-x: 0">
            <?= $content ?>
        </div>
    </main>

    <footer class="main-footer">
        <div class="footer-bottom">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="column col-lg-6 col-md-12 col-sm-12">
                        <div class="copyright">Copyright &copy; 2024 <a href="#">Diwarna</a> All Rights Reserved</div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
