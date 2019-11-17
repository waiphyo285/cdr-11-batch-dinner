<?php
	require('config.php');
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registration</title>
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
				<form class="login100-form validate-form" method="post" action="register-check.php" enctype="multipart/form-data">

					<div class= "text-center m-b-20 col-md-12">
						<div class="text-center">
							<img src="images/ucsmtla-logo.jpg" alt="ucsmtla-logo" width="100px" height="100px">
							<p>CONVOCATION DINNER REGISTRATION</p>
						</div>	
					</div>

					<?php 
					if(!empty($_SESSION['emc_error'])) { ?>

						<div class= "m-b-20 alert-danger text-center col-md-12">
							<p>Something Wrong Data [OR] Already Exist!</p>
						</div>

					<?php 
					}
					$_SESSION['emc_error']='';	
					
					if(!empty($_SESSION['success'])) { ?>	
						<div class= "m-b-20 alert-success text-center col-md-12">
							<p>Successful Registration, We'll Send Your Receipt Slip As Soon As We Receive Your Transfer Amount!</p>
						</div>

					<?php 	
					}
					$_SESSION['success']='';
					?>

					<div class="wrap-input100 validate-input m-b-20" data-validate = "Roll No. is required">
						<select class="input100" name="rollno" id="rollno">
							<span class="focus-input100"></span>
							<span class="symbol-input100">
							<option value="" class="option">Roll No.</option>
							<?php 
								foreach($students as $student)
								{
									?>
										<option value="<?php echo $student['rollno'];?>" class="option"><?php echo $student['rollno'];?></option>

									<?php
								}
							?>
						</select> 
					</div>

					<div class="wrap-input100 validate-input m-b-20" data-validate = "Name is required">
						<select class="input100" name="sname" id="sname">
							<span class="focus-input100"></span>
							<span class="symbol-input100">
							<option value="" class="option">Student Name</option>
							<?php 
								foreach($students as $student)
								{
									?>
										<option value="<?php echo $student['sname'];?>" class="option"><?php echo $student['sname'];?></option>

									<?php
								}
							?>
						</select> 
					</div>

					<div class="wrap-input100 validate-input m-b-20" data-validate = "Email is required">
						<input class="input100" type="email" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="fa fa-envelope"></span>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-20" data-validate = "Mobile number is required">
						<input class="input100" type="tel" name="mobile" pattern="[09]{2}[0-9]{9}" placeholder="Mobile (09775445115)">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="fa fa-mobile"></span>
						</span>
					</div>
 
					<div class="wrap-input100 validate-input m-b-20" data-validate = "Code is required">
						<input class="input100" type="text" name="code" id ="code" placeholder="One-time Code" readonly="">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="fa fa-lock"></span>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-20" data-validate = "Transfer account is required">
						<select class="input100" name="account_name" id="account_name">
							<span class="focus-input100"></span>
							<span class="symbol-input100">
							<option value="" class="option">Choose Account</option>
							<?php
								foreach($admins as $admin)
								{
									?>
										<option value="<?php echo $admin['name'];?>" class="option"><?php echo $admin['name'];?></option>

									<?php
								}
							?>
						</select>
					</div>

					<div class="wrap-input100 validate-input m-b-20" data-validate = "Bank name is required">
						<textarea class="text-secondary" rows="3" name="bank" id ="bank" readonly="">Available Accounts
						</textarea>
					</div>

					<div class="wrap-input100 validate-input m-b-20" data-validate = "Photo is required">
						<label>Profile Picture</label>
						<input class="" type="file" name="file" id="file" required="">
					</div>

					<div class="container-login100-form-btn m-b-20">
						<input type="submit" class="login100-form-btn" name="register" value="REGISTER">
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
	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="js/main.js"></script>
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"> -->
          

	<script type="text/javascript">  
		$(document).ready(function(){  
			$('#sname').change(function(){  
				var sname = $('#sname').val();  
				var rollno = $('#rollno').val();
				if(sname != '' && rollno != '')  
				{  
					$.ajax({  
						url:"issue-code.php",  
						method:"GET",  
						data:{sname:sname, rollno:rollno},  
						success:function(output)  
						{  
							$('#code').fadeIn();  
							$('#code').val(output);  
							 //$('#code').val(output);
						}  
					});  
				}  
			});    
			$('#rollno').change(function(){  
				var sname = $('#sname').val();  
				var rollno = $('#rollno').val();
				if(sname != '' && rollno != '')  
				{  
					$.ajax({  
						url:"issue-code.php",  
						method:"GET",  
						data:{sname:sname, rollno:rollno},  
						success:function(output)  
						{  
							$('#code').fadeIn();  
							$('#code').val(output);  
							 //$('#code').val(output);
						}  
					});  
				}  
			});
			$('#account_name').change(function(){
				var account_name = $('#account_name').val();
				if(account_name != '')
				{
					$.ajax({
						url:"issue-account.php",
						method:"GET",
						data:{account_name:account_name},
						success:function(success)
						{
							$('#bank').fadeIn();
							$('#bank').val(success);
						}
					});
				}
			});
		});  
	</script> 
</body>
</html>