<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="0123456"; // Mysql password 
$db_name="clinic"; // Database name 
$tbl_name="doctorssee"; // Table name 

// Connect to server and select databse.
//mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
//mysql_select_db("$db_name")or die("cannot select DB");


//Create connection
$con=mysqli_connect("localhost","root","0123456","clinic");
//Check connection
if (!$con) {
	die('Could not connect' . mysqli_error());
   // echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else
{
   echo "sucessful";	
}

session_start();
// username and password sent from form 
$mystaffID=intval($_POST['staffID']); 
$mylicense=intval($_POST['license']); 
echo $mystaffID;
echo $mylicense;




$sql="SELECT * FROM doctorssee WHERE staffID=$mystaffID AND license='$mylicense'";

$result=mysqli_query($con,$sql);

$row = mysqli_fetch_array($result, MYSQL_BOTH);

$count=mysqli_num_rows($result);
// If result matched $mystaffID and $mylicense, table row must be 1 row
if($count == 0){
echo "Wrong staffID# or License#";

}
else {
	// Register $mystaffID, $mylicense and redirect to file "login_success.php"
echo "Successful";
$_SESSION['mystaffID'] = $mystaffID;
$_SESSION['mylicense'] = $mylicense;
header("location:viewingpatients.php");




}

mysqli_close($con);
?>

<html>
<FORM><INPUT Type="button" VALUE="Back" onClick="history.go(-1);return true;"></FORM>
</html>