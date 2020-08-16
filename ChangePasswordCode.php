<?php
ob_start();
session_start();

$conn = new mysqli("localhost", "root", "","php" );
 
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