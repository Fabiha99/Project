<?php
	
	
    require_once("dba.php");
    $conn= getConnection();
	$Name= $_REQUEST['Name'];
	$sql = "select * from teacher where Name like '%{$Name}%'";
	$result = mysqli_query($conn, $sql);
    echo $Name;

	$response = "<table border=1 width=900px style=font-weight:bold;>
					<tr>
						<td>ID</td>
						<td>Name</td>
						<td>Course </td>
						<td>Section</td>
					</tr>";
	while ($row=mysqli_fetch_assoc($result)) {
		$response .= 	"<tr>
							<td>{$row['ID']}</td>
							<td>{$row['Name']}</td>
							<td>{$row['Course']}</td>
							<td>{$row['Section']}</td>
						</tr>";
	}

	$response .= "</table>";
	
	echo $response;	
	
	
?>
