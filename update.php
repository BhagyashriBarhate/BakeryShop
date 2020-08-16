<?php
/*
 * 
 * 
 
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
 
 * 
 * 
 * 
 * 
 * 
 * 
 * <?php
session_start();
include './conn.php';
if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $pricee = $_POST['price'];
    $shape = $_POST['s'];
    $weight = $_POST['w'];
    $flavour = $_POST['flavour'];
    $level = $_POST['l'];

    $id = $_POST['id'];
    
  

    // $sql="update product set pname='$name',price='$pricee',shape='$shape',weight='$weight',flavour='$flavour' where id='$id'";
    $sql = "update product set pname='$name',price='$pricee',shape='$shape',min_weight='$weight',flavour='$flavour',level='$level' where id='$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        ?>
        <script>alert('update!!!!')</script>

        <?php
    }
}

?>
 */
include './conn.php';
$pid=$_GET["id"];
  $sql="select * from product where id='$pid'";
            //$id=$row[0];
            $fire1= mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($fire1);
            
?>

<form action="#" method="post">
  Product Name:<input  type="text"  value="<?php echo $row[1]; ?>"  name="pname" ></textarea>
    <input  type="text"   value="<?php echo $row[3]; ?>"   name="price"></textarea>
  <input type="submit" name="submit"  value="Update Details">
</form>
<?php

 if(isset($_POST['submit'])){
   $name=$_POST['pname'];  
  
   $price=$_POST['price'];
   
   
   $update="update product set pname='$name',price='$price' where cid='2'";
   $execute= mysqli_query($conn, $update);
   if($execute){
         //$page = $_SERVER['PHP_SELF'];
         //   $sec = "1";
          //  header("Refresh: $sec; url=$page");
        echo "<script>alert('Prodile details changed')</script>";
        
   }
 }
?>
             