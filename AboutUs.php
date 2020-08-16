<?php
ob_start();
session_start();
if(!isset($_SESSION['password'])){
    header("location:Login.php");
}
?>  

<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7"><![endif]-->
<!--[if IE 8]><html class="ie ie8"><![endif]-->
<!--[if IE 9]><html class="ie ie9"><![endif]-->
<html lang="en">
  
<!-- Mirrored from warethemes.com/html/bready/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Jan 2019 13:06:55 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="favicon.png" rel="icon">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Bready</title>
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script%7CLora:400,700" rel="stylesheet">
    <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="plugins/bakery-icon/style.css">
    <link rel="stylesheet" href="plugins/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/owl-carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css">
    <link rel="stylesheet" href="plugins/bootstrap-select/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="plugins/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="plugins/slick/slick/slick.css">
    <link rel="stylesheet" href="plugins/lightGallery-master/dist/css/lightgallery.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!--HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--WARNING: Respond.js doesn't work if you view the page via file://-->
    <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->
    <!--[if IE 7]><body class="ie7 lt-ie8 lt-ie9 lt-ie10"><![endif]-->
    <!--[if IE 8]><body class="ie8 lt-ie9 lt-ie10"><![endif]-->
    <!--[if IE 9]><body class="ie9 lt-ie10"><![endif]-->
  </head>
  <body>
    <div class="ps-search">
      <div class="ps-search__content"><a class="ps-search__close" href="#"><span></span></a>
        <form class="ps-form--search-2" action="http://warethemes.com/html/bready/do_action" method="post">
          <h3>Enter your keyword</h3>
          <div class="form-group">
            <input class="form-control" type="text" placeholder="">
            <button class="ps-btn active ps-btn--fullwidth">Search</button>
          </div>
        </form>
      </div>
    </div>
    <!-- header-->
    <?php
    include './headerCustomer.php';
    ?>
