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
        <title>View Only Cake Item</title>

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
                                                $conn = mysqli_connect("localhost", "root", "", "php");
                                                $sel = "select * from tbl_category;";
                                                $result1 = mysqli_query($conn, $sel);
                                                $cid = $row[2];
                                                while ($row = mysqli_fetch_array($result1)) {
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
<?php
//echo "<a href='selectcategory.php?id=$id'>Goo</a>";
?>
                                    </center>
                            </div>
                        </div>
                    </div>
                    </form>

                    <div class="card-block">
                        <div class="row">
                            <div>
                                <br>
                                <br>
                                <div style="margin-top:-150px;">

<?php
ob_start();

$conn = mysqli_connect("localhost", "root", "", "php");

$query = "select * from product where cid=10";
//SELECT product.image,product.price,product.pname,tbl_category.cname FROM product INNER JOIN tbl_category ON product.cid=tbl_category.cid

$result = mysqli_query($conn, $query);

echo "<form action='deleteAll.php' method='post'>";
?>
                                    <div class="main-content">

                                        <center><h3><b>:: View Cake Products ::</h3></b></center>
                                        <table class="table table-bordered table-hover" style="background-color: white;margin-top: 40px;margin-right:210px; ">
                                            <thead style="background-color:silver;" >
                                                <tr>
                                                    <th scope="col">X</th>
                                                    <th scope="col">ProductID</th>
                                                    <th scope="col">Product</th>
                                                    <th scope="col">Category</th>
                                                    <th scope="col">Price</th>
                                                    <th scope="col">Shape</th>
                                                    <th scope="col">Weight</th>
                                                    <th scope="col">Flavour</th>
                                                    <th scope="col">Level</th>
                                                    <th scope="col">Quantity</th>

                                                    <th scope="col">Description</th>
                                                    <th scope="col">Image</th>
                                                    <th scope="col">Delete</th>
                                                    <th scope="col">Update</th>
                                                </tr>
                                            </thead>
<?php

while ($row = mysqli_fetch_array($result)) {
    $id = $row[0];

    echo "<tbody><tr><td><input type='checkbox' name='cb[]' value='$id'></td><td>$row[0]</td>
                <td>$row[1]</td></td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td>"
    . "<td>$row[7]</td><td>$row[11]</td><td>$row[8]</td><td align='center'><img src='{$row[9]}' height='50px' width='50px'></td><td><a href='deleteCake.php?id=$id' class='btn btn-default btn-sm'><i style='color:black;' class='fa fa-trash'></i></a></td>"
    . " <td><a  href='update1.php? id=$row[id]' class='btn btn-default btn-sm' ><i style='color:black;' class='fa fa-pencil'></i></a></td></tr></tbody>";
}
 
?>
                                        </table>
                                        <input type='submit' id='submit_prog'   name='submit' value='Delete All' class='btn btn-primary'></div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</div>


<!-- Content Wrapper END -->
<div class="container">

    <!-- Trigger the modal with a button -->
    <!--<button type="button" >Open Modal</button>-->

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

                        <form action="update.php" method="post" >
                            <h2><b>Update  Product Details </b></h2>

                            <table style="margin-top: 50px;">
<!--                                <tr>
                                    <td width="100px">Product Id</td>
                                    <td><input type="text" name="id"  style="width: 240px;height: 40px; margin-bottom: 20px;" value="<? php echo $row["id"] ?>"></td>
                                </tr> -->
                                <tr>
                                    <td width="100px">Product Name</td>
                                    <td><input type="text" name="name" style ="width: 240px;height: 40px; margin-bottom: 20px;" value="<?php echo $row['name'] ?>"></td>
                                </tr>
                                <tr>
                                    <td width="100px">Price</td>
                                    <td><input type="text" name="price" style="width: 240px;height: 40px; margin-bottom: 20px;"></td>
                                </tr>
                                <tr>
                                    <td>Shape:</td>
                                    <td><input type="text" name="s" style="width: 240px;height: 40px; margin-bottom: 20px;"></td>
                                </tr>
                                <tr>
                                    <td>Weight:</td>
                                    <td><input type="text" name="w" style="width: 240px;height: 40px; margin-bottom: 20px;"></td>
                                </tr>

                                <tr>
                                    <td>Flavour:</td>
                                    <td><input type="text" name="flavour" style="width: 240px;height: 40px; margin-bottom: 20px;"></td>
                                </tr>
                                <tr>
                                    <td>Level:</td>
                                    <td><input type="text" name="l" style="width: 240px;height: 40px; margin-bottom: 20px;"></td>
                                </tr>
                                <tr>
                                    <td><input type="submit" name="update" value="Update" style="width: 90px;height:40px;color:white;background-color: black;" class="btn btn-primary"></td>
                                    <!--<td><input type="submit" name="clear" value="clear" style="width: 90px;height: 40px;color: white;background-color: black;" ></td>-->
                                </tr>
                            </table>
                        </form>
                         
                        
                        
                    </center>
                </div>

            </div>

        </div>
    </div>

</div>
 
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


</html>


<script>
    $(document).ready(function() {

        var $submit = $("#submit_prog").hide(),
                $cbs = $('input[name="cb[]"]').click(function() {
            $submit.toggle($cbs.is(":checked"));
        });

    });
</script>

