<?php

include './conn.php';

$id=$_GET['id'];
$sql="delete from product where id='$id'";
$result= mysqli_query($conn, $sql);

if($result){
    header("location:viewPastry.php");
    
}
?>