<?php
$conn = new mysqli("localhost", "root", "","php" );
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if(isset($_POST['submit']))
{

$Name=$_POST['name'];
$password=$_POST['Password'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$type="Customer";
$address=$_POST['address'];
$Encpassword= md5($password);

   
     
$sql = "INSERT INTO MyAdmin (name,password,email,contact,type,address)
VALUES ('$Name','$Encpassword','$email','$contact','$type','$address')";
$result=mysqli_query($conn, $sql);


if($result)
{
    
    echo "<script>alert('Registered Successfully');</script>";
    
 }



     
 else {
    echo  "<script>alert('Email id is already taken');</script>";
     }
   
}  


     
?>