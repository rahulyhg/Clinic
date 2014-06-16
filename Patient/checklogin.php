<?php
session_start();
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="0123456"; // Mysql password 
$db_name="clinic"; // Database name 
$tbl_name="patient"; // Table name 

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
 //  echo "sucessful";	
}


// username and name sent from form 
$mycarecard=intval($_POST['carecard']); 
$mylname=$_POST['lname']; 
//echo $mycarecard;
//echo $mylname;

// To protect MySQL injection (more detail about MySQL injection)
//$mycarecard = stripslashes($mycarecard);
//$mylname = stripslashes($mylname);
//$mycarecard = mysql_real_escape_string($mycarecard);
//$mylname = mysql_real_escape_string($mylname);
//$mycarecardint = (int) $mycarecard;
//$sql="SELECT * FROM patient WHERE CareCard=$mycarecard AND name='$mylname'";
//$sql="select * from patient";
$sql="SELECT * FROM patient WHERE CareCard=$mycarecard AND name='$mylname'";

$result=mysqli_query($con,$sql);

$row = mysqli_fetch_array($result, MYSQL_BOTH);

$count=mysqli_num_rows($result);
// If result matched $mycarecard and $mylname, table row must be 1 row
if($count == 0){
echo "<h2><center>Incorrect CareCard# or Name. Please try again.</h2>";


}
else {
	// Register $mycarecard, $mylname and redirect to file "login_success.php"

//$_SESSION[$thisGetLoginSessionVar()] = $mycarecard;
//session_register($mycarecard);
$_SESSION['mycarecard'] = $mycarecard;
$_SESSION['mylname'] = $mylname;
header("location:loginsuccess.php");

}

mysqli_close($con);
?>

<html>
<FORM><center><INPUT Type="button" VALUE="Back" onClick="history.go(-1);return true;"></FORM>
</html>