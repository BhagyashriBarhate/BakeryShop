<?php
ob_start();
session_start();
?>

<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7"><![endif]-->
<!--[if IE 8]><html class="ie ie8"><![endif]-->
<!--[if IE 9]><html class="ie ie9"><![endif]-->
<html lang="en">
  
<!-- Mirrored from warethemes.com/html/bready/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Jan 2019 12:26:04 GMT -->
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
    <!-- header-->
    
    <div class="ps-hero bg--cover" data-background="images/hero/about.jpg">
      <div class="ps-hero__content">
        <h2>View Customize Order</h2>
        <div class="ps-breadcrumb">
          <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li class="active">Orders </li>
          </ol>
        </div>
      </div>
    </div>
    <main class="ps-main">
      <div class="ps-container">
        <div class="ps-cart-listing">
          <div class="table-responsive">
            <table class="table ps-table ps-table--listing">
              <thead>
                <tr>
                  <th>All Products</th>
                  
                 <th>Quanity</th>
                  <th>Price</th>
                  <th>Description</th>
                  <th>Total</th>
                  <th>Status</th>
                  
                  
                </tr>
              </thead>
                <tbody>

                 <?php
                include './conn.php';
                  echo "<form action='#' method='post'>";
                  $email=$_SESSION['email'];
                   
                  
                      $sql="select * from myadmin where email='$email'";
                        $result= mysqli_query($conn, $sql);

                        $row= mysqli_fetch_assoc($result);
                        $id=$row['uid'];
                     
                        
                  ?>
            
                  <?php
                 $sql="select * from custProduct where  uid=$id";
                    $result= mysqli_query($conn, $sql);
                    
                 ?>
                    
                  <?php
                    $totalFinal=0;

                    while ($row = mysqli_fetch_array($result)) {
                    $id=$row['pcid'];
                     $price=$row[4];
                       $qty=$row[5];
                       
                       $total=$price * $qty;
                     ?>
                    
                   <tr>
                       <td><a class="ps-product--table"><?php echo "<img src='{$row['image']}' height='100px' width='100px'>" ?><?php echo $row['pname'] ;?></a></td>
                   <td><?php echo $row['qty']; ?> </td >
                  <td><?php echo $row['price']; ?> </td >
                 <td><?php echo $row['description']; ?> </td>
                      <td><?php echo $total; ?> </td>

                 <td><?php echo $row['status']; ?> </td>
                          <?php
                          if($row['status']=='Approved'){
                                   echo "<td><a href='customBill.php?pcid=$id'><button type='button' class='btn btn-default '>Generrate Bill</button></a>"; 
                                   echo  '<h5  style="color: red;margin-top:6px;">     Your Order is Confirm!!</h5>';
                                   }
//                          elseif($row['status']=='Reject'){
//                                   echo " <td> <button type='button' class='btn btn-default disabled'>PAYMENT </button></td>";
//
//                          }
//                          else{
//                                echo"<td><a href='Checkout.php'><input  type='submit'  name='updateQty' class='btn btn-default'  value='PAYMENT'></td>";
//                          }
                          ?>
                    <td>
                        <?php
                        if($row['status']=='Reject'  ){
                            echo "<a href='deleteCust.php?pcid=$id'><div name='delete' class='ps-remove'></div></a></td>";
                            
                        }
                        if($row['status']=='Pending'  ){
                            echo "<a href='deleteCust.php?pcid=$id'><div name='delete' class='ps-remove'></div></a></td>";

                        }
                        
                        
                        ?>
                        
                    <div class="form-group--number">
                    
                      
                    </div>
                   </td> 
                
                   </form>
                </tr>
              
             <?php
            
            
             }
             ?>
                
            </tbody>
            </table>
          </div>
          <div class="ps-cart__actions">
            <div class="ps-cart__promotion">
              <div class="form-group">
               
              </div>
              <div class="form-group">
                  <a href="custProduct.php"><button class="ps-btn ps-btn--gray">Continue Shopping</button></a>
              </div>
            </div>
          
          </div>
        </div>
      </div>
    </main>
    <div class="ps-site-features">
      <div class="ps-container">
        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 ">
            <div class="ps-block--iconbox"><i class="ba-delivery-truck-2"></i>
              <h4>Free Shipping <span> On Order Over$199</h4>
              <p>Want to track a package? Find tracking information and order details from Your Orders.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 ">
            <div class="ps-block--iconbox"><i class="ba-biscuit-1"></i>
              <h4>Master Chef<span> WITH PASSION</h4>
              <p>Shop zillions of finds, with new arrivals added daily.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 ">
            <div class="ps-block--iconbox"><i class="ba-flour"></i>
              <h4>Natural Materials<span> protect your family</h4>
              <p>We always ensure the safety of all products of store</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 ">
            <div class="ps-block--iconbox"><i class="ba-cake-3"></i>
              <h4>Attractive Flavor <span>ALWAYS LISTEN</span></h4>
              <p>We offer a 24/7 customer hotline so you’re never alone if you have a question.</p>
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
              <div class="ps-site-info"><a class="ps-logo" href="index.html"><img src="images/logo-dark.png" alt=""></a>
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

<!-- Mirrored from warethemes.com/html/bready/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Jan 2019 12:26:04 GMT -->
</html>