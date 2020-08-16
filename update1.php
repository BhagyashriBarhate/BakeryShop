
<?php
ob_start();
?>
<?php
include 'conn.php';

if (isset($_POST['done'])) {

    $id = $_GET['id'];
    $pname = $_POST['pname'];
    $price = $_POST['price'];
    $shape = $_POST['shape'];
    $weight = $_POST['w'];
    $f = $_POST['f'];
    
    $qty=$_POST['qty'];
    $l = $_POST['l'];
    $d = $_POST['d'];
    
    $q = " update product set id=$id, pname='$pname', price='$price',shape='$shape',min_weight='$weight',flavour='$f',level='$l',description='$d',qty='$qty' where id=$id  ";

    $query = mysqli_query($conn, $q);

    header('location:ViewProductCategory.php');
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Update Cake Iteam</title>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>



        <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
        <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>




        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <?php
        include './headerlink.php';
        ?>

    </head>
    <body>
       
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

                    <?php
                    $id = $_GET['id'];
                    $_SESSION['id'] = $id;

                    $sql = "select * from product where id='$id'";
                    //$id=$row[0];
                    $fire1 = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_array($fire1);
                    ?>
                    <div class="col-lg-6 m-auto">

                        <form method="post" >

                            <br><br><div class="card">

                                <div class="card-header bg-dark">
                                    <br><h1 class="text-white text-center">  Update Operation </h1>
                                </div><br>
  <script>
                                    function charonly(evt){
                                        var ch= String.fromCharCode(evt.which);
                                        if (!(/[A-Z a-z]/.test(ch))) {
                                              evt.preventDefault();
                                        }
                                    }

                                  </script>
                                  
                                  <script>
                                    function numonly(evt){
                                        var ch= String.fromCharCode(evt.which);
                                        if (!(/[0-9]/.test(ch))) {
                                              evt.preventDefault();
                                        }
                                    }

                                  </script>
                                <label  style="margin-left: 20px;"> Product Name: </label>
                                <input type="text"  style="margin-left: 20px;width: 550px;" onkeypress="charonly(event)"   name="pname" class="form-control" value="<?php echo $row[1]; ?>" <br>

                                <label  style="margin-left: 20px;"> Price: </label>
                                <input type="text"  style="margin-left: 20px;width: 550px;"  onkeypress="numonly(event)" name="price" min="1" max="20000" class="form-control" value="<?php echo $row[3]; ?>" <br>

                                <label  style="margin-left: 20px;"> Shape: </label>
                                <input type="text"  style="margin-left: 20px;width: 550px;" onkeypress="charonly(event)" name="shape" class="form-control" value="<?php echo $row[4]; ?>" <br>

                                <label    style="margin-left: 20px;"> Weight: </label>
                                <input type="text"  style="margin-left: 20px;width: 550px;"  name="w" class="form-control" value="<?php echo $row[5]; ?>" <br>

                                <label style="margin-left: 20px;"> Flavour: </label>
                                <input type="text"   style="margin-left: 20px;width: 550px;" onkeypress="charonly(event)" name="f" class="form-control" value="<?php echo $row[6]; ?>" <br>

                                <label  style="margin-left: 20px;"> Level: </label>
                                <input type="text"   style="margin-left: 20px;width: 550px;" onkeypress="numonly(event)" name="l" class="form-control" value="<?php echo $row[7]; ?>" <br>

                                <label  style="margin-left: 20px;"> Quantity: </label>
                                <input type="text"   style="margin-left: 20px;width: 550px;" onkeypress="numonly(event)" name="qty" class="form-control" value="<?php echo $row[11]; ?>" <br>

                                <label  style="margin-left: 20px;"> Description: </label>
                                <input type="text"  style="margin-left: 20px;width: 550px;" name="d" class="form-control" value="<?php echo $row[8]; ?>" <br>


                                <button class="btn btn-primary" style="width: 100px;margin-top: 10px;margin-left: 20px;"  type="submit" name="done"> Submit </button><br>

                            </div>
                        </form>
                    </div>





                    <?php
                    include 'footer.php';
                    ?>
                    <!-- Footer END -->

                </div>
          
            <!-- Page Container END -->

      
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







    <script>
        $(document).ready(function() {

            var $submit = $("#submit_prog").hide(),
                    $cbs = $('input[name="cb[]"]').click(function() {
                $submit.toggle($cbs.is(":checked"));
            });

        });
    </script>


    <script type="text/javascript">

        $(document).ready(function() {
            $('#tabledata').DataTable();
        })

    </script>

</body>
</html>


<?php /*

  <?php
  $id = $_GET['id'];
  $_SESSION['id']=$id;

  $sql="select * from product where id='$id'";
  //$id=$row[0];
  $fire1= mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($fire1);
  ?>
  <div class="col-lg-6 m-auto">

  <form method="post" >

  <br><br><div class="card">

  <div class="card-header bg-dark">
  <h1 class="text-white text-center">  Update Operation </h1>
  </div><br>

  <label> Product Name: </label>
  <input type="text" name="pname" class="form-control" value="<?php echo $row[1]; ?>" <br>

  <label> Price: </label>
  <input type="text" name="price" class="form-control" value="<?php echo $row[3]; ?>" <br>

  <label> Shape: </label>
  <input type="text" name="shape" class="form-control" value="<?php echo $row[4]; ?>" <br>

  <label> Weight: </label>
  <input type="text" name="w" class="form-control" value="<?php echo $row[5]; ?>" <br>

  <label> Flavour: </label>
  <input type="text" name="f" class="form-control" value="<?php echo $row[6]; ?>" <br>

  <label> Level: </label>
  <input type="text" name="l" class="form-control" value="<?php echo $row[7]; ?>" <br>

  <label> Description: </label>
  <input type="text" name="d" class="form-control" value="<?php echo $row[8]; ?>" <br>


  <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

  </div>
  </form>
  </div>
  </body>
  </html>
 * 
 * 
 */ ?>