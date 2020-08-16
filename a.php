<?php
ob_start();
session_start();
if(!isset($_SESSION['password'])){
    header("location:Login.php");
}
?>
<!DOCTYPE html>
<html>


<!-- Mirrored from themenate.com/espire/html/dist/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Jan 2019 04:52:22 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <title>Admin</title>
    <style>
        .col-md-3{
            margin-right: 20px;
        }
    </style>
    <?php
        include './headerlink.php';
    ?>
</head>

<body>
    <div class="app">
        <div class="layout">
            <!-- Side Nav START -->
                <?php
                    include './navigation.php';
                ?>
            <!-- Side Nav END -->

            <!-- Page Container START -->
            <div class="page-container">
                <!-- Header START -->
                <?php
//                    include './header.php';
                ?>
                <!-- Header END -->

                <!-- Side Panel START -->
                <!-- Side Panel END -->

                <!-- theme configurator START -->
                <div class="theme-configurator">
                    <div class="configurator-wrapper">
                        <div class="config-header">
                            <h4 class="config-title">Config Panel</h4>
                            <button class="config-close">
                                <i class="ti-close"></i>
                            </button>
                        </div>
                        <div class="config-body">
                            <div class="mrg-btm-30">
                                <p class="lead font-weight-normal">Header Color</p>
                                <div class="theme-colors header-default">
                                    <input type="radio" id="header-default" name="theme">
                                    <label for="header-default"></label>
                                </div>
                                <div class="theme-colors header-primary">
                                    <input type="radio" class="primary" id="header-primary" name="theme">
                                    <label for="header-primary"></label>
                                </div>
                                <div class="theme-colors header-info">
                                    <input type="radio" id="header-info" name="theme">
                                    <label for="header-info"></label>
                                </div>
                                <div class="theme-colors header-success">
                                    <input type="radio" id="header-success" name="theme">
                                    <label for="header-success"></label>
                                </div>
                                <div class="theme-colors header-danger">
                                    <input type="radio" id="header-danger" name="theme">
                                    <label for="header-danger"></label>
                                </div>
                                <div class="theme-colors header-dark">
                                    <input type="radio" id="header-dark" name="theme">
                                    <label for="header-dark"></label>
                                </div>
                            </div>
                            <div class="mrg-btm-30">
                                <p class="lead font-weight-normal">Sidebar Color</p>
                                <div class="theme-colors sidenav-default">
                                    <input type="radio" id="sidenav-default" name="sidenav">
                                    <label for="sidenav-default"></label>
                                </div>
                                <div class="theme-colors side-nav-dark">
                                    <input type="radio" id="side-nav-dark" name="sidenav">
                                    <label for="side-nav-dark"></label>
                                </div>
                            </div>
                            <div class="mrg-btm-30">
                                <p class="lead font-weight-normal no-mrg-btm">RTL</p>
                                <div class="toggle-checkbox checkbox-inline toggle-sm mrg-top-10">
                                    <input type="checkbox" name="rtl-toogle" id="rtl-toogle">
                                    <label for="rtl-toogle"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- theme configurator END -->

                    
                
                
                
                 <!-- theme configurator END -->

                <!-- Theme Toggle Button START -->
             
                <!-- Theme Toggle Button END -->

                <!-- Content Wrapper START -->
<?php
$connect = mysqli_connect("localhost", "root", "", "php");  

$customer="select count(oid) from tbl_order";
$result= mysqli_query($connect, $customer);
$row = mysqli_fetch_array($result);
$totalcustomer=$row[0];

$product="select count(id) from product";
$result1= mysqli_query($connect, $product);
$row1= mysqli_fetch_array($result1);
$totalproduct=$row1[0];

$product="select count(uid) from myadmin";
$result1= mysqli_query($connect, $product);
$row1= mysqli_fetch_array($result1);
$cus=$row1[0];



?>
                
                <div class="container">
    <div class="container-fluid">
  
  
  <div class="row">
        <div class="col-md-4">
            <div style="margin-top: 100px;">
                <div class="card">
                    <div class="card-body">
                  <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="glyphicon glyphicon-user"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Total Orders :: <?php echo "<b>$totalcustomer</b>" ?></div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       <div class="col-md-4">
            <div style="margin-top: 100px;">
                <div class="card">
                    <div class="card-body">
                  <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="glyphicon glyphicon-eye-open"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Total Visitors :: <?php echo "<b>$cus;</b>" ?></div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 <div class="col-md-4">
            <div style="margin-top: 100px;">
                <div class="card">
                    <div class="card-body">
                  <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="fas fa-box-open"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Available Products:: <?php echo "<b>$totalproduct</b>" ?></div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
       
    
                      </div>
                </div>
 <?php
 $connect = mysqli_connect("localhost", "root", "", "php");  
echo "<center>";
$emamilid="select Date from tbl_order";
$fire= mysqli_query($connect, $emamilid);
echo "<br>";

