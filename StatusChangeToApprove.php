<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
         $connect = mysqli_connect("localhost", "root", "", "php");  

            $updateid=$_GET['pcid'];
            $updateQuery1="update custProduct set status='Approved' where pcid='$updateid'";
            $result1= mysqli_query($connect, $updateQuery1);
            if($result1)
            {
                //echo "<script>alert('Value Deleted';</script>";
                header("location:viewCustmized.php");
            }
            else
            {
               // echo "<script>alert('Value Not Deleted';</script>";
                header("location:viewCustmized.php");
            }
            
            
            
            $updateQuery2="update custProduct set Pstatus='Done' where pcid='$updateid'";
            $result2= mysqli_query($connect, $updateQuery2);
            if($result2)
            {
                //echo "<script>alert('Value Deleted';</script>";
                header("location:viewCustmized.php");
            }
            else
            {
               // echo "<script>alert('Value Not Deleted';</script>";
                header("location:viewCustmized.php");
            }
        ?>
    </body>
</html>
