<?php
ob_start();
session_start();


?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
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
    <style>
    body{
        background-color: lightgoldenrodyellow;
    }
    </style>
  </head>
    </head>
    
    
    <body>
        <div class="ps-container" >
       <!-- form tag strats-->
       <div>
       <center>
           <form style="height: 300px;width:900px;margin-top: 120px;"  action="ForgetPasswordCode.php" method="post" >
         <div style="border: 1px solid black;background-color: white;">
           <div class="ps-section__header text-center">
              
               <h3 style="margin-top: 10px;" class="ps-section__title">Forget Password</h3>
            <p>Secure Your Account</p><span><img src="images/icons/floral.png" alt=""></span>
          </div>
           
          <div class="row">
              
               <div class="col-lg-8 col-md-6 col-sm-12 col-xs-12 ">
               <div class="form-group">
                <label style="margin-left: -100px;">Email Name</label>
                <input style="margin-left: 150px;width: 600px;" name="email" type="email" class="form-control" required="" placeholder="Enter Email"></textarea>
              </div>
               </div>
            
          
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
              
              <div class="form-group submit">
               
                <input  style="margin-top: 50px;" type="submit" name="submitProduct" class="ps-btn ps-btn--yellow" value="Submit">
              </div>
            </div>
          </div>
           </div>
         
        </form>
       </center>
       </div>
   </div>
    </div>
   
         
    
      </div>
    </div>
 
   
  </body>

</html>
