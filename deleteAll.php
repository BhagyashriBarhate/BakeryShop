<?php
ob_start();
session_start();
$cid=$_SESSION['cname'];
//$pid=$_SESSION['pid']=$_POST[''];
$connect = mysqli_connect("localhost", "root", "", "php");  
@$uid=$_GET['id'];


$delete1="delete from product where id='$uid'";
$del1=  mysqli_query($connect, $delete1);
if($del1)
{
              header("Location:viewCake.php");

}


foreach($_POST['cb'] as $val)
{
    $sql="delete from product where id='$val'";
    if(mysqli_query($connect, $sql))
    {
          header("Location:viewCake.php");
    }
    else
    {
        echo "error";
    }
}
echo "<script>location.href='viewCake.php';</script>";
?>
