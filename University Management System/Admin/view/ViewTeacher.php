<?php  
require_once '../controller/Teacher_Info.php';

$teach = fetchTeacher($_GET['id']);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<link rel="stylesheet" href="CSS/ViewTeacher.css">

<table>
	<tr>
		    <th>Name</th>
			<th>Gender</th>
			<th>Username</th>
			<th>Course</th>
			<th>Section</th>
	</tr>
	<tr>
		<td><a href="ViewTeacher.php?id=<?php echo $teach['ID'] ?>"><?php echo $teach['Name'] ?></a></td>
		        
		   
			    <td><?php echo $teach['Gender']?></td>
				<td><?php echo $teach['Username']?></td>
				<td><?php echo $teach['Course']?></td>
				<td><?php echo $teach['Section']?></td>
			  
	</tr>

</table>


</body>
</html>
