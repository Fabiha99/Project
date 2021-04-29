<?php  
require_once "../model/model_r.php";


if (isset($_POST['submit'])) {
  $data['name'] = $_POST['name'];
  $data['gender'] = $_POST['gender'];
  $data['username'] = $_POST['username'];
  $data['course'] = $_POST['course'];
  $data['section'] = $_POST['section'];

  if (updateTeacher($_POST['id'], $data)) {
  	echo 'Successfully updated!!';
  	//redirect to showStudent
  	header('Location: ../view/ViewTeacher.php?id=' . $_POST["id"]);
  }
} else {
	echo 'You are not allowed to access this page.';
}


