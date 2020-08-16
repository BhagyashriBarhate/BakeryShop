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
    <title>Espire - Bootstrap 4 Admin Template</title>

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
                    
                   
                    <!-- Theme Toggle Button START -->
                   
                    <!-- Theme Toggle Button END -->
                  
                      <div class="card-block">
                        <div class="row">
                            <div class="col-md-9 ml-auto mr-auto">
                                <br>
                                <br>
                                <!--<fieldset style="border: 1px solid black;background-color: pink;">-->
                         
                                
                                
                                
                                <form name="formType" id="formType" class="form-horizontal mrg-top-40 pdd-right-30 ng-pristine ng-valid " style="margin-top: 20px;" enctype="multipart/form-data" method="post" action="selectcategorydb.php">
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
                                                  $cid=$row[2];
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
                            <div class="col-md-9 ml-auto mr-auto">
                                <br>
                                <br>
                                <div class="border" style="background-color: white;">
                                   <script>
                                    function numberonly(evt){
                                        var ch= String.fromCharCode(evt.which);
                                        if (!(/[0-9]/.test(ch))) {
                                              evt.preventDefault();
                                        }
                                    }

                                  </script>
                                    <script>
                                    function charonly(evt){
                                        var ch= String.fromCharCode(evt.which);
                                        if (!(/[A-Z a-z]/.test(ch))) {
                                              evt.preventDefault();
                                        }
                                    }

                                  </script>
                                    <form class="form-horizontal mrg-top-40 pdd-right-30 ng-pristine ng-valid" style="margin-top: 20px;margin-left: 20px;" enctype="multipart/form-data" method="post" action="#">
                                    <center>  <h1><b>:: Add Product Details ::</b></h1> </center>
                                    <div class="form-group row">

                                        <label for="form-1-1" class="col-md-2 control-label"  >Product Name:</label>
                                        <div class="col-md-10" >
                                           <!-- <input type="text" class="form-control" id="form-1-1" placeholder="Name">-->
                                            <input type="text" onkeypress="charonly(event)" required="" name="pname" placeholder="Enter Product Name" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="form-1-2" class="col-md-2 control-label" >Select Image:</label>
                                        <div class="col-md-10">

                                            <input  type="file" name="file" required=""> 
                                        </div>
                                    </div>


