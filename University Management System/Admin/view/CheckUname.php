<?php
	include '../model/model_u.php';
	$uname = $_GET["u"];
	$user = getUser($uname);
	if($user){
		echo "<span style='color:red'>User Exists</span>";
	}
	else{
		echo "<span style='color:green'>Username Valid</span>";
	}

?>