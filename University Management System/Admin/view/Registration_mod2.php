

<?php include 'menu.php';?>

<?php include_once "../controller/Reg_Check_mod2.php" ;?>
<html>
	<head>
		<title>Registration</title>
	</head>
	<body style='background-image: url("Resources/blu.PNG");  background-size: cover; background-repeat: no-repeat;'>
		<div align="center">
		<form action="" method="post" style="width: 700px;" align="center" onsubmit="return validate()">
			<fieldset style= "background-color: #87ceeb;">
			
				<table align="center">
					<h1 align="center">Welcome to Registration</h1>
						<tr><td><p style="color:red;">* Fields are required</p></td></tr>
					<tr>
						<td>Name:</td>
						<td><input type="text" id="name" value="<?php echo $name?>" name="name" onkeyup="myFunction3()"  onfocusin="myFunction(this)"><span id="nameErr" ></span></td>
						<td><span style="color:red;">*<?php echo $nameErr;?></span></td>
					</tr>
					<tr>
						<td>Username:</td>
						<td><input type="text" id="uname" onkeyup="check_username(this)" onfocusin="myFunction(this)" onkeyup="myFunction4()" value="<?php echo $uname?>" name="uname"><span id="unameErr"></span></td>
						<td><span style="color:red;" id = "unameErr">*<?php echo $unameErr;?></span></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><input type="password" id="pass" value="<?php echo $pass?>" onkeyup="myFunction5()"name="pass" onfocusin="myFunction(this)"><span id="passErr"></span></td>
						<td><span style="color:red;">*<?php echo $passErr;?></span></td>
					</tr>
					<tr>
						<td>Confirm password:</td>
						<td><input type="password" id="cpass" value="<?php echo $cpass?>" name="cpass" onkeyup="myFunction6()"onfocusin="myFunction(this)"><span id="cpassErr"></span></td>
						<td><span style="color:red;">*<?php echo $cpassErr;?></span></td>
					</tr>
					<tr>
						<td>Email:</td>
						<td><input type="text" id="email" value="<?php echo $email?>" name="email" onkeyup="myFunction7()" onfocusin="myFunction(this)"><span id="emailErr"></span></td>
						<td><span style="color:red;">*<?php echo $emailErr;?></span></td>
					</tr>
	                   <tr>
						<td>Gender: </td>
						<td>
							<input type="radio" name="gender" value="Male"> Male
							<input type="radio" name="gender" value="Female"> Female
							<input type="radio" name="gender" value="Custom"> Custom
							<td><span style="color:red;">*<?php echo $genderErr;?></span></td>
						</td>
					</tr>
					<tr>
						<td>
							Birth Date:
						</td>
						<td>
							<select name = "day">
								<option disabled="disabled" selected="selected"> Day </option>
								<?php
                                   for($i = 1; $i <= 31; $i++) {
                                   	 echo "<option>" . "$i" . "</option>";
                                   }
								?>
							</select>
							<select name="month">
								<option disabled="disabled" selected="selected"> Month </option>
								<?php
								$month = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
                                   for($i = 0; $i < 12; $i++) {
                                   	 echo "<option> $month[$i] </option>";
                                   }
								?>
							</select>
							<select name="year">
								<option disabled="disabled" selected="selected"> Year </option>
								<?php
								  for ($i = 0; $i < 30; $i++) {
								  	echo "<option>" . (1980+$i) . "</option>";
								  }
 								?>
							</select>
						</td>
						<td>
							<span style="color:red;">*<?php echo "$bdy"; ?></span>
						</td>
					</tr>
					<tr>
						<td colspan="2" align="center">
							<input type="submit" name="submit" value="submit" onmouseover="colourChange(this)" onmouseout="defColour(this)">
						</td>
					</tr>
				</table>
			</fieldset>
					

		</form> 
		</div> 
		<script src="js/val_reg.js"></script>
		<script>
  function myFunction(x) {
  x.style.background = "pink";
}
</script>
<script>
function myFunction2() {
  var x = document.getElementById("uname");
  x.value = x.value.toUpperCase();
}
</script>
<script>
function colourChange(x) {
   x.style.background = "blue";
   
 
}

function defColour(x) {
  x.style.background = "white";
    x.value.style.background = "black";
}
function myFunction3() {

  document.getElementById("nameErr").style.visibility = "hidden";

  //document.getElementById("unameErr").style.visibility = "hidden";
  //document.getElementById("passErr").style.visibility = "hidden";
  //document.getElementById("cpassErr").style.visibility = "hidden";
  //document.getElementById("emailErr").style.visibility = "hidden";
}
function myFunction4() {

  //document.getElementById("nameErr").style.visibility = "hidden";

  document.getElementById("unameErr").style.visibility = "hidden";
  //document.getElementById("passErr").style.visibility = "hidden";
  //document.getElementById("cpassErr").style.visibility = "hidden";
  //document.getElementById("emailErr").style.visibility = "hidden";
}
function myFunction5() {

  //document.getElementById("nameErr").style.visibility = "hidden";

  //document.getElementById("unameErr").style.visibility = "hidden";
  document.getElementById("passErr").style.visibility = "hidden";
  //document.getElementById("cpassErr").style.visibility = "hidden";
  //document.getElementById("emailErr").style.visibility = "hidden";
}
function myFunction6() {

  //document.getElementById("nameErr").style.visibility = "hidden";

  //document.getElementById("unameErr").style.visibility = "hidden";
  //document.getElementById("passErr").style.visibility = "hidden";
  document.getElementById("cpassErr").style.visibility = "hidden";
  //document.getElementById("emailErr").style.visibility = "hidden";
}
function myFunction7() {

  //document.getElementById("nameErr").style.visibility = "hidden";

  //document.getElementById("unameErr").style.visibility = "hidden";
  //document.getElementById("passErr").style.visibility = "hidden";
  //document.getElementById("cpassErr").style.visibility = "hidden";
  document.getElementById("emailErr").style.visibility = "hidden";
}
function check_username(uname){
				debugger;
				var xhr = new XMLHttpRequest();
				xhr.onreadystatechange=function(){
					if(this.readyState == 4 && this.status == 200){
						document.getElementById("unameErr").innerHTML = this.responseText;
					}
				};
				xhr.open("GET","CheckUname.php?u="+uname.value,true);
				xhr.send();
			}

</script>



		</body>
</html>