<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>


    <?php $this->head() ?>

    <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>UXOS</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700|Raleway:400,700&display=swap" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>



<div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

          <a class="navbar-brand" href="index.html">
            <span>
              UXOS
            </span>
          </a>

          <div class="navbar-collapse" id="">
            <div class="custom_menu-btn">
              <button onclick="openNav()">
                <span class="s-1"> </span>
                <span class="s-2"> </span>
                <span class="s-3"> </span>
              </button>
            </div>
            <div id="myNav" class="overlay">
              <div class="overlay-content">
              <a href="<?= Url::to(['data/index'])?>" class="nav-item nav-link">Data</a>
                <a href="<?= Url::to(['pekerjaan/index'])?>" class="nav-item nav-link">Pekerjaan</a>
                <a href="<?= Url::to(['kampus/index'])?>" class="nav-item nav-link">Kampus</a>
                <a href="<?= Url::to(['site/index'])?>" class="nav-item nav-link">Bilangan Prima</a>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <div class="detail-box">
              <h2>
                best design
              </h2>
              <h1>
                Mobile <br />
                applications
              </h1>
              <div>
                <a href="">
                  Read More
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-5">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="img-box">
                    <img src="images/slider-img.png" alt="" />
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="img-box">
                    <img src="images/slider-img.png" alt="" />
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="img-box">
                    <img src="images/slider-img.png" alt="" />
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- end slider section -->
  </div>

  


  <!-- subscribe section -->


 

  <!-- end info section -->
  <!-- footer section -->


<main role="main" class="flex-shrink-0">
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<footer class="footer mt-auto py-3 text-muted">


  
  <!-- info section -->
  <section class="info_section layout_padding-top">
    <div class="info_logo-box">
      <h2>
        UXOS
      </h2>
    </div>
    <div class="container layout_padding2">
      <div class="row">
        <div class="col-md-3">
          <h5>
            About Us
          </h5>
          <p>
            dolor sit amet, consectetur magna aliqua. Ut enim ad minim veniam, quisdotempor incididunt r
          </p>
        </div>
        <div class="col-md-3">
          <h5>
            Useful Link
          </h5>
          <ul>
            <li>
              <a href="">
                Video games
              </a>
            </li>
            <li>
              <a href="">
                Remote control
              </a>
            </li>
            <li>
              <a href="">
                3d controller
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-3">
          <h5>
            Contact Us
          </h5>
          <p>
            dolor sit amet, consectetur magna aliqua. quisdotempor incididunt ut e
          </p>
        </div>
        <div class="col-md-3">

          <div class="subscribe_container">
            <h5>
              Newsletter
            </h5>
            <div class="form_container">
              <form action="">
                <input type="email" placeholder="Enter your email">
                <button type="submit">
                  Subscribe
                </button>
              </form>
            </div>
          </div>

        </div>
      </div>
    </div>
    <div class="container">
      <div class="social_container">

        <div class="social-box">
          <a href="">
            <img src="images/fb.png" alt="">
          </a>

          <a href="">
            <img src="images/twitter.png" alt="">
          </a>
          <a href="">
            <img src="images/linkedin.png" alt="">
          </a>
          <a href="">
            <img src="images/instagram.png" alt="">
          </a>
        </div>
      </div>
    </div>
  </section>
<section class="container-fluid footer_section">
    <p>
      &copy; 2019 All Rights Reserved. Design by
      <a href="https://html.design/">Free Html Templates</a>
    </p>
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

  <script>
    function openNav() {
      document.getElementById("myNav").classList.toggle("menu_width");
      document
        .querySelector(".custom_menu-btn")
        .classList.toggle("menu_btn-style");
    }
  </script>

    <div class="container">
        <p class="float-left">&copy; My Company <?= date('Y') ?></p>
        <p class="float-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
