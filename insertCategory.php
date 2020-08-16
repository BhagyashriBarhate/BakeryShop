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
        <title>Add Category In The Shop</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
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
                    
          

                    <div class="card-block">
                        <div class="row">
                            <div class="col-md-9 ml-auto mr-auto">
                                <br>
                                <br><center><h1><b>:: Add New Category ::</b></h1></center>
                                <!--<fieldset style="border: 1px solid black;background-color: pink;">-->
                                <form action="#" class="form-horizontal mrg-top-40 pdd-right-30 ng-pristine ng-valid " style="margin-top: 20px;" enctype="multipart/form-data" method="post">
                                    <div class="form-group row">
                                        <label for="form-1-1" class="col-md-2 control-label"  >Category Name:</label>
                                        <div class="col-md-10" >
                                           <!-- <input type="text" class="form-control" id="form-1-1" placeholder="Name">-->
                                            <input type="text" id="username" name="cname" placeholder="Enter Product Category Name" class="form-control">
                                            <span id="availability"></span>
                                        </div>
                                    </div>
                                    <div class="text-right mrg-top-15">
                                        <input type="submit" class="btn btn-primary" name="addcategory" value="Add Category"></input>
                                

<!--                                        <button class="btn btn-default">Clear</button>-->
<input type="reset" class="btn btn-default" name="clear" value="clear"></input>

                                    </div>
                            </div>
                        </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- theme configurator END -->

    <!-- Theme Toggle Button START -->
   
    <!-- Theme Toggle Button END -->

    <!-- Content Wrapper START -->

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

<?php
$conn= mysqli_connect("localhost","root","","php");
$category = $_POST['cname'];

if (isset($_POST['addcategory'])) {
    $addcategory = "insert into tbl_category(cname) values('$category');";
    $result= mysqli_query($conn, $addcategory);
    
    if($result)
    {
        echo "<script>alert('category added successfully')</script>";
    }
 else {
     echo "not added";
    }
   
}
?>


<script>  
 $(document).ready(function(){  
   $('#catname').blur(function(){

     var cname = $(this).val();

     $.ajax({
      url:'Check.php',
      method:"POST",
      data:{user_name:cname},
      success:function(data)
      {
       if(data != '0')
       {
        $('#availability').html('<span class="text-danger">Username not available</span>');
//            $('#register').attr("disabled", true);
       }
       else
       {
        $('#availability').html('<span class="text-success">Username Available</span>');
//        $('#register').attr("disabled", false);
       }
      }
     })

  });
 });  
</script>



