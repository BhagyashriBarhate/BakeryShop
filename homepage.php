<?php
ob_start();
session_start();
if(!isset($_SESSION['password'])){
    header("location:Login.php");
}
?>

<html lang="en">
  
<!-- Mirrored from warethemes.com/html/bready/homepage-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Jan 2019 12:16:33 GMT -->
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
    <title>Yummy Bakery</title>
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
<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/jquery.min_1.js" type="text/javascript"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
          <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    
  </head>
  <body>
      
    
    <!-- Header-->
    <header class="header header--2" data-sticky="false">
      <div class="ps-container">
        <div class="header__top">
          <div class="left">
          
              <div class="btn-group ps-dropdown"><a class="" href="#" data-toggle="" aria-haspopup="true" aria-expanded="false"></a>
             
                
              </ul>
            </div>
            <div class="btn-group ps-dropdown"><a class="" href="#" data-toggle="" aria-haspopup="true" aria-expanded="false"></a>
                         </div>
          </div>
          
            <div class="center" ><a class="ps-logo"  href="homepage-2.html" ><img  src="images/Yummy.png" alt="" style="height:500px;width: 300px;"></a></div>
          <div class="right">
              <div style="margin-top: 30px;margin-right: 130px;font-size: 20px;  ">
                  <?php
                  include './conn.php';
                  $email=$_SESSION["email"];
                      $sql="select * from myadmin where email='$email'";
                        $result= mysqli_query($conn, $sql);

                        $row= mysqli_fetch_assoc($result);
                       
                        $name=$row['name'];
                        echo "  <i class='far fa-smile' style='font-size:24px'></i>  Welcome  $name";
                  ?>
                  
                 <?php // echo $_SESSION["email"]; ?>
