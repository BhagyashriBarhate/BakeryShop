<?php
$conn= mysqli_connect("localhost","root","","php");
$category = $_POST['catname'];

if (isset($_POST['addcategory'])) {
    $addcategory = "insert into tbl_category(cname) values('$category');";
    $result= mysqli_query($conn, $addcategory);
    
    if($result)
    {
        echo 'category added';
      // header("insertCategory.php");
    }
 else {
     echo "not added";
    }
   
}
?>
