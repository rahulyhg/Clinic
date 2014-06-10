<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="12345"; // Mysql password 
$db_name="clinic"; // Database name 
$tbl_name="staff"; // Table name 

// Connect to server and select databse.
//mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
//mysql_select_db("$db_name")or die("cannot select DB");


//Create connection
$con=mysqli_connect("localhost","root","12345","clinic");
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

echo $mystaffID;

// To protect MySQL injection (more detail about MySQL injection)
//$mystaffID = stripslashes($mystaffID);
//$mylname = stripslashes($mylname);
//$mystaffID = mysql_real_escape_string($mystaffID);
//$mylname = mysql_real_escape_string($mylname);
//$mystaffIDint = (int) $mystaffID;
//$sql="SELECT * FROM patient WHERE staffID=$mystaffID AND name='$mylname'";
//$sql="select * from patient";
$sql="SELECT * FROM staff WHERE staffID=$mystaffID";

$result=mysqli_query($con,$sql);

$row = mysqli_fetch_array($result, MYSQL_BOTH);

$count=mysqli_num_rows($result);
// If result matched $mystaffID and $mylname, table row must be 1 row
if($count == 0){
echo "Wrong staffID#";

}
else {
	// Register $mystaffID, $mylname and redirect to file "login_success.php"
echo "Successful";
$_SESSION['mystaffID'] = $mystaffID;

header("location:rloginsuccess.php");




}

mysqli_close($con);
?>