<!--                  <input type="hidden" name="hiddenEmail" value=<?php echo $_SESSION['email']; ?>>-->
              </div>
          <?php

                    include './conn.php';
                    $email=$_SESSION['email'];
                   
                      $sql="select * from myadmin where email='$email'";
                        $result= mysqli_query($conn, $sql);

                        $row= mysqli_fetch_assoc($result);
                        $id=$row['uid'];
                        
                  
                     $show="select count(id) from tbl_cart where uid=$id";
                        $showCart= mysqli_query($conn, $show);
                        $rowCart = mysqli_fetch_array($showCart);
                        $totalproduct=$rowCart[0];
                  ?>
              

          </div>
        </div>

          
        <nav class="navigation">
          <div class="menu-toggle"><span></span></div>
          <ul class="menu">
             <?php
                 include './conn.php';
        $sql1="select * from tbl_category ";
                $result1= mysqli_query($conn, $sql1);
                
               ?>
              <li class="menu-item"><a href="homepage.php">Homepage</a></li>
              
              <li class="menu-item"><a href="custProduct.php">CUSTOMIZE ORDER</a></li>
              <li><a href="AboutUs.php">About</a></li>
               <li><a href="Cake.php?category_id=1" >OUR PRODUCT</a></li>
              <li><a href="ContactUs.php">Contact Us</a></li>
              <li class="current-menu-item menu-item-has-children"><a href="#">My ACCOUNT</a><span class="sub-toggle"><i class="fa fa-angle-down"></i></span>
              <ul class="sub-menu">
                  <li><a href="Profile.php">MY PROFILE</a></li>
                  <li><a href="viewOrdersCustomer.php">ORDERS</a></li>
                <li><a href="viewCtomizeProductCustomer.php">CUSTOMIZE ORDERS</a></li>
                <?php
                if($totalproduct>0){
                ?>
                <li><a href="Cart.php">CART   ( <?php echo $totalproduct; ?> )</a></li>
                <?php
                }
                
                else{?>
                <li><a href="EmptyCart.php">Cart ( 0 )</a></li>
                <?php
                }
                ?>
                <li><a href="ChangePassowrd.php">CHANGE PASSWORD</a></li>
                <li><a href="viewFeedbackCustomer.php">CUSTOMER FEEDBACK</a></li>

                <li><a href="Logout.php">LOGOUT</a></li>
              </ul>
            </li>
          </ul>
        </nav>
      </div>
    </header>
    <!-- home-2 banner-->
    <div class="pb-80" id="slider">
      <div class="ps-container">
        <div class="ps-carousel--animate ps-carousel-nav">
          <div class="item">
            <div class="ps-banner bg--cover" data-background="images/strawBerry1.jpg"><img src="images/1.png" alt="">
              <div class="ps-banner__content">
                <h5 class="animated" data-animation-in="fadeInRight" data-delay-in="0.1">EVERY DAY WE MAKE</h5>
                <h3 class="animated" data-animation-in="fadeInRight" data-delay-in="0.3">Freshly Baked  Items</h3>
                <!--<p class="animated" data-animation-in="fadeInRight" data-delay-in="0.4">Bakery. See more. Do more.</p><a class="ps-btn animated" href="#" data-animation-in="fadeInRight" data-delay-in="0.5">Order now</a>-->
              </div>
            </div>
          </div>
          <div class="item">
            <div class="ps-banner bg--cover" data-background="images/chef.jpg"><img src="images/SHAS.jpg" alt="">
              <div class="ps-banner__content">
                <h5 class="animated" data-animation-in="fadeInRight" data-delay-in="0.1">EVERY DAY WE MAKE</h5>
                <h3 class="animated" data-animation-in="fadeInRight" data-delay-in="0.3">Freshly Baked Items</h3>
               <!-- <p class="animated" data-animation-in="fadeInRight" data-delay-in="0.4">Bakery. See more. Do more.</p><a class="ps-btn animated" href="#" data-animation-in="fadeInRight" data-delay-in="0.5">Order now</a>-->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- home-2 about-->
    <div class="ps-home-about">
      <div class="ps-container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
            <div class="ps-section__header">
              <h3 class="ps-section__title">Bready, take me away !</h3>
              <p>“It seems that every country that can get its hands on butter has its opinion of what butter cream frosting should be. Some are made with eggs and butter.”</p><small>Sunshine -  CEO Bakery</small><img src="images/signature-2.png" alt="">
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
            <div class="ps-section__images"><img src="images/pages/home-2-about.jpg" alt=""><img src="images/pages/home-2-about-2.jpg" alt=""></div>
          </div>
        </div>
        <div class="ps-about-number">
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
    <!-- home-2 product-->
    <div class="ps-home-product">
      <div class="ps-container">
        <div class="ps-section__header">
          <h3 class="ps-section__title">Item of the day</h3>
          <p>Delivering to your door</p><span><img src="images/icons/floral.png" alt=""></span>
        </div>
        <div class="ps-section__content">
          <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 ">
              <div class="ps-product">
                <div class="ps-product__thumbnail"><img src="images/1.png" alt=""><a class="ps-product__overlay" href="product-detail.html"></a>
                 
                </div>
           
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 ">
              <div class="ps-product">
                <div class="ps-product__thumbnail"><span class="ps-badge"><img src="images/icons/badge-red.png" alt=""><i>New</i></span><img src="images/9.jpg" alt=""><a class="ps-product__overlay" href="product-detail.html"></a>
                 
                </div>
               
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 ">
              <div class="ps-product">
                <div class="ps-product__thumbnail"><span class="ps-badge"><img src="images/icons/badge-red.png" alt=""><i>New</i></span><img src="images/8.jpg" alt=""><a class="ps-product__overlay" href="product-detail.html"></a>
                  
                </div>
             
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 ">
              <div class="ps-product">
                <div class="ps-product__thumbnail"><span class="ps-badge ps-badge--sale"><img src="images/icons/badge-brown.png" alt=""><i>50%</i></span><img src="images/7.jpg" alt=""><a class="ps-product__overlay" href="product-detail.html"></a>
                 
                </div>
              
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 ">
              <div class="ps-product">
                <div class="ps-product__thumbnail"><img src="images/d.jpg" alt=""><a class="ps-product__overlay" href="product-detail.html"></a>
                  
                </div>
               
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 ">
              <div class="ps-product">
                <div class="ps-product__thumbnail"><img src="images/p2.jpg" alt=""><a class="ps-product__overlay" href="product-detail.html"></a>
                  
                </div>
                
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 ">
              <div class="ps-product">
                <div class="ps-product__thumbnail"><img src="images/g6.jpg" alt=""><a class="ps-product__overlay" href="product-detail.html"></a>
                 
                </div>
               
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 ">
              <div class="ps-product">
                <div class="ps-product__thumbnail"><img src="images/Cookie1.jpg" alt=""><a class="ps-product__overlay" href="product-detail.html"></a>
               
                </div>
               
              </div>
            </div>
          </div>
        </div>
      
        <div class="ps-testimonials bg--parallax" data-background="images/testimonial-2.jpg">
          <div class="ps-container">
            <div class="ps-carousel--testimonial owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="false" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on" data-owl-animate-in="fadeIn" data-owl-animate-out="fadeOut">
              <div class="ps-block--tesimonial">
                <div class="ps-block__user"><img src="images/Capture2.png" alt=""></div>
                <div class="ps-block__content">
                 
                  <p>“Dessert pudding dessert jelly beans cupcake sweet caramels gingerbread. Fruitcake biscuit cheesecake. Cookie topping sweet muffin pudding tart bear claw sugar plum croissant.”</p>
                </div>
                <div class="ps-block__footer">
               <!--   <p><strong>Logan May</strong>  - CEO & Founder Invision</p>-->
                </div>
              </div>
          
              <div class="ps-block--tesimonial">
                <div class="ps-block__user"><img src="images/Capture1.png" alt=""></div>
                <div class="ps-block__content">
                 <p>“Dessert pudding dessert jelly beans cupcake sweet caramels gingerbread. Fruitcake biscuit cheesecake. Cookie topping sweet muffin pudding tart bear claw sugar plum croissant.”</p>
                </div>
               
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- home-blog-->
    <div class="ps-home-blog">
      <div class="ps-container">
        <div class="ps-section__header">
          <h3 class="ps-section__title">Our history</h3>
          <p>Live with passion</p><span><img src="images/icons/floral.png" alt=""></span>
        </div>
        <div class="ps-section__content">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
              <div class="ps-post">
                <div class="ps-post__thumbnail"><img src="images/chef1.png" alt=""><a class="ps-post__overlay" href="blog-detail.html"></a></div>
                <div class="ps-post__content"><span class="ps-post__posted">March 31, 2018</span><a class="ps-post__title" href="#">BUTTERY TOAST</a><span class="ps-post__byline">By<a href="#"> Alena Studio</a></span>
                  <p>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further…</p><a class="ps-post__morelink" href="blog-detail.html">Read more</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
              <div class="ps-post">
                <div class="ps-post__thumbnail"><img src="images/posts/home-2.jpg" alt=""><a class="ps-post__overlay" href="blog-detail.html"></a></div>
                <div class="ps-post__content"><span class="ps-post__posted">March 31, 2018</span><a class="ps-post__title" href="#">Pumpkin buns with salted</a><span class="ps-post__byline">By<a href="#"> Alena Studio</a></span>
                  <p>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further…</p><a class="ps-post__morelink" href="blog-detail.html">Read more</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
              <div class="ps-post">
                <div class="ps-post__thumbnail"><img src="images/posts/home-3.jpg" alt=""><a class="ps-post__overlay" href="blog-detail.html"></a></div>
                <div class="ps-post__content"><span class="ps-post__posted">March 31, 2018</span><a class="ps-post__title" href="#">Tartine style bread</a><span class="ps-post__byline">By<a href="#"> Alena Studio</a></span>
                  <p>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further…</p><a class="ps-post__morelink" href="blog-detail.html">Read more</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- home-2 contact-->
    <div class="ps-home-contact">
      <div class="ps-container">
        <div class="ps-block--square-grid">
          <div class="ps-block--square">
            <div class="ps-block__thumbnail bg--cover" data-background="images/C6.jpg"></div>
            <div class="ps-block__content contact">
              <h3>OFFICE AT SURAT</h3>
              <h4>BASEMENT COMPANY, SURAT</h4><a href="Bhagyashri@gmail.com">Bhagyashri@gmail.com</a>
              <p>+91 960-171-2735</p>
              <p>+91 909-998-2202</p>
            </div>
          </div>
          <div class="ps-block--square contact">
            <div class="ps-block__thumbnail bg--cover" data-background="images/8.jpg"></div>
            <div class="ps-block__content">
              <div id="contact-map" data-address="Adajan,SURAT,india" data-title="Funiture!" data-zoom="17"></div>
            </div>
          </div>
          <div class="ps-block--square reverse">
            <div class="ps-block__thumbnail bg--cover" data-background="images/square/3.jpg"></div>
            <div class="ps-block__content contact">
              <h3>Time to Open</h3>
              <p>
                Monday - Friday: <br>08:00 am - 08:30 pm <br>
                Saturday - Sunday: <br>
                10:00 am - 16:30 pm <br>
              </p>
            </div>
          </div>
          <div class="ps-block--square reverse">
            <div class="ps-block__thumbnail bg--cover" data-background="images/square/4.jpg"></div>
            <div class="ps-block__content contact">
              <h3>Love it....</h3>
              <p>Leverage agile frameworks to provide a</p>
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
    <!--<div class="ps-popup" id="subscribe" data-time="10000">
      <div class="ps-popup__content"><a class="ps-popup__close" href="#"><i class="fa fa-remove"></i></a>
       <form class="ps-form--subscribe-popup bg--cover" action="http://warethemes.com/html/bready/do_action" method="post" data-background="images/bg/subscribe.jpg">
          <h3></h3>
          <p>Follow us & get<strong> 20% OFF</strong></p>
          <div class="form-group">
            <input class="form-control" type="text" placeholder="Enter your email...">
            <button class="ps-btn ps-btn--yellow">Subscribe</button>
          </div>
        </form>
      </div>
    </div>-->
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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOAVbTzBLcOkZOXAIBNs-8EDzqXZoOVa0&amp;region=GB"></script>
 

