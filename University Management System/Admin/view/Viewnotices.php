<?php
$myfile = fopen("Notices.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("Notices.txt"));
fclose($myfile);
?>