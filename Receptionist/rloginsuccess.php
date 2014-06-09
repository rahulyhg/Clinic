 
<?php
//Check if session is not registered, redirect back to main page. 
//Put this code in first line of web page.
session_start();
if($_SESSION['mystaffID']==""){
header("location:rlogin.php");
}
else
{
	header("location:receptionistmain.php");
}
?>

