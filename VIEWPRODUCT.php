<?php
ob_start();
session_start();
if(!isset($_SESSION['password'])){
//    header("location:Login.php");
}
?>

<!DOCTYPE html>
<html>


    <!-- Mirrored from themenate.com/espire/html/dist/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Jan 2019 04:52:22 GMT -->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no">
        <title>View All The Product Available In The Shop</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link src="css1/bootstrap.min.css"></link>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
           <script>
      function doSearch() {
    var searchText = document.getElementById('searchTerm').value;
    var targetTable = document.getElementById('dataTable');
    var targetTableColCount;
            
    //Loop through table rows
    for (var rowIndex = 0; rowIndex < targetTable.rows.length; rowIndex++) {
        var rowData = '';

        //Get column count from header row
        if (rowIndex == 0) {
           targetTableColCount = targetTable.rows.item(rowIndex).cells.length;
           continue; //do not execute further code for header row.
        }
                
        //Process data rows. (rowIndex >= 1)
        for (var colIndex = 0; colIndex < targetTableColCount; colIndex++) {
            rowData += targetTable.rows.item(rowIndex).cells.item(colIndex).textContent;
        }

        //If search term is not found in row data
        //then hide the row, else show
        if (rowData.indexOf(searchText) == -1)
            targetTable.rows.item(rowIndex).style.display = 'none';
        else
            targetTable.rows.item(rowIndex).style.display = 'table-row';
    }
}
          </script>
        <!-- Favicon -->
        <?php
        include 'headerlink.php';
        ?>
    </head>

    <body>
        <div class="app">
            <div class="layout">
                <!-- Side Nav START -->
                <?php
                include 'navigation.php';
                ?>
                <!-- Side Nav END -->

                <!-- Page Container START -->
                <div class="page-container">
                    <!-- Header START -->
                    <?php
//                    include 'header.php';
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

                    <!-- Theme Toggle Button START -->
                    <!--                    <button class="theme-toggle btn btn-rounded btn-icon">
                                            <i class="ti-palette"></i>
                                        </button>-->
                    <!-- Theme Toggle Button END -->

                    <!-- Content Wrapper START -->

                    <?php
                    $conn = mysqli_connect("localhost", "root", "", "php");

                    $query = "select * from product";
                    $result = mysqli_query($conn, $query);

                    echo "<form action='deleteAll.php' method='post'>";

//SELECT tbl_product.pid,tbl_product.pname,tbl_category.cname,tbl_product.price,tbl_product.description FROM tbl_product INNER JOIN tbl_category ON tbl_product.pid=tbl_category.cid;
                    ?>
                    <div class="main-content">

                        <center><h3><b>:: View All Products ::</h3></b></center>
                                <center>
        <input type="text" id="searchTerm" style="margin-bottom:30px;width: 400px;height: 40px;border-color: violet;" onkeyup="doSearch()" placeholder="Search for emails..">
    </center> 
                        <table id="dataTable"  class="table table-bordered table-hover" style="background-color: white;margin-top: 70px; ">
                            <thead style="background-color:silver;" >
                                <tr align="center">
                                   
                                    <th scope="col">Product</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Flavour</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Image</th>
<!--                                    <th scope="col">Delete</th>-->

                                </tr>
                            </thead>
                            <?php
                            while ($row = mysqli_fetch_array($result)) {
                                $id = $row[0];

                                $image = $row[9];
                                echo "<tbody><tr align='center'>
                <td>$row[1]</td></td><td>$row[2]</td><td>$row[3]</td><td>$row[6]</td>"
                                . "<td>$row[8]</td> <td align='center'><img src='{$row[9]}' height='50px' width='50px'></td></a></td>"
                                . " </tr></tbody>";
                            }
                            ?>
                        </table>
                        <input type='submit' id='submit_prog'  name='submit' value='Delete All' class='btn btn-primary'></div>
                    </form>

                </div>
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
    <div class="container">


        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>


                    </div>
                    <div class="modal-body">
                        <center>
                            <form action="#" method="post" >
                                <h2><b>Apple for Leave </b></h2>

                                <table style="margin-top: 50px;">
                                    <tr>
                                        <td width="100px">Student Id</td>
                                        <td><input type="text" name="id" style="width: 240px;height: 40px; margin-bottom: 20px;"></td>
                                    </tr>
                                    <tr>
                                        <td width="100px">From Date:</td>
                                        <td><input type="date" name="from" style="width: 240px;height: 40px; margin-bottom: 20px;"></td>
                                    </tr>
                                    <tr>
                                        <td>To Date:</td>
                                        <td><input type="date" name="to" style="width: 240px;height: 40px; margin-bottom: 20px;"></td>
                                    </tr>
                                    <tr>
                                        <td>Reason:</td>
                                        <td><textarea name="reason" rows="3" cols="32" style="margin-bottom: 20px;"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td><input type="submit" name="submit" value="Request" style="width: 90px;height:40px;color:white;background-color: black;" class="btn btn-primary"></td>
                                        <td><input type="submit" name="clear" value="clear" style="width: 90px;height: 40px;color: white;background-color: black;" ></td>
                                    </tr>
                                </table>
                            </form>
                        </center>
                    </div>

                </div>

            </div>
        </div>

    </div>


</body>

</html>
<!-- script for delete button-->
<script>
    $(document).ready(function() {

        var $submit = $("#submit_prog").hide(),
                $cbs = $('input[name="cb[]"]').click(function() {
            $submit.toggle($cbs.is(":checked"));
        });

    });
</script>


