<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
   <link rel="stylesheet" type="text/css" href="CSS/login.css">
</head>
<body>
  <form id="myForm" name="myForm" method="post" onsubmit="return validateForm()" action="../controller/Login_Check_mod2.php" >
    <br><div align="center">
      <center>
    <fieldset style=" width: 300px " align ="center" >
        
     <h1 align="center">Get Started</h1>
      <table align ="center">
        
        <tr>
          <td style="color:white;">Username</td>
          <td><input type="email" name="Email" value="" placeholder="Email"></td>
        </tr>
        
        <tr>
          <td style="color:white;">Password</td>
          <td><input type="password" name="Pass" value=""></td>
        </tr>
        
        <tr>
          <td></td>
          <td>
            <input type="submit" name="submit" value="Submit" > 
          </td>
        </tr>
        <tr>
            <td>
              <a href="Registration_mod2.php">Not registered yet?</a>
            </td>
          </tr>
        </div><br>
        
      </table>
    </fieldset>
    </center>
  </form>
</body>
<script>
  /*"use strict"
  
  function validateForm()
  {
     let name= document.forms["myForm"] ["Email"].value;
     if(name=="")
     {
   return false;
     
     }
     
    let password= document.forms["myForm"] ["Pass"].value;
     if(password=="")
     {
       alert("Password is required");
     return false;
     
     }
     
  
     
  }
    
  </script>
</html>