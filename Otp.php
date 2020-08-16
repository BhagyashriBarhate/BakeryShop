<?php
ob_start();
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
<style type="text/css">


body{
		
		margin: 0px;
		padding: 0px;
		background: url('images/strawBerry.jpg');
		background-size:cover;
		
}

.box
{
	position:absolute;
	top: 40%;
	left:50%;
	transform:translate(-50% ,-50%);
	width:550px;
	height:400px;
	padding:45px;
	background:rgba(0,0,0,.1);
	box-sizing:border-box;
	box-shadow: 0 15px 25px rgba(0,0,0,.5);
	border-radius:10px;
	background-color:white;
	
}

.box .input input{
		width: 100%;
		padding: 8px 0 10px;
		font-size:16px;
		margin-top:25px;
		font-family:Times New Roman;		
		
}


.input{
	margin-top:19px;
	font-family: Arial;
        margin-left: 20px;
	
}

.inputText{
	width: 40px;
}


.box h1{
	margin:0px;
	padding:0px;
	color:black;
	text-align:center;
	border-bottom:.2px solid;
	margin-bottom:50px;
	border-color:darksalmon;
}


.btn{
	padding: 12px 80px;
	margin-top:15px;
	background-color:/*turquoise*/ darksalmon;
	font-weight:bold;
	border:none;
	margin-top:40px;
	margin-left:115px;
	
}

.btn:hover{
	opacity: 0.7;
}
	
</style>
</head>



<body>
    <form action="ChangePasswordCode.php" method="post" >
	<div class="box">
	
		<h1>Forget Password</h1>
                    
		
		<div class="input">
                    <input type="text" placeholder="Enter OTP" name="otp" required>
			  <span class="focus-border"></span>
		</div>
		
		
		
	<input class="btn" type="submit"  name="submit" value="SUBMIT"><br>
	</div>	
    </form>
</body>
</html>
