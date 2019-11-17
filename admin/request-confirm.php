<?php

	require('../users/config.php');

	$id = $_POST['id'];
	$confirm_by = $_POST['confirm_by'];

	date_default_timezone_set("Asia/Yangon");
	$date = date("Y-m-d h:i:sa");

	if(isset($_POST['confirm'])){

		$sql = "UPDATE `students` SET `confirm`=1,`status`='Confirmed',`confirm_by`='$confirm_by',`updated_time`='$date' WHERE `id`='$id'";
		mysqli_query($con, $sql);

		header("location:confirm.php");
	}
	elseif(isset($_POST['cancel'])) {
		
		header("location:requests.php");
	}
	mysql_close($con);
?>