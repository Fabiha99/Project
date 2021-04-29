<?php if(!empty($_GET['id'])){ ?>
<?php 

require_once '../controller/Teacher_Info.php';
$tableName = 'product';
$teach= fetchTeacher($_GET['id']);

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Delete Teacher</title>
</head>
<body>
	<fieldset>
<legend><B>Delete Teacher</B></legend> <br>
<form action="../controller/Delete_Teacher.php?id=<?php echo $_GET['id'] ?>" method="post" enctype="multipart/form-data">
<div>Teacher ID: <?php echo $_GET['id']; ?> <hr>
	Name: <?php echo $teach['Name']; ?> <hr>
	Course: <?php echo $teach['Course']; ?> <hr>
	Section: <?php echo $teach['Section']; ?> 

</div>
<hr>
  <input type="submit" name="submit" value="delete">
</form>
</fieldset>
</body>
</html>
<?php }
else{
	echo "You are not allowed to visit this page";
} ?>