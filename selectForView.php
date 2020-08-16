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
    <title>Select Category And View The Product</title>

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
                    
                   
                    <!-- Theme Toggle Button START -->
                    
                    <!-- Theme Toggle Button END -->
                      <div class="card-block">
                        <div class="row">
                            <div class="col-md-9 ml-auto mr-auto">
                                <br>
                                <br>
                                <!--<fieldset style="border: 1px solid black;background-color: pink;">-->
                         
                                
                                
                                
                                <form name="formType" id="formType" class="form-horizontal mrg-top-40 pdd-right-30 ng-pristine ng-valid " style="margin-top: 20px;" enctype="multipart/form-data" method="post" action="selectForViewdb.php">
                                    <center>  <h1><b>:: Select Category ::</b></h1> </center>
                                    

                                    <div class="form-group row">
                                        <label for="form-1-4" class="col-md-2 control-label" >Category:</label>
                                        <div class="col-md-10">
                                           <!-- <input type="text" class="form-control" id="form-1-1" placeholder="Name">-->



                                            <select name="category" class="form-control">

                                                 
                                                    <?php
                                                  $conn= mysqli_connect("localhost","root","","php");
                                                  $sel="select * from tbl_category;";
                                                  $result1 = mysqli_query($conn,$sel);
                                                    while ($row= mysqli_fetch_array($result1))
                                                    {
                                                    ?>
                                                    <option value="<?php echo $row['cid'] ?>"><?php echo $row['cname'] ?></option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>

                                        </div>
                                    </div>
                                    <center>
                                                <button type="submit" class="btn btn-primary" name="go">GO</button>
                                               
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                </form>

       



        <!-- Content Wrapper END -->

        <!-- Footer START -->
      
        <!-- Footer END -->

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

</body>


</html>