<!--                                    <div class="form-group row">
                                        <label for="form-1-4" class="col-md-2 control-label" >Category:</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" id="form-1-1" placeholder="Name">

                                            <select name="category" class="form-control">

                                                 
                                                    <?php
                                                  $conn= mysqli_connect("localhost","root","","php");
                                                      $sel="select * from tbl_category;";
                                                    $result1 = mysqli_query($conn,$sel);
                                                    while ($row= mysqli_fetch_array($result1))
                                                    {
                                                    ?>
                                                    <option  value="<?php echo $row['cid'] ?>"><?php echo $row['cname'] ?></option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                            
                                        </div>
                                    </div>-->
                                     <div class="form-group row">

                                        <label for="form-1-1" class="col-md-2 control-label"  >Product Price:</label>
                                        <div class="col-md-10" >
                                           <!-- <input type="text" class="form-control" id="form-1-1" placeholder="Name">-->
                                            <input type="text" required="" onkeypress="numberonly(event)" name="price" placeholder="Enter Product Price" class="form-control" min="1" max="20000" title="Only Lessthen 20000 Amount you can inserted" required="required">
                                        </div>
                                    </div>
                                    
                                     <div class="form-group row">
                                       <label for="form-1-8" class="col-md-2 control-label" >Flavour:</label>
                                        <div class="col-md-10">
                                            
                                            <select name="flavour" required="" class="form-control" id="form-1-1" name="flavour" >
                                                <option value="chocolate">Chocolate </option>
                                                <option value="strawberry">Strawberry </option>
                                                <option value="pineapple">Pineapple </option>
                                                <option value="venilla">Venilla </option>
                                                <option value="blackforest">Black forest </option>

                                            </select>
                                        </div>
                                    </div>

  
                                    <div class='form-group row'>
                                        <label for='form-1-5' class='col-md-2 control-label' >Shape:</label>
                                        <div class='col-md-10'>

                                            <select name='shape' required="" class='form-control' >
                                                <option value='round'>Round</option>
                                                <option value='rectangle'>rectangle</option>
                                                <option value='square'>square</option>
                                                <option value='heart'>heart</option>

                                            </select>
                                        </div>
                                    </div>
                                  
                                    <div class='form-group row'>
                                        <label for='form-1-6' class='col-md-2 control-label' >Minimum Weight:</label>
                                        <div class='col-md-10'>

                                            <select name='weight'  class='form-control' required="" >
                                                <option value='1'>1 Kg</option>
                                                <option value='2'>2 Kg</option>
                                                <option value='3'>3 Kg</option>
                                                <option value='4'>4 Kg</option>

                                            </select>
                                        </div>
                                    </div>


                                    <div class='form-group row'>
                                        <label for='form-1-7'  class='col-md-2 control-label' >Level:</label>
                                        <div class='col-md-10'>

                                            <select name='level' required="" class='form-control' >
                                                <option value='1'>1 </option>
                                                <option value='2'>2 </option>
                                                <option value='3'>3 </option>
                                                <option value='4'>4 </option>

                                            </select>
                                        </div>
                                    </div>

                                     <div class="form-group row">

                                        <label for="form-1-1" class="col-md-2 control-label"  >Quantity</label>
                                        <div class="col-md-10" >
                                           <!-- <input type="text" class="form-control" id="form-1-1" placeholder="Name">-->
                                            <input type="text" required="" name="quantity" placeholder="Enter Quantity " class="form-control">
                                        </div>
                                    </div>
                                     <div class="form-group row">

                                        <label for="form-1-1" class="col-md-2 control-label"  >Min time to make [HH:MM]</label>
                                        <div class="col-md-10" >
                                           <!-- <input type="text" class="form-control" id="form-1-1" placeholder="Name">-->
                                            <input type="time" required="" name="time" placeholder="Enter min time " class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="form-1-10" class="col-md-2 control-label">Description:</label>
                                        <div class="col-md-10">
                                            <textarea class="form-control" required="" rows="2" id="form-1-5" name="description"></textarea>
                                            <div class="text-right mrg-top-15">
                                                
                                            </div>
                                        </div>
                                    </div>
                                    
                                   
                                     <div class="text-right mrg-top-15">
                                        <input type="submit" class="btn btn-primary" name="addProduct" value="Add Product"></input>
                                              <input type="reset" class="btn btn-default" name="clear" value="clear"></input>
                                        </div>
                                   
                                  
                                           <!-- <input type="text" class="form-control" id="form-1-1" placeholder="Name">
                                            <input type="text" name="price" placeholder="Enter Product Price" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="form-1-10" class="col-md-2 control-label">Description:</label>
                                        <div class="col-md-10">
                                            <textarea class="form-control" rows="3" id="form-1-5" name="description"></textarea>
                                            <div class="text-right mrg-top-15">
                                                <button type="submit" class="btn btn-primary" name="submitproduct">Submit</button>
                                                <button class="btn btn-default">Clear</button>
                                            </div>
                                        </div>
                                    </div>-->
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

</body>


</html>


<?php

session_start();
    
  $conn=mysqli_connect("localhost","root","","php");
  if(!$conn)
  {
  echo 'not connected';
  }
  
  if(isset($_POST['addProduct'])){
    
    $name = $_POST['pname'];
    $flavour = $_POST['flavour'];
    $pricee = $_POST['price'];
    $desc = $_POST['description'];
   
    $qty = $_POST['quantity'];

    $shape=$_POST['shape'];
    $weight=$_POST['weight'];
   $level=$_POST['level'];
   $time=$_POST['time'];
   $cid=10;
   
   
    $file_name = $_FILES['file']['name']; 
    $file_size = $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $file_type = $_FILES['file']['type'];  
     $path="./product/$name";
    
    
    $imgtype = strtolower(pathinfo($file_name,PATHINFO_EXTENSION));
   // $target_file = "product/$name" . $file_name;
    $target_file="$path".basename($_FILES['file']['name']);
  
     if (!is_dir($path)){
         mkdir($path,0777,TRUE);
        // move_uploaded_file($file_tmp, $target_file);
        move_uploaded_file($file_tmp,"product/$name".$file_name);
        
         $query = "select * from tbl_category where cid=$cid;"; 
      $sql="INSERT INTO product (pname,cid,price,shape,min_weight,flavour,level,description,image,minTimeToMake,qty)"
              . " VALUES('$name','$cid','$pricee','$shape','$weight','$flavour','$level','$desc','$target_file','$time',$qty)";
      $result=mysqli_query($conn,$sql);
      if($result)
      {
          echo "<script>alert('Record added successfully!!!!')</script>";
          header("Location:viewCake.php");
      }
   
     }
           
   
   
   
   
  }


?>


