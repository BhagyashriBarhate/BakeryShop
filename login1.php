<?php
ob_start();
session_start();
include './conn.php';

if(isset($_POST['login'])){

    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql="select * from myadmin where email='$email' and password='$password'";
    
    $_SESSION['email']=$email;
    $_SESSION['password']=$password;
    $result= mysqli_query($conn, $sql);
    $row= mysqli_fetch_array($result);
    
    if($row){
          $userid=$row["email"];
         $_SESSION['is_login']=TRUE;
          $_SESSION['email']=$userid;
          
          echo "<input type='hidden' name='hidden_email' value='$userid'>";
          $_SESSION['password']=$Password;
      header("location:homepage.php");
      //  echo 'login admin';
    }
 else {
   // echo "<script>alert('Invalid username or password')</script>";    
      header("location:Login.php");
    }
    
     $sql1="select * from user where email='$email' and password='$password'";
    
    $result1= mysqli_query($conn, $sql1);
    $row1= mysqli_fetch_array($result1);    
    if($row1){
          $userid=$row["email"];
         $_SESSION['is_login']=TRUE;
          $_SESSION['email']=$userid;
          $_SESSION['password']=$Password;
         header("location:a.php");
        //echo 'login user';
        }
   
}
?>