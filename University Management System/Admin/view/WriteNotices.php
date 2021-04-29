<!DOCTYPE html>
<html>
<head>
  <title>Store form data in .txt file</title>
</head>
<body>
  <form method="post">
    Enter Your Text Here:<br>
    <input type="text" name="textdata"><br>
    <input type="submit" name="submit"><br>
      </form>
</body>
</html>
<?php
              
if(isset($_POST['textdata']))
{
$data=$_POST['textdata'];
$fp = fopen('Notices.txt', 'w');
fwrite($fp, $data);
fclose($fp);
echo file_get_contents("Notices.txt") ;
?><br>
<?php
}
?>
