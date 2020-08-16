<?php
ob_start();
session_start();
include './conn.php';

if(isset($_POST['login'])){

    $email=$_POST['email'];
    $password=$_POST['password'];
    
    $sql="select * from myadmin where email='$email' and password='$password'";
    
    $_SESSION['email']=$email;
    $_SESSION['id']=$id;
    $_SESSION['password']=$password;
    $result= mysqli_query($conn, $sql);
    $row= mysqli_fetch_array($result);
    
    if($row){
      header("location:homepage.php");
       // echo 'login admin';
    }
    
    else{
        echo "<script>alert('Invalid Username Or Password')</script>";
    }
    
  $sql1="select * from user where email='$email' and password='$password'";
    
    $result1= mysqli_query($conn, $sql1);
    $row1= mysqli_fetch_array($result1);
    
    if($row1){
         header("location:a.php");
        echo 'login user';
        }
   
}
?>