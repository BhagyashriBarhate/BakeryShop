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
  
<!-- Mirrored from warethemes.com/html/bready/menu.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Jan 2019 13:06:55 GMT -->
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
        <form class="ps-form--search-2" action="http://warethemes.com/html/bready/do_action" method="post" >
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
<!--    header close-->
    <div class="ps-hero bg--cover" data-background="images/hero/about.jpg">
     <script>
                                       function numberonly(evt){
                                       var ch= String.fromCharCode(evt.which);
                                       if (!(/[0-9]/.test(ch))) {
                                       evt.preventDefault();
                                       }
                                       }
                             </script>
                             
       <script>
                                       function charonly(evt){
                                       var ch= String.fromCharCode(evt.which);
                                       if (!(/[A-Za-z]/.test(ch))) {
                                       evt.preventDefault();
                                       }
                                       }
                             </script>
                             
    <div class="ps-order-form bg--parallax" data-background="images/bg/testimonials.jpg">
      <div class="ps-container">
       <!-- form tag strats-->
       <form class="ps-form--menu" action="#" method="post"  enctype="multipart/form-data">
          <div class="ps-section__header text-center">
            <h3 class="ps-section__title">Give Your Order </h3>
            <p>Making people happy</p><span><img src="images/icons/floral.png" alt=""></span>
          </div>
          <div class="row">
               <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
               <div class="form-group">
                <label>Product Name</label>
                <input  type="text" class="form-control" onkeypress="charonly(event)" required=""   name="pname" placeholder="Enter product name"></textarea>
              </div>
               </div>
            
           
                    
             <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
               <div class="form-group">
                <label>Select Image <sup>*</sup></label>
                <input type="file" name="file" class="form-control">
               </div>
            </div>
              
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
               <div class="form-group">
                <label>Price <sup>*</sup></label>
                <input type="text" name="price" onkeypress="numberonly(event)"  required="" placeholder="Enter Price" class="form-control">
               </div>
            </div>
              
               <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
               <div class="form-group">
                <label>Quantity <sup>*</sup></label>
                <input type="text" name="qty" required="" onkeypress="numberonly(event)" placeholder="Enter Quantity " class="form-control">
               </div>
            </div>
              
                <div class="col-lg-12 col-md-6 col-sm-12 col-xs-12 ">
               <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" rows="4" required=""  name="desc" placeholder="Tell us a bit about your requirements"></textarea>
              </div>        
                </div>
              
                
             
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
              
              <div class="form-group submit">
                <!--<button class="ps-btn ps-btn--yellow">Order Bakery Now</button>-->
                <input type="submit" name="submitProduct" class="ps-btn ps-btn--yellow" value="Order Bakery Now">
              </div>
            </div>
          </div>

         
        </form>
          <!--form tag is over-->
          
      </div>
    </div>
   
         
    <div class="ps-site-features">
      <div class="ps-container">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 ">
            <div class="ps-block--iconbox" data-mh="icon"><i class="ba-delivery-truck-2"></i>
              <h4>Free Shipping <span> On Order Over $199</h4>
              <p>Want to track a package? Find tracking information and order details from Your Orders.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 ">
            <div class="ps-block--iconbox" data-mh="icon"><i class="ba-biscuit-1"></i>
              <h4>Master Chef<span> WITH PASSION</h4>
              <p>Shop zillions of finds, with new arrivals added daily.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 ">
            <div class="ps-block--iconbox" data-mh="icon"><i class="ba-flour"></i>
              <h4>Natural Materials<span> protect your family</h4>
              <p>We always ensure the safety of all products of store</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 ">
            <div class="ps-block--iconbox" data-mh="icon"><i class="ba-cake-3"></i>
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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAckIeA7eVaNv2fKmIKl-udHqlZW2tYxME&amp;region=GB"></script>
  </body>

<!-- Mirrored from warethemes.com/html/bready/menu.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Jan 2019 13:06:55 GMT -->
</html>




<?php
ob_start();
session_start();
   if(isset($_POST['submitProduct'])) 
  
   {
    $name = $_POST['pname'];
    $pricee = $_POST['price'];
    $desc = $_POST['desc'];
    $qty=$_POST['qty'];
    
    $file_name = $_FILES['file']['name']; 
    $file_size = $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $file_type = $_FILES['file']['type'];  
    
    
    
    $imgtype = strtolower(pathinfo($file_name,PATHINFO_EXTENSION));
    $target_file = "cust/" . $file_name;
    
   $path="./cust/$name";
     if (!is_dir($path)){
         mkdir($path,0777,TRUE);
         move_uploaded_file($file_tmp, $target_file);
   
        $sql="select * from myadmin where email='$email'";
                        $result= mysqli_query($conn, $sql);

                        $row= mysqli_fetch_assoc($result);
                        $id=$row['uid'];
                      
         $sql="insert into custproduct(uid,date,pname,price,qty,image,description,status,PStatus,DStatus) values($id,NOW(),'$name','$pricee','$qty','$target_file','$desc','Pending','Pending','Pending')";
         $result= mysqli_query($conn, $sql);
         if($result){
          echo "<script>alert('your Query send Scuccessfully! we will get back to you soon!! ')</script>";   
         }
     }
   }
  
   
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
 
 
