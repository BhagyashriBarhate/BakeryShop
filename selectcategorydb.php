<?php

ob_start();
session_start();


$conn = mysqli_connect("localhost", "root", "", "php");

if (isset($_POST['go'])) {
    $_SESSION['cname'] = $_POST['category'];
   // echo $_SESSION['cname'];

    if ($_POST['category'] == "10") {
        header("Location:NewaddCake.php");
    } else {
        header("Location:NewaddPastry.php");
    }
}


/* if (isset($_POST['go'])) {
  if ($_POST['category'] == "1") {
  header("Location:NewaddCake.php");
  } else {
  header("Location:NewAddProduct.php");
  }
  } */
?>