echo "<form action='#' method='post'>";    
echo "Select Date :";
echo "<br><br><select name='date' style='width:300px; height:30px;margin-right:10px'>";
while ($row = mysqli_fetch_array($fire)) {
    echo "<option value='$row[0]'>$row[0]</option>";
}
echo "</select>";
echo "<input type='submit' value='search' name='user'><br><br>";
echo "</form>";
if(isset($_POST['user'])){
    
    $e=$_POST['date'];
    $sql="select * from tbl_order where Date='$e'";
    $fire1= mysqli_query($connect, $sql);
//    $row = mysqli_fetch_array($fire1);
    
        
    
?>
                    <table class="table table-bordered">
                        <tr style="background-color:gainsboro;">
                            <th>Order Id</th><th>Bill Id</th><th>Total Amt</th><th>Date</th><th>User Id</th><th>Product Id</th><th>Quantity</th><th>Status</th><th>Delivery Status</th>
                            
                        </tr>
                        <?php while ($row= mysqli_fetch_array($fire1)) { ?>
                        <tr>
                            <td><?php echo $row[0]; ?></td>
                            <td><?php echo $row[1]; ?></td>
                            <td><?php echo $row[2]; ?></td>
                            <td><?php echo $row[3]; ?></td>
                            <td><?php echo $row[4]; ?></td>
                            <td><?php echo $row[5]; ?></td>
                            <td><?php echo $row[6]; ?></td>
                            <td><?php echo $row[7]; ?></td>
                              <td><?php echo $row[8]; ?></td>
                        </tr>
                        <?php
                        }
                    ?>
                    </table>
                    

 <?php
}

 ?>


<?php
 $connect = mysqli_connect("localhost", "root", "", "php");  
$emamilid1="select Date from tbl_order";
$fire2= mysqli_query($connect, $emamilid1);
echo "<br>";

echo "<form action='#' method='post'>";    
echo "Date Wise Total Amount :";
echo "<br><br><select name='date1' style='width:300px; height:30px;margin-right:10px'>";
while ($row = mysqli_fetch_array($fire2)) {
    echo "<option value='$row[0]'>$row[0]</option>";
}
echo "</select>";
echo "<input type='submit' value='search' name='date'><br><br>";
echo "</form>";
if(isset($_POST['date'])){
    
    $e1=$_POST['date1'];
    $sql1="SELECT SUM(TotalAmt) FROM `tbl_order` WHERE Date='$e1'";
    $fire2= mysqli_query($connect, $sql1);
    $row1 = mysqli_fetch_array($fire2);
    
?>      
                    
                    <table class="table table-bordered" style='width:200px;'>
                      
                        <tr>
                            
                            <td><b>Total Amount:<?php echo $row1[0]; ?></b></td>
                           
                        </tr>
                    </table>

 <?php
}
 ?>


                    
<?php
// $connect = mysqli_connect("localhost", "root", "", "php");  
//echo "<center>";
//
//$emamilid3="select MONTH(Date) from tbl_order";
//$fire= mysqli_query($connect, $emamilid3);
//echo "<br>";
//
//echo "<form action='#' method='post'>";    
//echo "Month Wise Total Amount :";
//echo "<br><br><select name='date3' style='width:300px; height:30px;margin-right:10px'>";
//while ($row = mysqli_fetch_array($fire)) {
//    echo "<option value='$row[0]'>$row[0]</option>";
//}
//echo "</select>";
//echo "<input type='submit' value='search' name='month'><br><br>";
//echo "</form>";
//if(isset($_POST['month'])){
//    
//    $e2=$_POST['date3'];
//    $sql2="SELECT sum(TotalAmt) FROM `tbl_order` WHERE MONTH(DATE)='$e2'";
//   
//    $fire3= mysqli_query($connect, $sql2);
//    $row2 = mysqli_fetch_array($fire3);
//    
?>
<!--                    <table class="table table-bordered" style='width:200px;'>
                      
                        <tr>
                            
                            <td><b>Total Amount:<?php echo $row2[0]; ?></b></td>
                           
                        </tr>
                    </table>-->

 <?php
//}
 ?>

                                        
<?php
 $connect = mysqli_connect("localhost", "root", "", "php");  

$emamilid4="select YEAR(Date) from tbl_order";
$fire= mysqli_query($connect, $emamilid4);
echo "<br>";

echo "<form action='#' method='post'>";    
echo "Year Wise Total Amount :";
echo "<br><br><select name='date4' style='width:300px; height:30px;margin-right:10px'>";
while ($row = mysqli_fetch_array($fire)) {
    echo "<option value='$row[0]'>$row[0]</option>";
}
echo "</select>";
echo "<input type='submit' value='search' name='year'><br><br>";
echo "</form>";
if(isset($_POST['year'])){
    
    $e3=$_POST['date4'];
    $sql3="SELECT sum(TotalAmt) FROM `tbl_order` WHERE YEAR(DATE)='$e3'";
   
    $fire4= mysqli_query($connect, $sql3);
    $row2 = mysqli_fetch_array($fire4);
    
?>
                    <table class="table table-bordered" style='width:200px;'>
                      
                        <tr>
                            
                            <td><b>Total Amount:<?php echo $row2[0]; ?></b></td>
                           
                        </tr>
                    </table>

 <?php
}
echo "</center>";

 ?>

                    
                <!-- Theme Toggle Button START -->
                
                
                
                
                <!-- Theme Toggle Button END -->

                <!-- Footer START -->
               
                <!-- Footer END -->

            </div>
            <!-- Page Container END -->

        </div>
    </div>

    <script src="assets/js/vendor.js"></script>

    <!-- page plugins js -->
    <script src="assets/vendors/bower-jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="assets/js/maps/jquery-jvectormap-us-aea.js"></script>
    <script src="assets/vendors/d3/d3.min.js"></script>
    <script src="assets/vendors/nvd3/build/nv.d3.min.js"></script>
    <script src="assets/vendors/jquery.sparkline/index.js"></script>
    <script src="assets/vendors/chart.js/dist/Chart.min.js"></script>

    <script src="assets/js/app.min.js"></script>

    <!-- page js -->
    <script src="assets/js/dashboard/dashboard.js"></script>

</body>