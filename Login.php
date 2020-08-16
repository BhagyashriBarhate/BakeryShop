
<?php
ob_start();
 session_start();
 $conn = mysqli_connect("localhost", "root", "","php" );

 
 
?>

<html lang="en">

<head>
	<title>Yummy </title>
	<!-- Meta tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Student Matriculate Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design"
	/>
	<script type="application/x-javascript">
		addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
	</script>
	<!-- Meta tags -->
	<link href="css1/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<!-- //pop-ups-->
	<!-- Calendar -->
<link rel="stylesheet" href="css1/jquery-ui.css" />
<!-- //Calendar -->

	<!-- font-awesome icons --> 
	<link rel="stylesheet" href="css1/font-awesome.min.css" />
	<!-- //font-awesome icons -->
	<!--stylesheets-->
	<link href="css1/style.css" rel='stylesheet' type='text/css' media="all">
	<!--//style sheet end here-->
	<link href="//fonts.googleapis.com/css1?family=Cuprum:400,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css1?family=Pacifico" rel="stylesheet">
</head>

<body style="background-color: wheat;">

	<h1 class="header-w3ls">
		</h1>
	<div class="icon-stu">
           
		<h2 class="student-w3l">Login And Register </h2>
		<div class="stude-user-wls">
			<span class="fa fa-user" aria-hidden="true"></span>
                    
			<div class="clear"> </div>
		</div>
		<div class="row-col">
			<div class="banner-agileits-btm">
				<div class="w3layouts_more-buttn">
					<a href="#small-dialog1 " class="play-icon popup-with-zoom-anim">login</a>
				</div>
				<div id="small-dialog1" class="mfp-hide w3ls_small_dialog wthree_pop" style="background-color: white;">
					<div class="agileits_modal_body">

						<!--login form-->
						<div class="newsletter " >
                                                    
							<h2>Login</h2>  
							<div class="letter-w3ls">
                                                            
                                                            <form action="loginData.php" method="post">
                                                          
                                                                    <div class="form-left-w3l">
                                                                        <input type="email" name="email" placeholder="Email" required="" style="background-color: lightgrey;">
								     </div>
                                                                
                                                                <div class="form-right-w3ls ">
                                                                <input type="password" name="password" required="" placeholder="Password"   style="background-color: lightgray;">
                                                                </div>    
                                                          
                                                                <div style="margin-right: 260px;">
                                                                        <ul>
                                                                            <li><a href="forgetPassword.php">Forget Password??</a></li>
                                                                         
                                                                        </ul>
                                                                        </div>
                                                                   
									<div class="btnn">
                                                                            <input type="submit" name="login" style="background-color: black;color: white;height: 40px;width:180px;">
<!--									<button type="submit">LOGIN</button><br>-->
									</div>
                                                                       
								</form>
								<div class="clear"></div>
    							</div>
							<!--//login form-->
						</div>
					</div>
                  </div>
				</div>
				<div class="banner-its-btm">

					<div class="outs_more-buttn">
						<a href="#small-dialog2 " class="play-icon popup-with-zoom-anim">Register</a>
					</div>
			<div id="small-dialog2" class="mfp-hide w3ls_small_dialog wthree_pop" style="background-color: white;">
			<div class="agileits_modal_body">

			<!--register form-->
			     <div class="student-reg-w3 ">
                    		<h3>Register Here</h3>
			     <div class="letter-w3ls">
                                 <form action="#" method="post" enctype="multipart/form-data">
                             <div class="main">
                             <script>
                            function letteronly(evt){
                                var ch= String.fromCharCode(evt.which);
                                if (!(/[A-Za-z]/.test(ch))) {
                                      evt.preventDefault();
                                }
                            }
                             </script>
                               <div class="form-left-to-w3l">
                                         <input type="text" onkeypress="letteronly(event)" name="name" placeholder="Name" style="background-color: lightgrey;" >
                                          <div class="clear"></div></div>
					<div class="form-right-to-w3ls">
    <input type="password" name="Password"  placeholder="password" style="background-color: lightgrey;height: 40px;width:230px;"   placeholder="Password"  pattern="(?=^.{8,}$)(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s)[0-9a-zA-Z!@#$%^&*()]*$" title="1 Upper Case ,1 Lower Case , 1 digit and 8 characters minimum" style="background-color: lightgray;">

                                             <div class="clear"></div></div>
                                             
			      </div>
				
                                <div class="main">
				<div class="form-left-to-w3l">
                                  
					<input type="email" name="email" placeholder="Email"  style="background-color: lightgrey;">
  				        <div class="clear"></div></div>
					<div class="form-right-to-w3ls">
                                         <script>
                                       function numberonly(evt){
                                       var ch= String.fromCharCode(evt.which);
                                       if (!(/[0-9]/.test(ch))) {
                                       evt.preventDefault();
                                       }
                                       }
                             </script>
                             <input type="text" name="contact"  pattern="[7-9]{1}[0-9]{9}"  onkeypress="numberonly(event)"  maxlength="10" minlength="10" placeholder="Contact"  style="background-color: lightgrey;">
          				      <div class="clear"></div>
					       </div>
				</div>
				<div class="main"></div>
							
				<div class="form-control-w3l">
                                      
                             <textarea name="address" placeholder="Address...."   style="background-color: lightgrey;"></textarea>
				</div>
                                
			 	<div class="btnn1">
<!--                                     <input  type="file" name="image"> -->
                                     <input type="submit" name="submit" style="background-color: black;color: white;height: 40px;width:180px;">
				</div>
                               </form>
				</div>
				</div>
	<!--//register form-->
 
			  </div>
				</div>
				<div class="clear"> </div>
			</div>
			</div>
			</div>
		

			<script type='text/javascript' src='js/jquery-2.2.3.min.js'></script>

			<!--scripts-->

			<!--//scripts-->
			<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
			<script>
				$(document).ready(function () {
					$('.popup-with-zoom-anim').magnificPopup({
						type: 'inline',
						fixedContentPos: false,
						fixedBgPos: true,
						overflowY: 'auto',
						closeBtnInside: true,
						preloader: false,
						midClick: true,
						removalDelay: 300,
						mainClass: 'my-mfp-zoom-in'
					});

				});
			</script>
			<!-- //pop-up-box video -->
			<!-- //js -->
			<!-- Calendar -->
				<script src="js/jquery-ui.js"></script>
				  <script>
						  $(function() {
							$( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
						  });
				  </script>
			<!-- //Calendar -->

 </body>
</html>


<?php

ob_end_flush();
?> 


<?php
ob_start();

?>
<?php
$conn = new mysqli("localhost", "root", "","php" );
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if(isset($_POST['submit']))
{

$Name=$_POST['name'];
$password=$_POST['Password'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$type="Customer";
$address=$_POST['address'];

   
     
$sql = "INSERT INTO MyAdmin (name,password,email,contact,type,address)
VALUES ('$Name','$password','$email','$contact','$type','$address')";
$result=mysqli_query($conn, $sql);


if($result)
{
    
    echo "<script>alert('Registered Successfully');</script>";
    
 }



     
 else {
    echo  "<script>alert('Email id is already taken');</script>";
     }
   
}  


     
?>
<?php
ob_end_flush();
?> 

            
