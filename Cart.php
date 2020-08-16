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
  
<!-- Mirrored from warethemes.com/html/bready/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Jan 2019 13:06:54 GMT -->
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
          <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

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
    <!--</header>-->
    <div class="ps-hero bg--cover" data-background="images/hero/about.jpg">
      <div class="ps-hero__content">
        <h1>Shopping Cart</h1>
        <div class="ps-breadcrumb">
          <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li class="active">Shopping Cart</li>
          </ol>
        </div>
      </div>
    </div>
    <form action="#" method="post">
    <div style="float: right;margin-right: 40px;">
      
    </div>
    </form>
      <form action="#" method="post">
          <div style="margin-left: 1100px; "> <a href="#" ><input  type="submit" name="EmptyCart" class="ps-btn ps-btn--lightyellow" value="Empty Cart"></a></div>
                </form>
    <main class="ps-main">
      <div class="ps-container">
        <div class="ps-cart-listing">
          <div class="table-responsive">
            <table class="table ps-table ps-table--listing">
              <thead>
                <tr>
                  <th>All Products</th>
                  <th>Price</th>
                  <th>Quantity</th>
                  <th>Quantity</th>

                 <th>Total</th>
<!--                  <th>Update </th>-->
                  <th></th>
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
                           
   $show="select count(id) from tbl_cart where uid=$id";
                        $showCart= mysqli_query($conn, $show);
                        $rowCart = mysqli_fetch_array($showCart);
                        $totalproduct=$rowCart[0];
                        
                  ?>
              <h4 style="margin-left: 10px;"> MY CART  ( <?php  echo $totalproduct;  ?> )</h4>
                  <?php
                   $sql="SELECT product.image,product.price,product.qty,product.pname,tbl_cart.total,tbl_cart.qty,tbl_cart.id,tbl_cart.pid
                    FROM product
                    INNER JOIN tbl_cart
                    ON product.id=tbl_cart.pid where tbl_cart.uid=$id ";
                 
//                    SELECT product.image,product.price,product.pname,tbl_category.cname
//                          FROM product
//                    INNER JOIN tbl_category
//                    ON product.cid=tbl_cart.id 


            
                    $result= mysqli_query($conn, $sql);
                    
                    
                 ?>
                    
                  <?php
                    $totalFinal=0;

                    while ($row = mysqli_fetch_array($result)) {
                     $price=$row['price'];
                       $qty=$row['qty'];
                       $cart_id=$row['id'];
                      $pid=$row['pid'];
                      
                       echo "<input type='hidden' name='cart_id' value='$cart_id'>";
                       echo "<input type='hidden' name='pid' value='$pid'>";
                       
                      
                     ?>
                      <?php
                    $total=$price * $qty;
                                  
                    $totalFinal=$totalFinal + $total;
                    ?>
                
                  
                   <tr>
                       <td><a class="ps-product--table"><?php echo "<img src='{$row['image']}' height='100px' width='100px'>" ?><?php echo $row['pname'] ;?></a></td>
                  <td><?php echo $row['price']; ?> RS/-</td>
<!--                  <td>
                    <div class="form-group--number">
                    
                      <button class="minus"><span>-</span></button>
                      <input class="form-control" type="text"  value="<?php echo $qty; ?>" name="qty">
                    
                      
                      <button class="plus"><span>+</span></button>
                    </div>
                   </td> -->
                  
                  <td>
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
                 </div>
                      </td>
                      <td>
                     <?php echo $row['qty']; ?>

                  </td>
                  <td><strong> <?php echo $total; ?>Rs/-</strong></td>
                <script>
                                       function numberonly(evt){
                                       var ch= String.fromCharCode(evt.which);
                                       if (!(/0-9]/.test(ch))) {
                                       evt.preventDefault();
                                       }
                                       }
                             </script>
                  <td><a href=""><input  type="submit" name="updateQty" class="btn btn-default"  style="border-radius: 20px;" value="Update Quantity"></td>
                  
                  <td>
                     <?php  echo "<a href='deleteCart.php?cid=$cart_id'><div name='delete' class='ps-remove'></div></a>"; ?>
                      
                  </td>
                     </form>
                </tr>
              
             <?php
              
//                     if($totalproduct==0){
//                        echo "<center><h4 style='color:black;'>Your Shopping Cart is empty!</h4></center>";?>
<!--                         <center>
                    <img src="images/emptyCart.png" height="100px">
                    </center>-->
                    <?php
                    
             }
             ?>
                
            </tbody>
            </table>
          </form>
              
                            
          </div>
          <div class="ps-cart__actions">
            <div class="ps-cart__promotion">
              
              <div class="form-group">
                  <a href="Cake.php"> <button class="ps-btn ps-btn--gray">Continue Shopping</button></a>
              </div>
            </div>
            
            <div class="ps-cart__total">
              
                <h3><b>Total Price: <?php echo $totalFinal;?>  Rs/-</b></h3><a class="ps-btn" href="Checkout.php">Process to checkout</a>
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

<!-- Mirrored from warethemes.com/html/bready/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Jan 2019 13:06:54 GMT -->
</html>


<?php
 include './conn.php';
 if(isset($_POST['EmptyCart'])){
        
     
  $email=$_SESSION['email'];
                   
                  
                      $sql="select * from myadmin where email='$email'";
                        $result= mysqli_query($conn, $sql);

                        $row= mysqli_fetch_assoc($result);
                        $id=$row['uid'];
                               
$delete1="delete  from tbl_cart where uid=$id";
$del1= mysqli_query($conn, $delete1);

if ($del1) {
//   echo "<script>alert('your cart is empty now!!!')</script>";
   header("location:EmptyCart.php");
}

 }
         
 if(isset($_POST['updateQty'])){
         $qty=$_POST['qty'];
           $cart_id=$_POST['cart_id'];
           echo $cart_id;

         
           $sql1="update tbl_cart set qty='$qty' where id=$cart_id";
             $fire= mysqli_query($conn, $sql1);
            
             $page = $_SERVER['PHP_SELF'];
            $sec = "0.1";
            header("Refresh: $sec; url=$page");
 }
 

 
?>
