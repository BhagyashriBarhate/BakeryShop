<?php

$connect = mysqli_connect("localhost", "root", "", "php");  

@$pcid=$_GET['pcid'];
echo $cid;
$delete="delete from custproduct where pcid='$pcid'";
$del= mysqli_query($connect, $delete);

if ($del) {
    header("Location:viewCtomizeProductCustomer.php");
}




?>
