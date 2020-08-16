<?php

$connect = mysqli_connect("localhost", "root", "", "php");  
@$pcid=$_GET['pcid'];

$delete="delete from custProduct where pcid='$pcid'";
$del= mysqli_query($connect, $delete);

if ($del) {
    header("Location:viewCustmized.php");
}
 else {
    echo mysqli_error($connect);
    //echo "<script>alert('error in single delete');</script>";
}

if(isset($_POST['deleteAll'])){
foreach($_POST['cb'] as $val)
{
    $sql="delete from custProduct where pcid='$val'";
    if(mysqli_query($connect, $sql))
    {
          header("Location:viewCustmized.php");
    }
    else
    {
        echo "error";
    }
}
}
echo "<script>location.href='viewCustmized.php';</script>";
?>
