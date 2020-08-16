<?php
ob_start();
 session_start();
 if(!isset($_SESSION['password']))
 {
//     header('location:login.php');
     
 }
?>
<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7"><![endif]-->
<!--[if IE 8]><html class="ie ie8"><![endif]-->
<!--[if IE 9]><html class="ie ie9"><![endif]-->
<html lang="en">
  
<!-- Mirrored from warethemes.com/html/bready/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Jan 2019 13:06:54 GMT -->
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
    <!--</header>-->
    <div class="ps-hero bg--cover" data-background="images/hero/about.jpg">
      <div class="ps-hero__content">
        <h1>Checkout</h1>
        <div class="ps-breadcrumb">
          <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active">Checkout</li>
          </ol>
        </div>
      </div>
    </div>
    <?php 
           $email=$_SESSION['email'];
          
       
            $sql="select * from myadmin where email='$email'";
            //$id=$row[0];
            $fire1= mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($fire1);
            $id=$row['uid'];
             echo "<input type='hidden' name='uid' value='$id'";

            
   ?>
    <div class="ps-checkout pt-40 pb-40">
      <div class="ps-container">
        <form class="ps-form--checkout" action="#" method="post">
          <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 ">
              <div class="ps-checkout__billing">
                  <h3>Billing Details</h3>
                    <div   class="form-group form-group--inline">
                      <label>Name<span>*</span>
                      </label>
                      <div class="form-group__content">
                          <input class="form-control" value="<?php echo $row[1]; ?>" name="name" type="text">
                      </div>
                    </div>
                    
                   
                    <div class="form-group form-group--inline">
                      <label>Email Address<span>*</span>
                      </label>
                      <div class="form-group__content">
                        <input class="form-control" name="email" value="<?php echo $row[3]; ?>" type="email">
                      </div>
                    </div>
                   
                    <div class="form-group form-group--inline">
                      <label>Phone<span>*</span>
                      </label>
                      <div class="form-group__content">
                          <input class="form-control" value="<?php echo $row[4]; ?>" name="contact" type="text">
                      </div>
                    </div>
                    <div class="form-group form-group--inline">
                      <label>Address<span>*</span>
                      </label>
                      <div class="form-group__content">
                        <input class="form-control" name="address" value="<?php echo $row[6]; ?>" type="text">
                      </div>
                    </div>
                   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
             
                <div class="form-group submit" style="margin-top: 20px;">
                <!--<button class="ps-btn ps-btn--yellow">Order Bakery Now</button>-->
                <input type="submit" name="submit" class="ps-btn ps-btn--yellow" value="Update Details">
              </div>
            </div>
               
                
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
              <div class="ps-checkout__order">
                <header>
                  <h3>Your Order</h3>
                </header>
                <div class="content">
                  <table class="table ps-checkout__products">
                    <thead>
                      <tr>
                        <th class="text-uppercase">Product</th>
                        <th class="text-uppercase">Quantity</th>
                        <th class="text-uppercase">Total</th>
                      </tr>
                    </thead>
                    <?php
                     $cart="SELECT product.id,product.pname,product.price,tbl_cart.total,tbl_cart.qty
                    FROM product
                    INNER JOIN tbl_cart
                    ON product.id=tbl_cart.pid where tbl_cart.uid=$id ";
                       $fire= mysqli_query($conn, $cart);
                       
                      $oldTotal=0; 
                     $totalFinal=0;
                     $discount=0;
                     $final=0;
                    while($row1= mysqli_fetch_assoc($fire))
                     
                  
                {
                        
                         $total=$row1['total'];
                         $qty=$row1['qty'];
                         $price=$row1['price'];
                         $pid=$row1['id'];
                         $pname=$row1['pname'];
                          echo "<input type='hidden' name='pname' value='$pname'>";

                         echo "<input type='hidden' name='pid' value='$pid'>";
                         echo "<input type='hidden' name='qty' value='$qty'>";

                         
                         $subTotal=$qty * $price ;
                         
                         $final=$final+$subTotal;
                         
                          $oldTotal=$oldTotal+$total;
                          
                       $discount=$subTotal*10/100;
                        $totalFinal=$totalFinal+$subTotal-$discount;
                     echo "  <input type='hidden' name='totalAmt' value='$totalFinal'>";

                  echo "<tbody><tr><td>$row1[pname]</td><td>$row1[qty]</td><td>$subTotal  Rs/-</td></tr></tbody>"; 
                 
                 
                }     
                    ?>
                    
                  </table>
                    <hr>
                     <div>
                           <h3 class="ps-product__price"><del><span>Rs.  </span><?php echo $final;  ?> /-</del></h3>
                         <h5  style="color:white;">( 10% Discount )</h5>
                         <h4 style="color:white;"><b>TOTAL PRICE  :  <?php echo $totalFinal;?>  Rs/-</b></h4>
            </div>
                   
                </div>
                      <form action="#" method="post">
                          <a href="bill.php?oid=$id"><input type="submit" style="margin-left: 80px;margin-bottom: 10px;" name="submitCheckout" class="ps-btn ps-btn--yellow" value="ORDER BAKERY NOW"></a>