<?php
ob_end_flush();
?> 



<div class="container">
 
  <!-- Trigger the modal with a button -->
  <!--<button type="button" >Open Modal</button>-->

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
            <center>
                <b><h2><u>Change Password</u></h2></b>
            </center>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
         
        </div>
          <div class="modal-body" style="background-color: oldlace;height: 300px;">
            <center>
         <form action="#" method="post" >
	<div class="box">
	
           
                    
                <table style="mergin-top:30px;">
                    <tr>
                        <td width="150px;"><label>Old Password</label></td>
                        <td><input type="text" placeholder="Old Password" required="" style="width: 240px;height: 40px; margin-bottom: 20px;" name="OldPassword" required>
</td>
                    </tr>
                    <tr>
                        <td><label>New Password</label></td>
                        <td><input type="text" placeholder="New Password"  required="" style="width: 240px;height: 40px; margin-bottom: 20px;" name="NewPassword" required>
</td>
                    </tr>
                    
                    <tr>
                        <td><label>Confirm Password</label></td>
                        <td><input type="text" placeholder="Confirm Password" required=""  style="width: 240px;height: 40px; margin-bottom: 20px;" name="ConfirmPassword" required>
</td>
                    </tr>
                </table>
		
		
            <input class="btn"  style="margin-top: 20px;background-color: black;color: white;" type="submit"  name="submit" value="SUBMIT"><br>
	</div>	
    </form>
            </center>
        </div>
       
      </div>
      
    </div>
  </div>
  
