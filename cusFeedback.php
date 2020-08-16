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
        <title>View All customize order </title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link src="css1/bootstrap.min.css"></link>
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
        <style>


            .hetvi
            {
                width: 500px;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
            }
        </style>

        <!--input[type=date],select{
             width: 500px;
          padding: 12px 20px;
          margin: 8px 0;
          display: inline-block;
          border: 1px solid #ccc;
          border-radius: 4px;
          box-sizing: border-box;
        }
        input[type=number],select{
             width: 500px;
          padding: 12px 20px;
          margin: 8px 0;
          display: inline-block;
          border: 1px solid #ccc;
          border-radius: 4px;
          box-sizing: border-box;
        }
        input[type=submit] {
          width: 100%;
          background-color: #4CAF50;
          color: white;
          padding: 14px 20px;
          margin: 8px 0;
          border: none;
          border-radius: 4px;
          cursor: pointer;
        }
        
        input[type=submit]:hover {
          background-color: #45a049;
        }
                </style>
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
//include 'header.php';
?>
                    <!-- Header END -->

                    <!-- Side Panel START -->
                    <!-- Side Panel END -->

                    <!-- theme configurator START -->

                    <!-- theme configurator END -->

                    <!-- Theme Toggle Button START -->

                    <!-- Theme Toggle Button END -->

                    <!-- Content Wrapper START -->



                    <!--   <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-heading border bottom">
                                        <h4 class="card-title">Enter New Product</h4>
                                    </div>
                                    <div class="card-block">
                                        <div class="row">
                                            <div class="col-md-9 ml-auto mr-auto">
                                                <form class="form-horizontal mrg-top-40 pdd-right-30 ng-pristine ng-valid">
                                                    <div class="form-group row">
                    <!--<label for="form-1-1" class="col-md-1 control-label" >Name</label>

                    <div class="col-md-10">
                       <!-- <input type="text" class="form-control" id="form-1-1" placeholder="Name">
                      <input type="text" name="pname" placeholder="Enter Product Name" class="form-control">
                        Name:<input type="text" name="pname" placeholder="Enter Product Name">
                       
                    </div>
                </div>
                <div class="form-group row">
                    <label for="form-1-3" class="col-md-1 control-label">Email</label>
                    <div class="col-md-10">
                        <input type="email" class="form-control" id="form-1-3" placeholder="Email">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-1 control-label">Gender</label>
                    <div class="col-md-10">
                        <div class="radio radio-inline">
                            <input type="radio" checked="" name="radio1" id="rad1">
                            <label for="rad1">Male</label>
                        </div>
                        <div class="radio radio-inline">
                            <input type="radio" checked="" name="radio1" id="rad2">
                            <label for="rad2">Female</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="form-1-5" class="col-md-1 control-label">Textarea</label>
                    <div class="col-md-10">
                        <textarea class="form-control" rows="3" id="form-1-5"></textarea>
                        <div class="text-right mrg-top-15">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button class="btn btn-default">Clear</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
</div>
                    -->    
                    <!-- <form>
                         <br>
                         <br><br>
                         <table>
                             
                                 <tr>
                                     <div class="hetvi">
                                     <td>Product Name:</td>
                                     <td><input type="text" name="pname" placeholder="Enter new product"></td>
                                     </div>
                                 </tr>
                             
                         
                                
                                 <tr>
                                     
                                     <td><input type="submit" name="submit"></td>
                                 </tr>
                          
                         </table>
 
                     </form>
                 </div>-->

                
<?php
$conn = mysqli_connect("localhost", "root", "", "php");

$query = "select * from tbl_Feedback";
$result = mysqli_query($conn, $query);
echo "<form action='deleteAllCustomizedProduct.php' method='post'>";
?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-block" style="margin-top:100px;">

                                    <div style="margin-bottom:40px;"> <center><h2><b>:: View Feedback ::</h2></b></center></div>
    <center>
        <input type="text" id="searchTerm" style="margin-bottom:30px;width: 400px;height: 40px;border-color: violet;" onkeyup="doSearch()" placeholder="Search for emails..">
    </center>
                                    <div class="table-overflow">
                                        <table  id="dataTable" class="table table-bordered table-hover table-sm">
                                            <thead>
                                                <tr align="center" style="background-color: silver;height: 40px;">     
                                                 
                                                     
                                                     <th>Name</th>
                                                     <th>Email</th>
                                                   <th>Message</th>
                                                   
                                                    
                                                </tr>
                                            </thead>

<?php
while ($row = mysqli_fetch_array($result)) {
    $pcid = $row[0];

   

    echo "<tbody><tr align='center'><td height='50px;'>$row[1]</td><td>$row[2]</td></td><td>$row[3]</td>";
}

echo "</td></tr></tbody>";
echo "</table>";
echo "<input type='submit'  id='submit_prog' name='deleteAll' value='Delete All' class='btn btn-primary'></form>";
echo "</div >";
?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Wrapper END -->

                    <!-- Footer START -->
<?php
include 'footer.php';
?>
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


<!-- Mirrored from themenate.com/espire/html/dist/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Jan 2019 04:52:40 GMT -->
</html>

<script>
    $(document).ready(function() {

        var $submit = $("#submit_prog").hide(),
                $cbs = $('input[name="cb[]"]').click(function() {
            $submit.toggle($cbs.is(":checked"));
        });

    });
</script>