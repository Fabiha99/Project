<?php include 'menu.php';?>


<?php

require_once '../controller/Teacher_Info.php';
$teach = fetchTeacher($_GET['id']);

 ?>

<html>
  <head>
    <title>Edit Teacher Profile</title>

  </head>
  <body style='background-image: url("Resources/yellow.PNG");  background-size: cover; background-repeat: no-repeat;' >
    <div align="center">
    <form  name="myform"  method="post" style="width: 700px;" align="center"    onsubmit="return validateform();" action="../controller/UpdateProf.php" >
      <fieldset style= "background-color: lightyellow;">
      
        <table align="center">
          <h1 align="center">Edit Teacher Profile</h1>
            <tr><td><p style="color:red;">* Fields are required</p></td></tr>
            <tr>
             <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
           </tr>
          <tr>
            <td>Name:</td>
            <td><input type="text" id="name" onkeyup="checkName()" onblur="checkName()"value="<?php echo $teach['Name']?>" name="name" ><span id="nameErr" ></span></td>

          </tr>
           <tr>
            <td>Gender: </td>
            <td>
              <input type="radio" name="gender" value="Male"> Male
              <input type="radio" name="gender" value="Female"> Female
              <input type="radio" name="gender" value="Custom"> Custom
        
            </td>
          </tr>
          

          <tr>

            <td>Username:</td>
            <td><input type="text" id="username"onkeyup="checkUName()" onblur="checkUName()" value="<?php echo $teach['Username']?>" name="username"><span id="unameErr"></span></td>
          </tr>
          <tr>

            <td>Course:</td>
            <td><input type="text" id="course" onkeyup="checkCourse()" onblur="checkCourse()" value="<?php echo $teach['Course']?>" name="course"><span id="courseErr"></span></td>
          
          </tr>
          <tr>

            <td>Section:</td>
            <td><input type="text" id="section" onkeyup="checkSection()" onblur="checkSection()"value="<?php echo $teach['Section']?>" name="section"><span id="sectionErr"></span></td>
            
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
      var username=document.myform.username.value; 
      var course=document.myform.course.value;  
      var section=document.myform.section.value;  
        
      if (name==null || name==""){  
        alert("Name can't be blank");  
        return false;  
      }else if(username.length<2){  
        alert("Username must be atleast 2 characters");  
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
      }
      else if
        (document.getElementById("name").value.length<5){
          document.getElementById("name").style.borderColor = "red";
          document.getElementById("nameErr").style.color = "red";
        document.getElementById("nameErr").innerHTML = "Name must be at least 5 characters long.";
      }
      else{
          document.getElementById("nameErr").innerHTML = "";
        document.getElementById("name").style.borderColor = "black";
      }
      
        }
        function checkUName() {
      if (document.getElementById("username").value == "") {
          document.getElementById("unameErr").innerHTML = "User Name can't be blank";
          document.getElementById("unameErr").style.color = "red";
          document.getElementById("uname").style.borderColor = "red";
      }
       else if(document.getElementById("username").value.length<2){
          document.getElementById("username").style.borderColor = "red";
          document.getElementById("unameErr").style.color = "red";
        document.getElementById("unameErr").innerHTML = "Username must be at least 2 characters long.";
      }
      else{
          document.getElementById("unameErr").innerHTML = "";
        document.getElementById("username").style.borderColor = "black";
      }
      
        }
         function checkCourse() {
      if (document.getElementById("course").value == "") {
          document.getElementById("courseErr").innerHTML = "Course can't be blank";
          document.getElementById("courseErr").style.color = "red";
          document.getElementById("course").style.borderColor = "red";
      }
        else if(document.getElementById("course").value.length<2){
          document.getElementById("course").style.borderColor = "red";
          document.getElementById("courseErr").style.color = "red";
        document.getElementById("courseErr").innerHTML = "Course must be at least 2 characters long.";
      }
      else{
          document.getElementById("courseErr").innerHTML = "";
        document.getElementById("course").style.borderColor = "black";
      }
      
        }
         function checkSection() {
      if (document.getElementById("section").value == "") {
          document.getElementById("sectionErr").innerHTML = "Section can't be blank";
          document.getElementById("sectionErr").style.color = "red";
          document.getElementById("section").style.borderColor = "red";
      }
        else if(document.getElementById("section").value.length>1){
          document.getElementById("section").style.borderColor = "red";
          document.getElementById("sectionErr").style.color = "red";
        document.getElementById("sectionErr").innerHTML = "Section must be only 1 character long.";
      }
      else{
          document.getElementById("sectionErr").innerHTML = "";
        document.getElementById("section").style.borderColor = "black";
      }
      
        }
     
</script>  
          

    </form> 
    </div> 