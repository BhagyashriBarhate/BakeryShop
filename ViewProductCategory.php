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
        <title>View Category Wise Bakery Item </title>

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

                    <!-- Theme Toggle Button START -->
                    
                    <!-- Theme Toggle Button END -->
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

//     session_start();
                  
                  // $_SESSION['cname'] = $_POST['category'];
                  $cid=$_SESSION['cname'];
$conn = mysqli_connect("localhost", "root", "", "php");

$query = "select * from product where cid=$cid";
$result = mysqli_query($conn, $query);

echo "<form action='deleteother.php' method='post'>";
?>
                                    <div class="main-content">

                                        <center><h3><b>:: View Bakery Products ::</h3></b></center>
                                        <table class="table table-bordered table-hover" style="background-color: white;margin-top: 40px;margin-right:200px; ">
                                            <thead style="background-color:silver;" >
                                                <tr>
                                                    <th scope="col">X</th>
                                                    <th scope="col">ProductID</th>
                                                    <th scope="col">Product</th>
                                                    <th scope="col">Category</th>
                                                    <th scope="col">Price</th>
                                                    
                                                    <th scope="col">Quantity</th>
                                                    <th scope="col">Flavour</th>

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
                <td>$row[1]</td></td><td>$row[2]</td><td>$row[3]</td><td>$row[11]</td><td>$row[6]</td>"
    . "<td>$row[8]</td><td align='center'><img src='{$row[9]}' height='50px' width='50px'></td><td><a href='deleteother.php?id=$id' class='btn btn-default btn-sm'><i style='color:black;' class='fa fa-trash'></i></a></td>"
    . " <td><a  href='update2.php?id=$id' class='btn btn-default btn-sm'><i style='color:black;' class='fa fa-pencil'></i></a></td></tr></tbody>";
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

<?php
include 'js.php';
?>





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

                        <form action="#" method="post" >
                            <h2><b>Update  Product Details </b></h2>

                            <table style="margin-top: 50px;">
                                <tr>
                                    <td width="100px">Product Id</td>
                                    <td><input type="text" name="id"  style="width: 240px;height: 40px; margin-bottom: 20px;"></td>
                                </tr> 
                                <tr>
                                    <td width="100px">Product Name</td>
                                    <td><input type="text" name="name" style ="width: 240px;height: 40px; margin-bottom: 20px;"></td>
                                </tr>
                                <tr>
                                    <td width="100px">Price</td>
                                    <td><input type="text" name="price" style="width: 240px;height: 40px; margin-bottom: 20px;"></td>
                                </tr>
                                <tr>
                              
                                <tr>
                                    <td>Flavour:</td>
                                    <td><input type="text" name="flavour" style="width: 240px;height: 40px; margin-bottom: 20px;"></td>
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

<?php
include './conn.php';
if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $pricee = $_POST['price'];
    $shape = $_POST['s'];
    $weight = $_POST['w'];
    $flavour = $_POST['flavour'];

    @$id = $_GET['id'];

    // $sql="update product set pname='$name',price='$pricee',shape='$shape',weight='$weight',flavour='$flavour' where id='$id'";
    $sql = "update product set pname='$name',price='$pricee',shape='$shape',flavour='$flavour' where id='$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        ?>
        <script>alert('update!!!!')</script>
        <?php
    }
    
    
}
?>