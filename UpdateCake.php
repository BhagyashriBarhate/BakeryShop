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
                                    <td><input type="text" name="id"  style="width: 240px;height: 40px; margin-bottom: 20px;" value="<?php echo $row[0] ?>"></td>
                                </tr> 
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