<?php
ob_start();
session_start();
if(!isset($_SESSION['password'])){
    header("location:Login.php");
}
?>

<!DOCTYPE html>
<?php
     include './conn.php';
            
          
           
            $conn= mysqli_connect("localhost", "root","", "php");

?>
<html>


    <!-- Mirrored from themenate.com/espire/html/dist/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Jan 2019 04:52:22 GMT -->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no">
        <title>View All The Customer Details</title>
           <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
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
                    <div class="side-panel">
                        <div class="side-panel-wrapper bg-white">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#chat" role="tab" data-toggle="tab">
                                        <span>Chat</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#profile" role="tab" data-toggle="tab">
                                        <span>Profile</span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="#todo-list" role="tab" data-toggle="tab">
                                        <span>Todo</span>
                                    </a>
                                </li>
                                <li class="panel-close">
                                    <a class="side-panel-toggle" href="javascript:void(0);">
                                        <i class="ti-close"></i>
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <!-- chat START -->
                                <div id="chat" role="tabpanel" class="tab-pane fade in active">
                                    <div class="chat">
                                        <div class="chat-user-list scrollable">
                                            <div class="chat-section">
                                                <h5 class="chat-title">Recent</h5>
                                                <a href="javascript:void(0);" class="chat-user chat-toggle">
                                                    <img class="thumb-img" src="assets/images/avatars/thumb-1.jpg" alt="">
                                                    <div class="user-info">
                                                        <span class="user-name">Jordan Hurst</span>
                                                        <span class="prev-chat">What good's a reward if...</span>
                                                    </div>
                                                    <span class="status online"><span></span></span>
                                                </a>
                                                <a href="javascript:void(0);" class="chat-user chat-toggle">
                                                    <img class="thumb-img" src="assets/images/avatars/thumb-2.jpg" alt="">
                                                    <div class="user-info">
                                                        <span class="user-name">Harriet Douglas</span>
                                                        <span class="prev-chat">Don't talk to me, stranger...</span>
                                                    </div>
                                                    <span class="status no-disturb"></span>
                                                </a>
                                                <a href="javascript:void(0);" class="chat-user chat-toggle">
                                                    <img class="thumb-img" src="assets/images/avatars/thumb-3.jpg" alt="">
                                                    <div class="user-info">
                                                        <span class="user-name">Victoria Clayton</span>
                                                        <span class="prev-chat">Well, the Force is what...</span>
                                                    </div>
                                                    <span class="status away"></span>
                                                </a>
                                                <a href="javascript:void(0);" class="chat-user chat-toggle">
                                                    <img class="thumb-img" src="assets/images/avatars/thumb-6.jpg" alt="">
                                                    <div class="user-info">
                                                        <span class="user-name">Michael Birch</span>
                                                        <span class="prev-chat">Good. Use your aggressive...</span>
                                                    </div>
                                                    <span class="status online"></span>
                                                </a>
                                            </div>
                                            <div class="chat-section">
                                                <h5 class="chat-title">Members</h5>
                                                <a href="javascript:void(0);" class="chat-user chat-toggle">
                                                    <img class="thumb-img" src="assets/images/avatars/thumb-4.jpg" alt="">
                                                    <div class="user-info">
                                                        <span class="user-name pdd-top-5">Samuel Field</span>
                                                    </div>
                                                    <span class="status"></span>
                                                </a>
                                                <a href="javascript:void(0);" class="chat-user chat-toggle">
                                                    <img class="thumb-img" src="assets/images/avatars/thumb-5.jpg" alt="">
                                                    <div class="user-info">
                                                        <span class="user-name pdd-top-5">Jennifer Watkins</span>
                                                    </div>
                                                    <span class="status"></span>
                                                </a>
                                                <a href="javascript:void(0);" class="chat-user chat-toggle">
                                                    <img class="thumb-img" src="assets/images/avatars/thumb-6.jpg" alt="">
                                                    <div class="user-info">
                                                        <span class="user-name pdd-top-5">Michael Birch</span>
                                                    </div>
                                                    <span class="status"></span>
                                                </a>
                                                <a href="javascript:void(0);" class="chat-user chat-toggle">
                                                    <img class="thumb-img" src="assets/images/avatars/thumb-10.jpg" alt="">
                                                    <div class="user-info">
                                                        <span class="user-name pdd-top-5">Renee Edwards</span>
                                                    </div>
                                                    <span class="status"></span>
                                                </a>
                                                <a href="javascript:void(0);" class="chat-user chat-toggle">
                                                    <img class="thumb-img" src="assets/images/avatars/thumb-11.jpg" alt="">
                                                    <div class="user-info">
                                                        <span class="user-name pdd-top-5">Kathy White</span>
                                                    </div>
                                                    <span class="status"></span>
                                                </a>
                                                <a href="javascript:void(0);" class="chat-user chat-toggle">
                                                    <img class="thumb-img" src="assets/images/avatars/thumb-9.jpg" alt="">
                                                    <div class="user-info">
                                                        <span class="user-name pdd-top-5">Daryl Ellis</span>
                                                    </div>
                                                    <span class="status"></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="conversation">
                                            <div class="conversation-wrapper">
                                                <div class="conversation-header">
                                                    <a href="javascript:void(0);" class="back chat-toggle">
                                                        <i class="ti-arrow-circle-left"></i>
                                                    </a>
                                                    <span class="user-name">Jordan Hurst</span>
                                                </div>
                                                <div class="conversation-body">
                                                    <div class="msg">
                                                        <div class="bubble me">
                                                            <span>Feeling all right, sir?</span>
                                                        </div>
                                                    </div>
                                                    <div class="msg">
                                                        <div class="bubble friend">
                                                            <span>Just like new</span>
                                                        </div>
                                                    </div>
                                                    <div class="msg">
                                                        <div class="bubble friend">
                                                            <span>How about you?</span>
                                                        </div>
                                                    </div>
                                                    <div class="msg">
                                                        <div class="bubble me">
                                                            <span>Right now I feel I could take on the whole Empire myself</span>
                                                        </div>
                                                    </div>
                                                    <div class="msg">
                                                        <div class="bubble friend">
                                                            <span>All right</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="conversation-footer">
                                                    <button class="upload-btn">
                                                        <i class="ti-camera"></i>
                                                    </button>
                                                    <input class="chat-input" type="text" placeholder="Type a message...">
                                                    <button class="sent-btn">
                                                        <i class="fa fa-send-o"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- chat END -->
                                <!-- profile START -->
                                <div id="profile" role="tabpanel" class="tab-pane fade">
                                    <div class="profile scrollable">
                                        <div class="pdd-horizon-20 pdd-top-20">
                                            <div class="border bottom">
                                                <div class="text-center mrg-top-20">
                                                    <div class="row">
                                                        <div class="col-md-6 ml-auto mr-auto text-center">
                                                            <img class="img-fluid border-radius-round" src="assets/images/avatars/user-1.jpg" alt="">
                                                        </div>
                                                    </div>
                                                    <h4 class="mrg-top-20">Nate Leong</h4>
                                                    <span class="">@Frontend Developer</span>
                                                </div>
                                                <div class="row text-center pdd-vertical-20">
                                                    <div class="col-sm-12">
                                                        <div class="row">
                                                            <div class="col-sm-4 col-xs-4 border right">
                                                                <div class="pdd-vertical-10">
                                                                    <span class="font-size-18 text-dark">18</span>
                                                                    <small>Projects</small>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4 col-xs-4 border right">
                                                                <div class="pdd-vertical-10">
                                                                    <span class="font-size-18 text-dark">1,362</span>
                                                                    <small>Followers</small>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4 col-xs-4">
                                                                <div class="pdd-vertical-10">
                                                                    <span class="font-size-18 text-dark">362</span>
                                                                    <small>Points</small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pdd-horizon-20 pdd-top-20">
                                            <div class="border bottom">
                                                <h5 class="text-dark mrg-btm-20">Quick Tools</h5>
                                                <ul class="list-unstyled list-link font-size-16 pdd-btm-20">
                                                    <li>
                                                        <a href="#">
                                                            <i class="ti-user pdd-right-10"></i>
                                                            <span>Friend Request</span>
                                                            <span class="label label-info mrg-left-5">2</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="ti-book pdd-right-10"></i>
                                                            <span>Inbox</span>
                                                            <span class="label label-warning mrg-left-5">8</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="ti-settings pdd-right-10"></i>
                                                            <span>Settings</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="padding-20">
                                            <h5 class="text-dark mrg-btm-20">Recent</h5>
                                            <ul class="list-unstyled list-info">
                                                <li>
                                                    <a href="#">
                                                        <img class="thumb-img" src="assets/images/avatars/thumb-1.jpg" alt="">
                                                        <div class="info">
                                                            <span class="title">Jordan Hurst</span>
                                                            <span class="sub-title">have send you a request</span>
                                                            <span class="float-object">8m</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img class="thumb-img" src="assets/images/avatars/thumb-4.jpg" alt="">
                                                        <div class="info">
                                                            <span class="title">Samuel Field</span>
                                                            <span class="sub-title">have send you a request</span>
                                                            <span class="float-object">7d</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="thumb-img bg-info text-center font-size-25 font-secondary">
                                                            <span class="text-white">E</span>
                                                        </span>
                                                        <div class="info">
                                                            <span class="title">Espire</span>
                                                            <span class="sub-title">Welcome on Board</span>
                                                            <span class="float-object">7d</span>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- profile END -->
                                <!-- todo START -->
                                <div id="todo-list" role="tabpanel" class="tab-pane fade">
                                    <div class="todo-wrapper">
                                        <div class="todo-category-wrapper">
                                            <div class="row mrg-btm-15">
                                                <div class="col-md-12">
                                                    <h3 class="no-mrg-top">Todo List</h3>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0);" class="todo-toggle">
                                                <div class="todo-category">
                                                    <span class="amount">8</span>
                                                    <span class="category">Today</span>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0);" class="todo-toggle">
                                                <div class="todo-category">
                                                    <span class="amount">18</span>
                                                    <span class="category">This Week</span>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0);" class="todo-toggle">
                                                <div class="todo-category">
                                                    <span class="amount">28</span>
                                                    <span class="category">This Month</span>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0);" class="todo-toggle">
                                                <div class="create-category">
                                                    <i class="amount fa fa-plus-circle"></i>
                                                    <span class="category">New Category</span>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="todolist-wrapper">
                                            <div class="todolist-header">
                                                <a href="javascript:void(0);" class="back todo-toggle">
                                                    <i class="ti-arrow-circle-left"></i>
                                                </a>
                                                <h3 class="category">This Week</h3>
                                                <a href="#" class="add">
                                                    <span>ADD</span>
                                                </a>
                                            </div>
                                            <div class="todolist-body">
                                                <div class="checkbox">
                                                    <button class="delete">
                                                        <i class="ti-close"></i>
                                                    </button>
                                                    <input id="task1" name="task1" type="checkbox">
                                                    <label for="task1">I hope the old man got that tractor </label>
                                                </div>
                                                <div class="checkbox">
                                                    <button class="delete">
                                                        <i class="ti-close"></i>
                                                    </button>
                                                    <input id="task2" name="task2" type="checkbox">
                                                    <label for="task2">Come on, come on!</label>
                                                </div>
                                                <div class="checkbox">
                                                    <button class="delete">
                                                        <i class="ti-close"></i>
                                                    </button>
                                                    <input id="task3" name="task3" type="checkbox">
                                                    <label for="task3">it was dangerous here</label>
                                                </div>
                                                <div class="checkbox">
                                                    <button class="delete">
                                                        <i class="ti-close"></i>
                                                    </button>
                                                    <input id="task4" name="task4" type="checkbox">
                                                    <label for="task4">I hope the old man got that tractor </label>
                                                </div>
                                                <div class="checkbox">
                                                    <button class="delete">
                                                        <i class="ti-close"></i>
                                                    </button>
                                                    <input id="task5" name="task5" type="checkbox">
                                                    <label for="task5">Artoo! Artoo, quickly!</label>
                                                </div>
                                            </div>
                                            <div class="todolist-body">
                                                <div class="pdd-btm-5 mrg-btm-15 border bottom">
                                                    <p class="mrg-btm-5">Completed</p>
                                                </div>
                                                <div class="checkbox">
                                                    <button class="delete">
                                                        <i class="ti-close"></i>
                                                    </button>
                                                    <input id="completed-1" name="completed-1" type="checkbox" checked="">
                                                    <label for="completed-1">I hope the old man got that tractor </label>
                                                </div>
                                                <div class="checkbox">
                                                    <button class="delete">
                                                        <i class="ti-close"></i>
                                                    </button>
                                                    <input id="completed-2" name="completed-2" type="checkbox" checked="">
                                                    <label for="completed-2">Come on, come on!</label>
                                                </div>
                                                <div class="checkbox">
                                                    <button class="delete">
                                                        <i class="ti-close"></i>
                                                    </button>
                                                    <input id="completed-3" name="completed-3" type="checkbox" checked="">
                                                    <label for="completed-3">it was dangerous here</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Side Panel END -->

                    <!-- theme configurator START -->
                    
                    <!-- theme configurator END -->

                    <!-- Theme Toggle Button START -->
                    
                    <!-- Theme Toggle Button END -->

                    <!-- Content Wrapper START -->

