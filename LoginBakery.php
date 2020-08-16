<?php
ob_start();
 session_start();
 

 
if(isset($_POST['login']))
 {
    $conn = new mysqli("localhost", "root", "","php" );

     $username=$_POST['email'];
     $password=$_POST['password'];
     
     
     $user="select * from myadmin where email='$username' and password='$password'";
     $user_result= mysqli_query($conn,$user);
     
     if(mysqli_num_rows($user_result)==1)
     {
         $_SESSION['username']=$username;
         $_SESSION['password']=$password;
        
     }
    else {
         echo "invalid";
     }
 }
?>


<?php

$conn = new mysqli("localhost", "root", "","php" );
$Email=$_POST['email'];
$Password=$_POST['password'];
$type='Customer';

$sql="select * from myadmin where email='".$Email."' and password='".$Password."' ";
$result= mysqli_query($conn, $sql);

if($result)
{
    if($row= mysqli_fetch_assoc($result))
    {
        
        $userid=$row["email"];
         $_SESSION['is_login']=TRUE;
          $_SESSION['email']=$userid;
          $_SESSION['password']=$Password;
         

        header('Location:homepage.php');
        
    }
    else {
         echo "<script>alert('invalid username or password');</script>";
         
      ?>  
      
      <?php
        header('location:Login.php');
    
    }
            
 }
 
$sql1="select * from user where email='".$Email."' and password='".$Password."' ";

$result1= mysqli_query($conn, $sql1);

if($result1)
{
    if($row= mysqli_fetch_assoc($result1))
    {        
        header('Location:a.php');
    }
     else {
       //  echo "<script>alert('invalid username or password');</script>";
          header('location:Login.php');
     }
 }
 else {
   echo "error in connection";
}

?>
<!--<input type="hidden" name="name" value="$_SESSION['email']=$userid;">-->







<?php
ob_end_flush();
?>  