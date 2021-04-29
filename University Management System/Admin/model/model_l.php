<?php 


require_once('db.php');

	function getAlluser(){

		$conn = getConnection();
		$sql = "select * from register";
		$result = mysqli_query($conn, $sql);
		$services = [];
		while ($row = mysqli_fetch_assoc($result)) {
			array_push($services, $row);
		}
		return $services;
	}
	
//trigger exception in a "try" bloc
 
	

?>