</div>
    
     </body>

<!-- Mirrored from warethemes.com/html/bready/homepage-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Jan 2019 12:19:30 GMT -->
</html>

<?php
ob_start();

$conn = new mysqli("localhost", "root", "","php" );
 if(isset($_POST['submit']))
if($_POST)
{

        $password = $_POST['OldPassword'];
        $newpassword = $_POST['NewPassword'];
        $confirmnewpassword = $_POST['ConfirmPassword'];
        $user=$_SESSION['email'];
        
                   
        $query="select password from myadmin where email='{$user}'";
        $data=mysqli_query($conn,$query);
        $data1= mysqli_fetch_row($data);
        
        if($data1[0]==$password)
        {
                if($newpassword==$confirmnewpassword)
                {
                    $q="update myadmin set password='{$newpassword}' where email='{$user}' ";
                     $result=mysqli_query($conn,$q);
                     
                     if($result)
                     {
                          echo "<script>alert('password changed')</script>";
                     }
                }
                else 
                {
                   echo "<script>alert('new password and conform not matche')</script>";
                }     
        } 
         else {
            echo "<script>alert('old password not matche')</script>";
        }
        

}
        
?>

<div class="container">
 
  <!-- Trigger the modal with a button -->
  <!--<button type="button" >Open Modal</button>-->

  <!-- Modal -->
  <div class="modal fade" id="Profile" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
            <center><div ><h2><b><u>Profile</u></b></h2></div></center>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
         
        </div>
          <div class="modal-body" style="background-color:oldlace;">
            <center>
         <form action="#" method="post" >
	<div class="box">
	  
            
            <div ><i style='color:grey;' class="fas fa-user-circle fa-10x"></i></div>
            <h3> <b><?php 
           $email=$_SESSION['email'];
           echo  $_SESSION['email'];              
           
   
       
            $sql="select * from myadmin where email='$email'";
            //$id=$row[0];
            $fire1= mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($fire1);
           
           ?></b></h3>
                <table style="mergin-top:400px;">
                    <tr>
                     
                        <td><input type="text" value="<?php echo $row[1]; ?>" placeholder="Name"  required="" style="width: 300px;height: 40px; margin-bottom: 20px;" name="name" >
