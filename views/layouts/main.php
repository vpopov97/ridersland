<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->charset ?>">

<head>
  <meta charset="<?= Yii::$app->charset ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
 <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
  <!-- Bootstrap -->
 
  <!-- =======================================================
    Theme Name: Hidayah
    Theme URL: https://bootstrapmade.com/hidayah-free-simple-html-template-for-corporate/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <?php $this->beginBody() ?>
  <header>
    <div class="main-menu">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h1><a class="navbar-brand" href="index.html" data-0="line-height:90px;" data-300="line-height:50px;">			Hidayah
						</a></h1>
          </div>
          <div class="col-md-8">
            <div class="dropdown">
              <ul class="nav nav-pills">
                <li class="active"><a href="index.html">Home</a></li>
                <li><a href="portfolio.html">Portfolio</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="contact.html">Contact</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>



  <!-- column content -->
 <?= $content; ?>
  <!-- end column content -->
  <footer>
    <section id="footer" class="section footer">
      <div class="container">
        <div class="row animated opacity mar-bot20" data-andown="fadeIn" data-animation="animation">
          <div class="col-sm-12 align-center">
            <ul class="social-network social-circle">
              <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
              <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
              <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="row align-center copyright">
          <div class="col-sm-12 text-center">
            <p>Copyright &copy; Hidayah Theme</p>
            <div class="credits">
              <!--
                All the links in the footer should remain intact. 
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Hidayah
              -->
              Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <a href="#" class="scrollup"><i class="fa fa-chevron-up"> </i></a>
  </footer>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/wow.min.js"></script>
  <script type="text/javascript">
    new WOW().init();
  </script>
<?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>