<!--    </header>-->
    <div class="ps-hero bg--cover" data-background="images/hero/about.jpg">
      <div class="ps-hero__content">
        <h1> About Us</h1>
        <div class="ps-breadcrumb">
          <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li class="active">About Us</li>
          </ol>
        </div>
      </div>
    </div>
    <!-- About Intro-->
    <div class="ps-about-intro">
      <div class="ps-container">
        <div class="ps-section__header text-center">
          <h3 class="ps-section__title">Delicieux</h3>
          <p>WELCOME TO THE STORE</p><span><img src="images/icons/floral.png" alt=""></span>
        </div>
        <div class="ps-section__content">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
              <div class="ps-block--award"><img src="images/icons/award-1.png" alt="">
                <h4> BAKERY OF THE YEAR <span>2011 -2012</span></h4>
                <p>Tart bear claw cake tiramisu chocolate bar gummies dragée lemon drops brownie. Jujubes chocolate cake sesame snaps</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
              <div class="ps-block--award"><img src="images/icons/award-2.png" alt="">
                <h4> CUPCAKES SHOP OF THE YEAR <span>2012 - 2015</span></h4>
                <p>Tart bear claw cake tiramisu chocolate bar gummies dragée lemon drops brownie. Jujubes chocolate cake sesame snaps</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
              <div class="ps-block--award"><img src="images/icons/award-2.png" alt="">
                <h4> BAKERY OF THE MONTH <span>2017 - 2018</span></h4>
                <p>Tart bear claw cake tiramisu chocolate bar gummies dragée lemon drops brownie. Jujubes chocolate cake sesame snaps</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="ps-block--signature">
        <div class="ps-block__thumbnail"><img src="images/CookieChocolate.png" alt=""></div>
        <div class="ps-block__content">
          <p>“It seems that every country that can get its hands on butter has its opinion of what butter cream frosting should be. Some are made with eggs and butter.”</p><small>Sunshine -  CEO Bakery</small><img src="images/signature-2.png" alt="">
        </div>
      </div>
      <div class="ps-about-number">
        <div class="ps-container">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 ">
              <div class="ps-block--countdown"><i class="ba-biscuit-1"></i><span class="number ps-block__number" data-from="0" data-to="165"> 165</span>
                <h4>Baker & Chef</h4>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 ">
              <div class="ps-block--countdown"><i class="ba-mixer"></i><span class="number ps-block__number" data-from="0" data-to="2130"> 2130</span>
                <h4>Recepies</h4>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 ">
              <div class="ps-block--countdown"><i class="ba-bread-2"></i><span class="number ps-block__number" data-from="0" data-to="3450"> 3450</span>
                <h4>Bread per day</h4>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 ">
              <div class="ps-block--countdown"><i class="ba-flour"></i><span class="number ps-block__number" data-from="0" data-to="345"> 345</span>
                <h4>Kilos of flour</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--.ps-our-people-->
    
        
    <!-- Testimonials-->
    <div class="ps-testimonials bg--parallax" data-background="images/bg/testimonials.jpg">
      <div class="ps-container">
        <div class="ps-carousel--testimonial owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="false" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="off" data-owl-animate-in="fadeIn" data-owl-animate-out="fadeOut">
          <div class="ps-block--tesimonial">
            <div class="ps-block__user"><img src="images/user/1.jpg" alt=""></div>
            <div class="ps-block__content">
              <select class="ps-rating">
                <option value="1">1</option>
                <option value="1">2</option>
                <option value="1">3</option>
                <option value="1">4</option>
                <option value="2">5</option>
              </select>
              <p>“Dessert pudding dessert jelly beans cupcake sweet caramels gingerbread. Fruitcake biscuit cheesecake. Cookie topping sweet muffin pudding tart bear claw sugar plum croissant.”</p>
            </div>
          
          </div>
          <div class="ps-block--tesimonial">
            <div class="ps-block__user"><img src="images/user/2.jpg" alt=""></div>
            <div class="ps-block__content">
              <select class="ps-rating">
                <option value="1">1</option>
                <option value="1">2</option>
                <option value="1">3</option>
                <option value="1">4</option>
                <option value="2">5</option>
              </select>
              <p>“Dessert pudding dessert jelly beans cupcake sweet caramels gingerbread. Fruitcake biscuit cheesecake. Cookie topping sweet muffin pudding tart bear claw sugar plum croissant.”</p>
            </div>
            
          </div>
         
        
        </div>
      </div>
    </div>
   <footer class="ps-footer">
      <div class="ps-footer__content">
        <div class="ps-container">
          <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 ">
              <div class="ps-site-info"><a class="ps-logo" href="index.html"><img src="images/logo-k.png" alt=""></a>
                <p>Tart bear claw cake tiramisu chocolate bar gummies dragée lemon drops brownie.</p>
                <ul class="ps-list--social">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 ">
              <form class="ps-form--subscribe-offer" action="http://warethemes.com/html/bready/do_action" method="post">
                <!--<h4>Get news & offer</h4>
                <div class="form-group">
                  <input class="form-control" type="text" placeholder="Your Email...">
                  <button>Subscribe</button>
                </div>-->
                <h3>* Don't worry, we never spam</h3>
              </form>
              <div class="ps-footer__contact">
                <h4>Contact with me</h4>
                <p>212 Adajan ,Surat,Gujarat
                </p>
                <P>(+84 ) 7534 9773, (+84 ) 874 548</P>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 ">
              <div class="ps-footer__open">
                <h4>Time to Open</h4>
                <p>
                  Monday - Friday: <br>08:00 am - 08:30 pm <br>
                  Saturday - Sunday:<br>
                  10:00 am - 16:30 pm
                </p>
              </div>
              <ul class="ps-list--payment">
                <li><a href="#"><img src="images/payment-method/visa.png" alt=""></a></li>
                <li><a href="#"><img src="images/payment-method/master-card.png" alt=""></a></li>
                <li><a href="#"><img src="images/payment-method/paypal.png" alt=""></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      
    </footer>
    <div id="back2top"><i class="fa fa-angle-up"></i></div>
 
    <!-- Plugins-->
    <script src="plugins/jquery/dist/jquery.min.js"></script>
    <script src="plugins/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="plugins/owl-carousel/owl.carousel.min.js"></script>
    <script src="plugins/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="plugins/jquery-bar-rating/dist/jquery.barrating.min.js"></script>
    <script src="plugins/jquery.waypoints.min.js"></script>
    <script src="plugins/jquery.countTo.js"></script>
    <script src="plugins/jquery.matchHeight-min.js"></script>
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="plugins/gmap3.min.js"></script>
    <script src="plugins/lightGallery-master/dist/js/lightgallery-all.min.js"></script>
    <script src="plugins/slick/slick/slick.min.js"></script>
    <script src="plugins/slick-animation.min.js"></script>
    <script src="plugins/jquery.slimscroll.min.js"></script>
    <!-- Custom scripts-->
    <script src="js/main.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDsUcTjt43mTheN9ruCsQVgBE-wgN6_AfY&amp;region=GB"></script>
  </body>

<!-- Mirrored from warethemes.com/html/bready/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Jan 2019 13:06:55 GMT -->
</html>