</td>
                    </tr>
                    <tr>
                        
                  
                        <td><input type="text"  value="<?php echo $row[4]; ?>" placeholder="Contact" required="" style="width: 300px;height: 40px; margin-bottom: 20px;" name="contact" >
</td>
                    </tr>
                    <tr>
                    
                        <td><input type="text" value="<?php echo $row[6]; ?>" placeholder="Address" required="" style="width: 300px;height: 40px; margin-bottom: 20px;" name="address" >
</td>
                    </tr>
                    
               
                </table>
		
		
            <input class="btn" style="background-color: black;color: white;" type="submit"  name="update" value="SUBMIT"><br>
	</div>	
    </form>
            </center>
        </div>
       
      </div>
      
    </div>
  </div>
  
</div>


<?php


$conn = new mysqli("localhost", "root", "","php" );
 if(isset($_POST['update'])){
   $name=$_POST['name'];  
   $contact=$_POST['contact'];
   $address=$_POST['address'];
   
   
   $update="update myadmin set name='$name', contact='$contact',address='$address' where email='$email' ";
   $execute= mysqli_query($conn, $update);
   if($execute){
         $page = $_SERVER['PHP_SELF'];
            $sec = "1";
            header("Refresh: $sec; url=$page");
        echo "<script>alert('Prodile details changed')</script>";
        
   }
   
   
   
 }
 ?>
 
 
