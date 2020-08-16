<?php

$connect = mysqli_connect("localhost", "root", "", "php");  
@$uid=$_GET['id'];

$delete="delete from myadmin where id='$uid'";
$del= mysqli_query($connect, $delete);

if ($del) {
    header("Location:viewCustomerDetails.php");
}
 else {
    echo mysqli_error($connect);
    //echo "<script>alert('error in single delete');</script>";
}

foreach($_POST['cb'] as $val)
{
    $sql="delete from myadmin where id='$val'";
    if(mysqli_query($connect, $sql))
    {
        
    }
    else
    {
        echo "error";
    }
}
echo "<script>location.href='viewCustomerDetails.php';</script>";
?>
