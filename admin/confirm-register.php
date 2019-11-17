<?php

	require('../users/config.php');

	$id = $_POST['id'];
	$half = $_POST['half'];
	$register_by = $_POST['register_by'];

	date_default_timezone_set("Asia/Yangon");
	$date = date("Y-m-d h:i:sa");

	if(isset($_POST['paid'])){
		if(isset($half)){

			$sql = "UPDATE `students` SET `paid`=1,`status`='Half Registered',`half_register_by`='$register_by',`updated_time`='$date' WHERE `id`='$id'";
			mysqli_query($con, $sql);
		}
		else{
			$sql = "UPDATE `students` SET `paid`=1,register=1,`status`='Full Registered',`register_by`='$register_by' WHERE `id`='$id'";
			mysqli_query($con, $sql);
		}

		header("location:register.php");
	}

	mysql_close($con);

?>