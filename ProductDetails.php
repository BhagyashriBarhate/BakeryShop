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
  
<!-- Mirrored from warethemes.com/html/bready/product-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Jan 2019 13:06:52 GMT -->
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
 include 'headerCustomer.php';
 ?>
    <div class="ps-hero bg--cover" data-background="images/hero/product.jpg">
      <div class="ps-hero__content">
        <h1> Product Details</h1>
        <div class="ps-breadcrumb">
          <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li class="active">Product Details</li>
          </ol>
        </div>
      </div>
    </div>

    
    
    <main class="ps-main">
        <?php
        
include './conn.php';
@$id=$_GET['id'];
echo "<form action='#' method='post'>";
$sql="select *  from product where id=$id";
$result= mysqli_query($conn, $sql);

echo "<input type='hidden' name='hidden_id' value='$id'>";
 
$sqlCount="select qty from product where id=$id";
$result1= mysqli_query($conn, $sqlCount);
$rowProduct= mysqli_fetch_array($result1);
$_SESSION['qty']=$rowProduct[0];





while($row=mysqli_fetch_array($result)){
    $price=$row[3];
     echo "<input type='hidden' name='hidden_price' value='$price'>";
    ?>
    <div class="ps-container">
        <div class="ps-product--detail">
          <div class="row">
                <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12 ">
<!--                  <span class="ps-badge ps-badge--sale"><img src="images/icons/badge-brown.png" alt=""><i>50%</i></span>-->
                <div class="ps-product__image">
                  <div class="item"><?php echo "<img src='{$row[9]}' style='width:510px;height:400px;'>"; ?></div>
                </div>
            
            </div>
            <div class="col-lg-7 col-md-6 col-sm-12 col-xs-12 ">
              <div class="ps-product__info">
                <h1 class="text-uppercase"><?php echo $row[1]; ?></h1>
                <div class="ps-product__rating">
                 
                </div>
                <h3 class="ps-product__price"> <?php echo $row[3]; ?><span>  Rs /- </span></h3>
                

                
                <div class="ps-product__desc">
                  <h5>Quick Overview</h5>
                  <h4 > <?php echo $row[5]; ?></h4>
                      <?php echo $row[8]; ?>
                  
<!--                  <p>Lollipop dessert donut marzipan cookie bonbon sesame snaps chocolate. Cupcake sweet roll sweet dragée dragée. Lollipop dessert donut marzipan cookie bonbon sesame snaps chocolate cake.</p>
                  <p>Toffee chocolate cake apple pie sugar plum sesame snaps muffin cake pudding cupcake. Muffin danish muffin lollipop biscuit jelly beans oat cake croissant.</p>-->
                </div>
                <h4><b>QUANTITY</b></h4> 
                 <div class="form-group--number">
                     <!-- <button class="minus"><span>-</span></button>-->
                     <!-- <input class="form-control" type="number" value="1" max="<?php // $_SESSION['qty'] ?>" name="qty">-->
                     <select class="form-control" name="qty" style="width:160px;height: 40px; ">
                          <?php 
                              for ($i=1;$i<=$_SESSION['qty'];$i++)
                              {
                                  echo "<option>$i</option>";
                              }
                          ?>
                      </select>
                      
                      <input type="hidden" name="hidden_name" value="qty">
                      
                     <!-- <button class="plus"><span>+</span></button>-->
                 </div><br><br>
                 <p style="color: red;">Hurry Only <?php echo $_SESSION['qty']; ?> Left in Stock!</p>
                 
                 <a href="Cart.php?id=$id">
                    <input type="submit" name="submit" class="ps-btn ps-btn--yellow" value="Add To cart">
               </a>
               
<!--                 <a href="checkout1.php?id=$id">
                    <input type="submit" name="submit" class="ps-btn ps-btn--yellow" value="Checkout">
               </a>-->

                 
              </div>    
            </div>
          </div>
        </div>
        </div>
                    <?php
                       }
                    ?>
</form>     
            </div>
           
           
          </div>
        </div>
      </div>
    </main>
    <!-- Relate product-->
  
    <footer class="ps-footer">
      <div class="ps-footer__content">
        <div class="ps-container">
          <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 ">
              <div class="ps-site-info"><a class="ps-logo" href="index.html"><img src="images/Yummy.png" alt=""></a>
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
                <h4>Get news & offer</h4>
                <div class="form-group">
                  <input class="form-control" type="text" placeholder="Your Email...">
                  <button>Subscribe</button>
                </div>
                <p>* Don't worry, we never spam</p>
              </form>
              <div class="ps-footer__contact">
                <h4>Contact with me</h4>
                <p>PO Box 16122 Collins Street West,Victoria 8007 Australia</p>
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
      <div class="ps-footer__copyright">
        <div class="container">
          <p>
            ©  Copyright by <strong>Bready Store</strong>. Design by<a href="#"> Alena Studio.</a></p>
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

<!-- Mirrored from warethemes.com/html/bready/product-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Jan 2019 13:06:54 GMT -->
</html>


<?php
    include './conn.php';
    if(isset($_POST['submit'])){
        $qty=$_POST['qty'];
        
        $_SESSION['qty']=$qty;
        
        $hidden_price=$_POST['hidden_price'];
         $hidden_id=$_POST['hidden_id'];
        $email=$_SESSION['email'];
        $sql="select * from myadmin where email='$email'";
        $result= mysqli_query($conn, $sql);
        
        $row= mysqli_fetch_assoc($result);
        $id=$row['uid'];
        
        echo $hidden_id;
        echo $hidden_price;
        
       $total=$hidden_price * $qty;
        $insert="insert into tbl_cart(pid,uid,qty,total) values('$hidden_id','$id','$qty','$total')";
        $fire= mysqli_query($conn, $insert);
        
        if($fire){
             $sec = "0.1";
            header("Refresh: $sec; url=$page");
            $qty=$_POST['qty'];
//            echo "<script>alert('Your Product is added into cart!!!')</script>";
        }
        
        
        
    }            

?>