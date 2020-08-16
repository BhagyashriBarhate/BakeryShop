<?php
ob_start();
session_start();

$conn = mysqli_connect("localhost", "root", "", "php");  

                  $email=$_SESSION['email'];

                      $sql="select * from myadmin where email='$email'";
                        $result= mysqli_query($conn, $sql);

                        $row= mysqli_fetch_assoc($result);
                        $id=$row['uid'];
                           

                  $show="select count(id) from tbl_cart where uid=$id";
                        $showCart= mysqli_query($conn, $show);
                        $rowCart = mysqli_fetch_array($showCart);
                        $totalproduct=$rowCart[0];


                        
@$cid=$_GET['cid'];
$delete="delete from tbl_cart where id='$cid'";
$del= mysqli_query($conn, $delete);

if($del){
    if($totalproduct >= 0){
        header("location:Cart.php");
    }
    else{
        header("location:EmptyCart.php");

    }
    
        
}

?>