<?php

$conn= mysqli_connect("localhost","root","", "php");

$query="select * from myadmin";
$result= mysqli_query($conn, $query);

echo "<form action='deleteeAllCustomer.php' method='post'>";

?>
                    <div class="main-content">
                        
                                <center><h3><b>:: View All Customers ::</h3></b></center>
                                    <center>
        <input type="text" id="searchTerm" style="margin-bottom:30px;width: 400px;height: 40px;border-color: violet;" onkeyup="doSearch()" placeholder="Search for emails..">
    </center>
                      <table id="dataTable"  class="table table-bordered table-hover" style="background-color: white;margin-top: 70px; ">
                          <thead style="background-color:silver;" >
                      <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Contact</th>
                        <th scope="col">Address</th>
                                               
                         </tr>
                    </thead>
               <?php
                  while($row= mysqli_fetch_array($result))
                {
                      $id=$row[0];
                     
                    echo "<tbody><tr>
                <td>$row[1]</td></td><td>$row[3]</td><td>$row[4]</td><td>$row[6]</td>"
                
                . "</td></tr></tbody>";
                        
                }
                ?>
                 </table>
                 <input type='submit' name='submit'id='submit_prog' value='Delete All' class='btn btn-primary'></div>
                 
</form>
       
<!--    <button type='button' class='btn btn-info btn-lg' data-toggle='modal'  data-target='#myModal'>    -->
  
    </div>
</div>
<!-- Page Container END -->

</div>
</div>

<div class="container">
 
  <!-- Trigger the modal with a button -->
<!--  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>-->

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
         
        </div>
        <div class="modal-body">
            <table>
                <tr>
                    <td><input type="text" placeholder="Enter name" name="text"></td>
                </tr>
            </table>
        </div>
      
      
    </div>
  </div>
  
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