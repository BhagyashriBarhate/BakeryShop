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
        <meta charset="UTF-8">
        <title></title>
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
    <style>
        body{
/*            background-color: aliceblue;*/
        }
        </style>
    </head>
    <body>
        
        <div class="container" style="border: 2px solid black;width: 900px;margin-top: 40px;" >
        <div class="ps-container"><a class="ps-logo"><img style="height: 130px;width:130px;" src="images/Yummy.png" alt=""></a></div>
        <div style="float: right;margin-top:-130px;margin-right: 100px; "> 
            <table>
                 <tr>
                    <td>
                        <h3 ><b style="font-family:comic ;">INVOICE</b></h3>
                    </td>
                    
                </tr>
                <tr>
                    <td>
                        <h3><b>Thank You for your Order!!!</b></h3>
                    </td>
                    
                </tr>
                <tr>
                    <td>
                        <p><b>460,4th floor, Adajan</b></p>
                    </td>
                   
                    
                </tr>
                <tr>
                    <td>
                        <b> Phone:  &nbsp; 804-399-3580</b>
                    </td>
                    <td>
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        <b> Email:  &nbsp; YummyBakerySales@gmail.com</b>
                    </td>
              </tr>
             
            </table>
        </div>
          <?php
                include './conn.php';
                  echo "<form action='#' method='post'>";
                  $email=$_SESSION['email'];
                   
                  
                      $sql="select * from myadmin where email='$email'";
                        $result= mysqli_query($conn, $sql);

                        $row= mysqli_fetch_assoc($result);
                        $id=$row['uid'];
                        
                                
         ?>
        
        <div style="margin-top: 90px;margin-left: 10px;width: 1000px; ">
            <p> <b> Sold to:  </b>  <?php echo $row['name']; ?> </p>
              <p><b>Bill Address:  </b> <?php echo $row['address']; ?></p>

        </div>
        
         
        <div style="margin-top: 50px;">
             <table class="table ps-table ">
              <thead>
                  <tr><th>Product  </th><th>Price</th><th>Quantity</th><th>Total</th> </tr></thead>
                 <?php
                    include './conn.php';
                
//                $sql="SELECT product.pname,product.price,product.image,tbl_order.oid,tbl_order.billid,tbl_order.TotalAmt,tbl_order.qty,tbl_order.Date
//                    FROM product
//                    INNER JOIN tbl_order
//                    ON product.id=tbl_order.pid where tbl_order.oid=$id";
//                 
                    
                     $sql="SELECT product.image,product.price,product.pname,tbl_cart.total,tbl_cart.qty,tbl_cart.id,tbl_cart.pid
                    FROM product
                    INNER JOIN tbl_cart
                    ON product.id=tbl_cart.pid where tbl_cart.uid=$id ";
                    
                     
                     
                     
                    $result= mysqli_query($conn, $sql);
                    
                 
                    $oldTotal=0; 
                     $totalFinal=0;
                     $discount=0;
                     $final=0;
                    while ($row = mysqli_fetch_array($result)) {
                     $price=$row['price'];
                       $qty=$row['qty'];
                       $cart_id=$row['id'];
                      $pid=$row['pid'];
                      
                     $subTotal=$qty * $price ;
                         
                         $final=$final+$subTotal;
                         
                          $oldTotal=$oldTotal+$subTotal;
                          
                       $discount=$subTotal*10/100;
                        $totalFinal=$totalFinal+$subTotal-$discount;
                      
                     ?>

                      
              <tr><thead>
                   <td><a class="ps-product--table"><?php echo "<img src='{$row['image']}' height='70px' width='70px'>" ?>  <?php echo $row['pname'] ;?></a></td>

                    <td><?php echo $row['price']; ?></td>

                       <td><?php echo $row['qty']; ?> </td>
          
                      <td><?php echo $subTotal; ?> </td>   
                      
                     <?php
                    }
                    
                 ?>
                   
             </tr>
             
             </tbody>
                </table>
            <hr>
              
                <div>
                           <h3 class="ps-product__price"><del><span>Rs.  </span><?php echo $final;  ?> /-</del></h3>
                         <h5  style="color:black;">( 10% Discount )</h5>
                         <h4 style="color:black;"><b>TOTAL PRICE  :  <?php echo $totalFinal;?>  Rs/-</b></h4>
            </div>
            <hr>
            <p><b>Order Id:  </b> <?php echo $id; ?></p>
        </div>
          
    </body>
    
</html>

<form method="post" ><center>
        <input type="submit"  name="dow"  class="ps-btn ps-btn--gray" style="color: black; "value="Download Bill" onclick="p()">

                       
                    </center>
                   
             <script>
             function p(){
                window.print();
            }
        </script>
            
        </form>

<?php

if(isset($_POST['dow'])){
       $sql="delete from tbl_cart where uid='$id'";
       $result= mysqli_query($conn, $sql);
                 
}
?>

