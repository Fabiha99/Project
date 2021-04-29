<?php  
require_once '../controller/Teacher_Info.php';

$teachers = fetchAllTeachers();

?>
<!DOCTYPE html>
<html>
<head>
	<title>

	</title>
</head>
<body>
	<link rel="stylesheet" href="CSS/ShowAllTeachers.css">

<table >
	<thead>
		    <th>Name</th>
		    <th>Gender</th>
			<th>Username</th>
			<th>Course</th>
			<th>Section</th>
			<th>Action</th>
	</thead>
	<tbody>
		<?php foreach ($teachers as $i => $teach): ?>
			<tr>
				<td><a href="ViewTeacher.php?id=<?php echo $teach['ID'] ?>"><?php echo $teach['Name'] ?></a></td>
				<td><?php echo $teach['Gender'] ?></td>
				<td><?php echo $teach['Username'] ?></td>
				<td><?php echo $teach['Course'] ?></td>
				<td><?php echo $teach['Section'] ?></td>
				<td><a href="EditProf.php?id=<?php echo $teach['ID'] ?>">Edit</a>&nbsp<a href="Delete.php?id=<?php echo $teach['ID'] ?>">Delete</a></td>
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>


</body>
</html>