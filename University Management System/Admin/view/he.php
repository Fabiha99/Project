<?php
	session_start();
	if(!isset($_SESSION['flag'])){
		header('location: login_mod2.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title><?=$title?></title>
</head>
<body>