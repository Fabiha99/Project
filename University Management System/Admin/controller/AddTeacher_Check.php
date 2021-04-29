<?php
	
include_once "../model/model_r.php";

$nameErr =$unameErr= $genderErr = $courseErr =$sectionErr =  ""; 
 $name = $uname= $gender =$course =$section ="";
 $hasError=false;
	if(isset($_POST["submit"])){

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

		//Full name
	if (empty($_POST["name"])) {
    $nameErr = "Name is required";
    $hasError=true;
  } else {
    $name = test_input($_POST["name"]);

    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
      $hasError=true;
    } 
     if (str_word_count($name)<2) {
      $nameErr = "Should contain atleast 2 words";
      $hasError=true;
    } 

  }
		//Username
 if (empty($_POST["uname"])) {
    $unameErr = "User Name is required";
    $hasError=true;
  } else {
    $uname = test_input($_POST["uname"]);

    // check if name only contains letters and whitespace
    if (!preg_match("/^[0-9a-zA-Z-'_ ]*$/",$uname)) {
      $unameErr = "User Name can contain alpha numeric characters, period, dash or underscore only";
      $hasError=true;
    } 
     if (strlen($_POST["uname"])<2) {
      $unameErr = "Should contain atleast 2 characters";
      $hasError=true;
    } 

  }
  //Course
   if (empty($_POST["course"])) {
    $courseErr = "Course Name is required";
    $hasError=true;
  } else {
    $course = test_input($_POST["course"]);

    // check if name only contains letters and whitespace
    if (!preg_match("/^[0-9a-zA-Z-'_ ]*$/",$course)) {
      $courseErr = "Course can contain alpha only";
      $hasError=true;
    } 


  }
		
		//Gender
	if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
    $hasError=true;
  } else {
    $gender = test_input($_POST["gender"]);
  }
		
		//Section
	 if (empty($_POST["section"])) {
    $sectionErr = "Section is required";
    $hasError=true;
  } else {
    $section = test_input($_POST["section"]);

    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-'_ ]*$/",$section)) {
      $sectionErr = "Section can contain alpha only";
      $hasError=true;
    } 
if (strlen($_POST["section"])>1) {
      $sectionErr = "Should contain only 1 character";
      $hasError=true;
    } 

  }
		
	if(!$hasError  && isset($_POST["submit"])){
			
	//$pass = md5($_POST["pass"]);
  $data['name'] = $_POST['name'];
   $data['gender'] = $_POST['gender'];
  $data['uname'] = $_POST['uname'];
  $data['course'] = $_POST['course'];
  $data['section'] = $_POST['section'];
  
  

   if (addTeacher($data)) {
    echo 'Successfully added!!';
  }
 else {
    echo 'Could not add';
} 
}
			//mysqli_query($conn, $qq);
		
			//header("Location: lg4.php");
			
		
}


	
?>
