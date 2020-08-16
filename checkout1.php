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
  
<!-- Mirrored from warethemes.com/html/bready/product-listing.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Jan 2019 13:06:52 GMT -->
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

    <!-- header-->
    <?php
    include './headerCustomer.php';
    ?>
<!--   header end-->
    
    <div class="ps-hero bg--cover" data-background="images/hero/product.jpg">
      <div class="ps-hero__content">
        <h1> Shop Page</h1>
        <div class="ps-breadcrumb">
          <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li class="active">Shop Page</li>
             <h2  style="color: black;">Products</h2>
             
          </ol>
        </div>
      </div>
    </div>
    
    
    
  
    <div >
        
        <div class="col-sm-12" style="background-color: white;margin-bottom: 150px;">
          
    <div class="col-sm-3">
    <div class="container-fluid" id="page" style="margin-top:30px;">
        <h4>CATEGORIES</h4><br>
      <ul class="ps-list--checked" >
          
          
           <?php
           
           
           
                 include './conn.php';
        $sql1="select * from tbl_category ";
                $result1= mysqli_query($conn, $sql1);
                
                while ($row = mysqli_fetch_array($result1)) { 
                    
                    $id=$row[0];
                    $cname=$row[1];
                     echo "<input type='hidden' name='cname' value='$cname'>";

                    ?>
          <li><a href="checkout1.php?category_id=<?php echo $id;?>"><?php echo "$row[1]"; ?></a></li>
                    <?php
                }
                    ?>
        </div>
         
           </div>         
          <?PHP
          include './conn.php';
        $sql="select * from product  where cid=" . $_GET["category_id"];
                $result= mysqli_query($conn, $sql);

                   while ($row = mysqli_fetch_array($result)) { 
                    $id=$row[0];
                   $cname=$_POST['cname'];
                   echo $cname;
                 if($cname='Cake'){
                    ?>
            <div class="col-md-4" style="margin-top: 40px;">
                    <div class="ps-product">
                      <div class="ps-product__thumbnail"><?php echo "<img src='{$row[9]}' style='width:300px;height:200px;'>"; ?><a class="ps-product__overlay" href="product-detail.html"></a>
                        <ul class="ps-product__actions">
                          <?php echo "<li><a href='ProductDetails.php?id=$id' data-tooltip='Quick View'><i class='ba-magnifying-glass'></i></a></li>" ?>
                       <!--  <?php echo "<li><a href='#' name='addToCart' data-tooltip='Add to Cart'><i class='ba-shopping'></i></a></li>";?>-->
                        </ul>
                      </div>
                      <div class="ps-product__content"><a class="ps-product__title" href="product-detail.html"><?php echo "$row[1]" ?></a>
                        <p><a href="product-list.html">Bakery</a> - <a href="product-list.html">Sweet</a> - <a href="product-list.html">Bio</a></p>
                        <p class="ps-product__price"><?php echo "$row[3]"; ?> Rs/-</p>             
                         <p class="ps-product__price"><?php echo "$row[4]"; ?> Rs/-</p>             

                      </div>
                    </div>
                </div>
             <?php    
                 }
                }
   
                 
                    
       ?>
            
    
      </div>
  


           <?php
//                 include './conn.php';
//        $sql1="select * from tbl_category ";
//                $result1= mysqli_query($conn, $sql1);
//                
//                while ($row = mysqli_fetch_array($result1)) { 
//                    $id=$row[0];?>
           
        <li><a href="checkout1.php?category_id=<?php echo $id;?>"><?php echo "$row[1]"; ?></a></li>
                    <?php
//                }
//                    ?>
        </div>
         
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

<!-- Mirrored from warethemes.com/html/bready/product-listing.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Jan 2019 13:06:52 GMT -->
</html>

 



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
 
 



 