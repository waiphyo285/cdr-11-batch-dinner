<?php
	require('config.php');
	session_start();

	$temp_arr = array();
	$output = ""; 
	$keys = array_keys($students);
	for($i = 0; $i < count($students); $i++) {
		// echo $keys[$i] . " ";
		$j = 0;
		foreach($students[$keys[$i]] as $key => $value) {
			$temp_arr[$j] = $value;
			$j++;
		}

		if($temp_arr[2] == $_GET['sname'] && $temp_arr[1] == $_GET['rollno']){
			$output = $temp_arr[0];
			break;
		}
	}
	echo $output;  

?>