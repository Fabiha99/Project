<?php include 'menu.php';?>

<?php include_once "../controller/AddStudent_Check.php" ;?>
<html>
	<head>
		<title>Add Student</title>
	</head>
	<body style='background-image: url("Resources/blu.PNG");  background-size: cover; background-repeat: no-repeat;'>
		<div align="center">
		<form  name="myform" action="" method="post" style="width: 700px;" align="center" onsubmit="return validateform()">
			<fieldset style= "background-color: #87ceeb;">
			
				<table align="center">
					<h1 align="center">Add Student</h1>
						<tr><td><p style="color:red;">* Fields are required</p></td></tr>
					<tr>
						<td>Name:</td>
						<td><input type="text" id="name" onkeyup="checkName()" onblur="checkName()"value="<?php echo $name?>" name="name" ><span id="nameErr" ></span></td>
						<td><span style="color:red;">*<?php echo $nameErr;?></span></td>
					</tr>

					<tr>

						<td>Username:</td>
						<td><input type="text" id="uname"onkeyup="checkUName()" onblur="checkUName()" value="<?php echo $uname?>" name="uname"><span id="unameErr"></span></td>
						<td><span style="color:red;" id = "unameErr">*<?php echo $unameErr;?></span></td>
					</tr>
					<tr>

						<td>Course:</td>
						<td><input type="text" id="course" onkeyup="checkCourse()" onblur="checkCourse()" value="<?php echo $course?>" name="course"><span id="courseErr"></span></td>
						<td><span style="color:red;" id = "courseErr">*<?php echo $courseErr;?></span></td>
					</tr>
					<tr>

						<td>Section:</td>
						<td><input type="text" id="section" onkeyup="checkSection()" onblur="checkSection()"value="<?php echo $section?>" name="section"><span id="sectionErr"></span></td>
						<td><span style="color:red;" id = "sectionErr">*<?php echo $sectionErr;?></span></td>
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
					
						<td colspan="2" align="center">
							<input type="submit" name="submit" value="submit" onmouseover="colourChange(this)" onmouseout="defColour(this)">
						</td>
					</tr>
				</table>
			</fieldset>
			</form> 
		</div>
			<script>  
		function validateform(){  
			var name=document.myform.name.value;  
			var uname=document.myform.uname.value; 
			var course=document.myform.course.value;  
			var section=document.myform.section.value;  
			  
			if (name==null || name==""){  
			  alert("Name can't be blank");  
			  return false;  
			}else if(uname==null || uname==""){  
			  alert("Username can't be blank");  
			  return false;  
			}  
			else if (course==null || course==""){  
			  alert("Course can't be blank");  
			  return false;   
			} 
			else if (section==null || section==""){  
			  alert("Section can't be blank");  
			  return false;   
			} 
		}
		function checkEmpty() {
		  	if (document.myform.name.value = "") {
		  		alert("Name can't be blank");
		        return false;  
		  	}
		  }  
		function checkName() {
			if (document.getElementById("name").value == "") {
			  	document.getElementById("nameErr").innerHTML = "Name can't be blank";
			  	document.getElementById("nameErr").style.color = "red";
			  	document.getElementById("name").style.borderColor = "red";
			}else{
			  	document.getElementById("nameErr").innerHTML = "";
				document.getElementById("name").style.borderColor = "black";
			}
			
        }
        function checkUName() {
			if (document.getElementById("uname").value == "") {
			  	document.getElementById("unameErr").innerHTML = "User Name can't be blank";
			  	document.getElementById("unameErr").style.color = "red";
			  	document.getElementById("uname").style.borderColor = "red";
			}else{
			  	document.getElementById("unameErr").innerHTML = "";
				document.getElementById("uname").style.borderColor = "black";
			}
			
        }
         function checkCourse() {
			if (document.getElementById("course").value == "") {
			  	document.getElementById("courseErr").innerHTML = "Course can't be blank";
			  	document.getElementById("courseErr").style.color = "red";
			  	document.getElementById("course").style.borderColor = "red";
			}else{
			  	document.getElementById("courseErr").innerHTML = "";
				document.getElementById("course").style.borderColor = "black";
			}
			
        }
         function checkSection() {
			if (document.getElementById("section").value == "") {
			  	document.getElementById("sectionErr").innerHTML = "Section can't be blank";
			  	document.getElementById("sectionErr").style.color = "red";
			  	document.getElementById("section").style.borderColor = "red";
			}else{
			  	document.getElementById("sectionErr").innerHTML = "";
				document.getElementById("section").style.borderColor = "black";
			}
			
        }
     
</script>  
					

		</form> 
		</div> 