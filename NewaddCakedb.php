<?php
ob_start();
session_start();
    
  $conn=mysqli_connect("localhost","root","","php");
  if(!$conn)
  {
  echo 'not connected';
  }
  
  if(isset($_POST['addProduct'])){
    
    $name = $_POST['pname'];
    $flavour = $_POST['flavour'];
    $pricee = $_POST['price'];
    $desc = $_POST['description'];
    $shape=$_POST['shape'];
    $weight=$_POST['weight'];
   $level=$_POST['level'];
   $time=$_POST['time'];
   $cid=10;
   
   
    $file_name = $_FILES['file']['name']; 
    $file_size = $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $file_type = $_FILES['file']['type'];  
    
    
    
    $imgtype = strtolower(pathinfo($file_name,PATHINFO_EXTENSION));
    $target_file = "product/" . $file_name;
    
   $path="./product/$name";
     if (!is_dir($path)){
         mkdir($path,0777,TRUE);
         move_uploaded_file($file_tmp, $target_file);
   
        
         $query = "select * from tbl_category where cid=$cid;"; 
      $sql="INSERT INTO product (pname,cid,price,shape,min_weight,flavour,level,description,image,minTimeToMake)"
              . " VALUES('$name','$cid','$pricee','$shape','$weight','$flavour','$level','$desc','$target_file','$time')";
      $result=mysqli_query($conn,$sql);
      if($result)
      {
          echo "<script>alert('Record added successfully!!!!')</script>";
      }
   
     }
           
   
   
   
   
  }


?>
