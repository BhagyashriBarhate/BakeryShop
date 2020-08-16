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


<div class="ps-order-form bg--parallax" data-background="images/bg/testimonials.jpg">
   
      <div class="ps-container">
       <!-- form tag strats-->
       <form class="ps-form--menu" action="#" method="post"  enctype="multipart/form-data">
          <div class="ps-section__header text-center">
            <h3 class="ps-section__title">Change Password</h3>
            <span><img src="images/icons/floral.png" alt=""></span>
          </div>
            <center>
                <div style="margin-bottom: 20px;">
        <i style='color:grey;' class="fas fa-user-circle fa-10x"></i>
    </div>
    </center>
         <?php 
           $email=$_SESSION['email'];
          
       
            $sql="select * from myadmin where email='$email'";
            //$id=$row[0];
            $fire1= mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($fire1);
           
           ?>
                   <div class="row">
               <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
               <div class="form-group">
                <label>Email</label>
                <input  type="email" class="form-control"  value="<?php echo $row[3]; ?>"  name="email" readonly=""></textarea>
              </div>
               </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
            <div class="form-group">
                <label>Old Password</label>
                <input  type="password" class="form-control"  placeholder="Enter Old Password "   name="OldPassword"></textarea>
              </div>
                
            </div>
           
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
               <div class="form-group">
                <label>New Password</label>
                <input  type="password" class="form-control"  placeholder="Enter New Password " pattern="(?=^.{8,}$)(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s)[0-9a-zA-Z!@#$%^&*()]*$" title="1 Upper Case ,1 Lower Case , 1 digit and 8 characters minimum"   name="NewPassword"></textarea>
              </div>
                
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                <div class="form-group">
                <label>Confirm Password</label>
                <input  type="password" class="form-control" pattern="(?=^.{8,}$)(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s)[0-9a-zA-Z!@#$%^&*()]*$" title="1 Upper Case ,1 Lower Case , 1 digit and 8 characters minimum"   placeholder="Enter Cpnfirm  Password "   name="ConfirmPassword"></textarea>
              </div>
                
            </div>
           
            
             
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
             
                <div class="form-group submit" style="margin-top: 20px;">
                <!--<button class="ps-btn ps-btn--yellow">Order Bakery Now</button>-->
                <input type="submit" name="submit" class="ps-btn ps-btn--yellow" value="Update Details">
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

