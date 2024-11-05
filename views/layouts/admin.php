<?php
/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Html;
use yii\helpers\Url;
use app\models\KatalogAwal; 

$LoginDiwarnas = Url::to(['site/login']);
$HomeDiwarnas = Url::to(['site/index']);
$Kategori = Url::to(['kategori/index']);
$SubKategori = Url::to(['sub-kategori/index']);
$KatalogAwal = Url::to(['katalog-awal/index']);
$DetailProduk= Url::to(['detail-produk/index']);
$FotoProduk= Url::to(['foto-produk/index']);
$FotoSlide= Url::to(['foto-slide/index']);
$Testimonial= Url::to(['testimonial/index']);

$this->beginBlock('katalog_awal_data');
$katalog_awal = KatalogAwal::find()
    ->joinWith('subKategori.kategori')
    ->where(['kategori.status' => 1])
    ->all();
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="utf-8">
    <title>DIWARNA CATALOGUE</title>
    
    <!-- Stylesheets -->
    <link href="<?= Yii::getAlias('@web') ?>/assets/css/login.css" rel="stylesheet">
    <link href="<?= Yii::getAlias('@web') ?>/assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?= Yii::getAlias('@web') ?>/assets/css/style.css" rel="stylesheet">
    <link href="<?= Yii::getAlias('@web') ?>/assets/css/meanmenu.min.css" rel="stylesheet">
    <link href="<?= Yii::getAlias('@web') ?>/assets/css/responsive.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="<?= Yii::getAlias('@web') ?>/assets/images/favicon.svg" type="image/x-icon">
    <link rel="icon" href="<?= Yii::getAlias('@web') ?>/assets/images/diwarna-logoo.png" type="image/png">

    <!-- Font Awesome untuk icon hamburger -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" />

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
                            <div class="logo">
                                <a href="<?= $HomeDiwarnas ?>">
                                    <img src="<?= Yii::getAlias('@web') ?>/assets/images/diwarna_logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        
                        <!-- Navigation Desktop -->
                        <div class="nav-outer d-none d-md-flex align-items-center flex-wrap">
                            <nav class="main-menu navbar-expand-md">
                                <div class="navbar-collapse collapse clearfix">
                                    <ul class="navigation clearfix">
                                        <li><a href="<?= $Kategori ?>">Kategori</a></li>
                                        <li><a href="<?= $SubKategori ?>">SubKategori</a></li>
                                        <li><a href="<?= $KatalogAwal ?>">Foto Katalog</a></li>
                                        <li><a href="<?= $DetailProduk ?>">Detail Produk</a></li>
                                        <li><a href="<?= $FotoProduk ?>">Foto Produk</a></li>
                                        <li><a href="<?= $FotoSlide ?>">Foto Slide</a></li>
                                        <li><a href="<?= $Testimonial ?>">Info Testimonial</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        
                        <div class="outer-box d-flex align-items-center flex-wrap">
                            <div class="header-options_box d-flex align-items-center">
                                <a href="<?= $HomeDiwarnas ?>" class="search-box-btn">Logout</a>
                            </div>
                        </div>

                        <!-- Tombol Hamburger -->
                        <button class="navbar-toggler d-md-none" type="button" id="mobileMenuBtn">
                            <i class="fas fa-bars"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile Navigation Menu -->
        <div class="mobile-nav" id="mobileNav">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="<?= $Kategori ?>">Kategori</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= $SubKategori ?>">SubKategori</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= $KatalogAwal ?>">Foto Katalog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= $DetailProduk ?>">Detail Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= $FotoProduk ?>">Foto Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= $FotoSlide ?>">Foto Slide</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= $Testimonial ?>">Info Testimonial</a>
                </li>
            </ul>
        </div>
    </header>

    <main id="main" class="flex-shrink-0 flex-grow-1" role="main">
        <div class="container" style="--bs-gutter-x: 0">
            <?= $content ?>
        </div>
    </main>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="column col-lg-6 col-md-12 col-sm-12">
                    <div class="copyright">Copyright &copy; 2024 <a href="#">Diwarna</a> All Rights Reserved</div>
                </div>
                <div class="column col-lg-6 col-md-12 col-sm-12">
                    <ul class="footer-bottom_nav">
                        <li><a href="#">Term & Condition</a></li>
                        <li><a href="#">Policy & Privacy </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>



    <!-- JavaScript untuk mobile menu -->
    <!-- <script>
    document.addEventListener('DOMContentLoaded', function() {
        const menuBtn = document.getElementById('mobileMenuBtn');
        const mobileNav = document.getElementById('mobileNav');

        if(menuBtn && mobileNav) {
            menuBtn.addEventListener('click', function(e) {
                e.preventDefault();
                mobileNav.classList.toggle('show');
                console.log('Menu button clicked'); // Untuk debugging
            });
        }
    });
    </script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="<?= Yii::getAlias('@web') ?>/assets/js/script.js"></script>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>