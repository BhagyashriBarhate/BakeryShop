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

<?php

       $conn = new mysqli("localhost", "root", "","php" );
      
           $email=$_POST['email'];
           $_SESSION['email']=$email;

           $subject="Secure Your Account!";
           $otp=(rand(1, 100000));
           $txt="your one time password is:" .$otp;
            $_SESSION['otp']=$otp;
            $headers="MIME-Version:1.0". "\r\n";
            $headers.="Content-type:text/html;charset=UTF-8"."\r\n";
            $headers="From :016mscit102@gmail.com"."\r\n";

            if(mail($email, $subject, $txt,$headers))
            {
                header("location:otpVerify.php");
            }
            else
            {
                echo 'error';
            }
       
        


?>