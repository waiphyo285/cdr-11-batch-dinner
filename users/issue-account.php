<?php
	require('config.php');
	session_start();

	$temp_arr = array();
	$output = "";
	$keys = array_keys($admins);
	for($i = 0; $i < count($admins); $i++) {
// 		echo $keys[$i] . " ";
		$j = 0;
 		foreach($admins[$keys[$i]] as $key => $value) {
 			$temp_arr[$j] = $value;
 			$j++;
 		}

 		if($temp_arr[0] == $_GET['account_name']){
 			$bank_name = $temp_arr[1];
 			$bank_account = $temp_arr[2];
 			$wavemoney = $temp_arr[3];
 			$success = "ok";
 			break;
 		}
	}
 	echo "Bank : ".$bank_name."\n";
 	echo "Account : ".$bank_account."\n";
 	echo "Wave : ".$wavemoney;

?>