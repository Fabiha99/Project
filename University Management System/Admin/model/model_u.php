<?php
  
	include_once "db_u.php";
	function getUser($uname){
		$query = "SELECT Uname FROM register WHERE Uname='$uname'";
		$result = get($query);
		if(count($result)>0) return true;
		return false;
	}
?>