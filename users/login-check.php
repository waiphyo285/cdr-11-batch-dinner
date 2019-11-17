<?php
	require('config.php');
	session_start();

	if (isset($_POST['login'])){
		$username = stripslashes($_REQUEST['username']);
		//$username = mysqli_real_escape_string($con,$username);

		$password = stripslashes($_REQUEST['password']);
		//$password = mysqli_real_escape_string($con,$password);
		date_default_timezone_set("Asia/Yangon");
		$date = date("Y-m-d h:i:sa");

		$query = "SELECT * FROM `users` WHERE `username`='$username'
		and `password`='$password'";
		// password='".md5($password)."';

		$result = mysqli_query($con,$query);
		$rows = mysqli_num_rows($result);
		if($rows > 0){
			while ($row = mysqli_fetch_assoc($result)) {
				$_SESSION['username'] = $row['name'];
				$_SESSION['uid'] = $row['id'];
				$id = $row['id'];
				$sql = "UPDATE `users` SET `logged_time`='$date' WHERE `id`='$id'";
				mysqli_query($con, $sql);
			}

			header("Location: ../admin/requests.php");

		}
		else{
			$_SESSION['message']="OK"; 
			header("location: login.php");
			// to add alert code 
		}
	}
	mysql_close($con);
?>