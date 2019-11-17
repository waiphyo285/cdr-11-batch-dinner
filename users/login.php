<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Admin</title>
	<link rel = "icon" type = "images/jpg" href = "images/ucsmtla-logo.jpg">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/linearicons-free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-50 p-r-50 p-t-50 p-b-50">
				<form class="login100-form validate-form" method="post" action="login-check.php">

					<div class= "text-center m-b-20 col-md-12">
						<img src="images/ucsmtla-logo.jpg" alt="ucsmtla-logo" width="100px" height="100px">
						<p>CONVOCATION DINNER ADMIN LOGIN</p>	
					</div>

					
					<?php 
					if(!empty($_SESSION['message']))
					{ ?>
						<div class= "m-b-20 alert-danger text-center col-md-12">
							<p>Incorrect Username [OR] Password!</p>
						</div>
					<?php 	
					}
					$_SESSION['message']="";	
					?>	


					<div class="wrap-input100 validate-input m-b-20" data-validate = "Username is required">
						<input class="input100" type="text" name="username" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="fa fa-envelope"></span>
						</span>
					</div>
 
					<div class="wrap-input100 validate-input m-b-20" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="fa fa-lock"></span>
						</span>
					</div>
					
					<div class="container-login100-form-btn m-b-20">
						<input type="submit" class="login100-form-btn" name="login" value="LOGIN">
					</div> 

					<div class="container-login100-form-btn m-b-20">
						<input type="reset" class="login100-form-btn bg-danger" name="reset" value="RESET">
					</div> 
					
					<div class="text-center m-b-5 col-md-12">
						<p>WTF 2019 © <a href="http://www.ucsmtla.edu.mm/">UCSMTLA</a></p>
					</div>
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>