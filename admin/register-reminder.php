<?php

require('../users/config.php');

$id = $_POST['id'];
$register_by = $_POST['register_by'];
date_default_timezone_set("Asia/Yangon");
$date = date("Y-m-d h:i:sa");

if(isset($_POST['reminder'])){

	$sql = "UPDATE `students` SET `paid`=1,register=1,`status`='Full Registered',`register_by`='$register_by',`updated_time`='$date' WHERE `id`='$id'";
	mysqli_query($con, $sql);


	header("location:register.php");
}

mysql_close($con);
?>