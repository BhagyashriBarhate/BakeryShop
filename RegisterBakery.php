<?php
ob_start();
 session_start();
?>
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
  
     $file_name = $_FILES['image']['name']; 
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type']; 
    
    $imgtype = strtolower(pathinfo($file_name,PATHINFO_EXTENSION));
    $target_file = "profiles/" . $file_name;
    
     $path="./profiles/$Name";
     if (!is_dir($path)){
         mkdir($path,0777,TRUE);
         move_uploaded_file($file_tmp, $path."/".$file_name);
         
     
         $sql = "INSERT INTO MyAdmin (name,password,email,contact,type,address,image)
VALUES ('$Name','$password','$email','$contact','$type','$address','$target_file')";
$result=mysqli_query($conn, $sql);
  

    
    

if($result)
{
    
   // header('Location:Login.php');
    {
    echo "<script>alert('Registered Successfully');</script>";}

  
//$Encpassword= md5($password);
}

//$_SESSION['password']=$Encpassword;
     
     
}
     
 else {
    echo  "<script>alert('Email id is already taken');</script>";
     }
     
  
} 

     
?>
<?php
ob_end_flush();
?> 

                