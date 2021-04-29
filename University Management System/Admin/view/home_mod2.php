
                <?php include 'account.php' ;?>
                <br><br>
<?php
  session_start();
  if(!isset($_SESSION['flag'])){
    header('location: login_mod2.php');
  }
?>

  <html>
  <head>
    <title> Home </title>
  </head>
  <body >
     <link rel="stylesheet" href="CSS/home_mod2.css">

    <table border="0" width="90%" align="center">
      <tr align="center">
       
       <h1 align="center"> Welcome Home Admin </h1>
        
      </tr>



      <tr align="left">
       

        <td> 
          <h2> Services : </h2> 
          <ul>
            <li><a href="AddTeacher.php"><h2>Assign Teachers to courses</h2></a> </li>
            <li><a href="AddStudent.php"><h2>Assign Students to courses </h2></a></li>
            <li><a href="ShowAllTeachers.php"><h2>Show Teachers</h2></a></li>
            <li><a href="SearchTeacherAjax.php"><h2>Search Teacher</h2></a> </li>
            <li><a href="WriteNotices.php"><h2>Write Notices</h2></a></li>
            <li><a href="Result.php"><h2>Scholarship Student List</h2></a> </li>
            
            <li><a href="About.html"><h2>About</h2></a> </li>
          </ul>
        </td>
         <td >
          <h2>Notices:</h2>
    
        <?php include 'Viewnotices.php' ;?>
        </td>
         
      </tr>

      
    </table>

  </body>
  </html>