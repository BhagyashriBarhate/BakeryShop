<?php
ob_start();
session_start();

$conn = mysqli_connect("localhost", "root", "", "php");

if (isset($_POST['go'])) 
   /* {
    if ($_POST['category'] == "Pastry") {
        header("Location:viewPastry.php");
    } elseif ($_POST['category'] == "Cake") {
        header("Location:viewCake.php");
    } elseif ($_POST['category'] == "CupCake") {
        header("Location:NewAddCupcake.php");
    } elseif ($_POST['category'] == "Chocolate") {
        header("Location:NewAddChocolate.php");
    } elseif ($_POST['category'] == "Cookie") {
        header("Location:NewAddCookie.php");
    } elseif ($_POST['category'] == "Combo") {
        header("Location:NewAddCombo.php");
    }
}*/
    


 {
    $_SESSION['cname'] = $_POST['category'];
   // echo $_SESSION['cname'];

    if ($_POST['category'] == "10") {
        header("Location:viewCake.php");
    } else {
        header("Location:ViewProductCategory.php");
    }
}


?>
