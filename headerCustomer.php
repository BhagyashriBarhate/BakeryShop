<?php
ob_start();
session_start();
?>

<header class="header header--3" data-sticky="false">
      <div class="header__top">
        <div class="ps-container">
          <div class="left">
                        <p>460,4th floor, Adajan   -  Hotline: 960-171-2735 - 804-399-3580</p>
          </div>
          <div class="right">
            <div class="btn-group ps-dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
              
            </div>
            <div class="btn-group ps-dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
           
            </div>
            <ul class="ps-list--social">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
       <nav class="navigation">
        <div class="ps-container"><a class="ps-logo" href="homepage-3.html"><img src="images/Yummy.png" alt=""></a>

          <ul class="menu">
             <?php
                 include './conn.php';
        $sql1="select * from tbl_category ";
                $result1= mysqli_query($conn, $sql1);
                
               ?>
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
             <li class="menu-item"><a href="homepage.php">Homepage</a></li>
              
             <li class="menu-item"><a href="custProduct.php">CUSTOMIZE ORDER</a></li>
              <li><a href="AboutUs.php">About</a></li>
               <li><a href="Cake.php?category_id=1" >OUR PRODUCT</a></li>
              <li><a href="ContactUs.php">Contact Us</a></li>
              <li class="current-menu-item menu-item-has-children"><a href="#">My ACCOUNT</a><span class="sub-toggle"><i class="fa fa-angle-down"></i></span>
              <ul class="sub-menu">
                  <li><a href="Profile.php">MY PROFILE</a></li>
                  <li><a href="viewOrdersCustomer.php">ORDERS HISTORY</a></li>
                <li><a href="viewCtomizeProductCustomer.php">CUSTOMIZE ORDERS</a></li>
                <?php
                if($totalproduct>0){
                ?>
                <li><a href="Cart.php">CART   ( <?php echo $totalproduct; ?> )</a></li>
                <?php
                }
                
                else{?>
                <li><a href="EmptyCart.php">Cart (0)</a></li>
                <?php
                }
                ?>
                <li><a href="ChangePassowrd.php">CHANGE PASSWORD</a></li>
                <li><a href="viewFeedbackCustomer.php">CUSTOMER FEEDBACK</a></li>

                <li><a href="Logout.php">LOGOUT</a></li>
                
              </ul>
            </li>
          </ul>
          
        </div>
      </nav>
    </header>


