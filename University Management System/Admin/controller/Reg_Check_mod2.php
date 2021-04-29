<?php
	
include_once "../model/model_r.php";

$nameErr = $emailErr =$unameErr= $genderErr = $dobErr =$cpassErr = $passErr= ""; 
 $name = $email = $uname= $gender =$cpass = $pass=$bdy="";
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
        //Email
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
    $hasError=true;
  }
    else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
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
		
		//Password
	if(empty($_POST["pass"]))
    {
      $passErr = "Password is required";
      $hasError=true;
    }
    else {
      $pass=test_input($_POST["pass"]);
      if(strlen($pass)<8)
      {
        $passErr="Password must not be less than eight (8) characters";
        $hasError=true;
      }
      
    }
		
		//Confirm password
if ($_SERVER["REQUEST_METHOD"] == "POST"){
if (empty($_POST["cpass"])) {
    $cpassErr = "Retyped Password is required";
    $hasError=true;
  } 
else if(empty($_POST["pass"]))
{
  $cpassErr = "Password is required";
  $hasError=true;

}
  else {
    $cpass = test_input($_POST["cpass"]);
    // check if password is well-formed
     if ($pass!=$cpass) {
      $cpassErr = "Retyped password did not match with new password";
      $hasError=true;
    }
  }
}
		
		//Gender
	if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
    $hasError=true;
  } else {
    $gender = test_input($_POST["gender"]);
  }
		
		//Birth day
	if (empty($_POST["day"])) {
      $bdy = $bdy . "Day";
    }
    if (empty($_POST["month"])) {
      if (strlen($bdy) > 1) {
      $bdy .= ", month";
        }
        else $bdy .= "Month";
    }
    if (empty($_POST["year"])) {
      if (strlen($bdy) > 1) {
      $bdy .= " and year";
        }
        else $bdy = "Year";
    }
    if (strlen($bdy) > 1) {
      if (strlen($bdy) <= 5) $bdy .= " is required";
      else $bdy .= " are required";
    }
		
	if(!$hasError  && isset($_POST["submit"])){
			
	//$pass = md5($_POST["pass"]);
  $data['name'] = $_POST['name'];
  $data['email'] = $_POST['email'];
  $data['uname'] = $_POST['uname'];
  $data['gender'] = $_POST['gender'];
  $data['pass'] = $_POST['pass'];
  
  

   if (addRegistration($data)) {
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