<!--                      <button class="ps-btn ps-btn--fullwidth ps-btn--yellow">ORDER BAKERY NOW</button>-->
                      </form>
                  </div>
                </footer>
              </div>
              <div class="ps-shipping">
<!--                <p>YOUR ORDER QUALIFIES FOR FREE SHIPPING.<br> <a href="#"> Singup </a> for free shipping on every order, every time.</p>-->
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
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

<!-- Mirrored from warethemes.com/html/bready/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Jan 2019 13:06:54 GMT -->
</html>

<?php


$conn = new mysqli("localhost", "root", "","php" );
 if(isset($_POST['submit'])){
   $name=$_POST['name'];  
   $contact=$_POST['contact'];
   $address=$_POST['address'];
   
   
   $update="update myadmin set name='$name', contact='$contact',address='$address' where email='$email' ";
   $execute= mysqli_query($conn, $update);
   if($execute){
         $page = $_SERVER['PHP_SELF'];
            $sec = "1";
            header("Refresh: $sec; url=$page");
//        echo "<script>alert('Details changed')</script>";
        
   }
   
   
   
 }
 ?>
<?php


$conn = new mysqli("localhost", "root", "","php" );
 if(isset($_POST['submitCheckout'])){
     $total=$_POST['totalAmt'];
     $pid=$_POST['pid'];
          $pname=$_POST['pname'];        

          $qty=$_POST['qty'];  
          
       $bill=uniqid();

            $email=$_SESSION['email'];
            $userid=$_SESSION['id'];
          
       
            $sql="select * from myadmin where email='$email'";
            $fire1= mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($fire1);
            $id=$row['uid'];
            print($id);
            
               $c="SELECT COUNT(*) FROM tbl_cart where uid=$id";
                $cf= mysqli_query($conn, $c);
                $crow= mysqli_fetch_row($cf);
                $count=$crow[0];
                
                $cart="SELECT * FROM tbl_cart where uid=$id";
                @$firecart= mysqli_query($conn,$cart);
                $i=0;
                while ($row1 = mysqli_fetch_array($firecart)) {
                        $p[$i]=$row1[1];
                    
                       
                        $qty[$i]=$row1[3]; 
                        
                        $i++;

                }
                 
                
                for ($i = 0;$i < $count; $i++) {
                   
                                   
                  
             $sql="insert into tbl_order(billid,TotalAmt,Date,uid,pid,qty,status,Dstatus) 
             values('$bill','$total',NOW(),$id,$p[$i],$qty[$i],'Pending','Pending')";
             $result= mysqli_query($conn, $sql);
             
             if($result){
              
                 header('Location:bill.php');
             } else {
                 echo mysqli_error($conn);
             }
                }
 }
 ?>