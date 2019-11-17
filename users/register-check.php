<?php
require('config.php');
session_start();


if(isset($_POST['register'])){
	$rollno = stripslashes($_REQUEST['rollno']);
	$sname = stripslashes($_REQUEST['sname']);
	$email = stripslashes($_REQUEST['email']);
	$mobile = stripslashes($_REQUEST['mobile']);
	$code = stripslashes($_REQUEST['code']);
	$account_name = stripslashes($_REQUEST['account_name']);


	$targetDir = "uploads/";
    $fileName = basename($_FILES["file"]["name"]);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

	$select = "SELECT * FROM `students` WHERE `email`='$email' or `mobile`='$mobile' or `code` ='$code' ";
	$result = mysqli_query($con, $select);
	$rows = mysqli_num_rows($result);

	$temp_arr = array();

	if($rows > 0) {

		$_SESSION['emc_error']="OK";
		header("location: register.php");
	}
	else{

		$allowTypes = array('jpg','png','jpeg','gif','pdf');
        if(in_array($fileType, $allowTypes)){
            // Upload file to server
            if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
		        $query="INSERT INTO `students` (`id`, `code`, `rollno`, `sname`, `email`, `mobile`, `file`, `prefer_account`,`status`) VALUES ('', '$code','$rollno','$sname', '$email', '$mobile', '".$fileName."', '$account_name', 'Request')";
		        mysqli_query($con,$query);

		        $_SESSION['success']="OK";
		        header("location: register.php");
		    }
		    else{
		        $_SESSION['emc_error']="OK";
		        header("location: register.php");
		    }
		}
		else{
		    $_SESSION['emc_error']="OK";
		    header("location: register.php");
		}
	}
}

mysql_close($con);

?>