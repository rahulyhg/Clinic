<?php



$con=mysqli_connect("localhost","root","0123456","clinic");
//Check connection
if (!$con) {
    die('Could not connect' . mysqli_error());
   // echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else
{
  // echo "sucessful";  
}


session_start();
// username and password sent from form
$carecard= $_SESSION['carecard'];
echo $carecard;
$name= $_SESSION['lname'];
echo $name;
$myaddr = $_POST['addr']; 
$myphn = $_POST['phn'];
//echo $mystaffID . "<p>"; 

//echo $mylicense;

echo "<h2><center>Doctor's Assigned Patients</h2>";

$update = mysqli_query($con,"UPDATE Patient SET '$myaddr'=addr AND '$myphn'=phone 
   WHERE '$carecard'=carecard AND '$name'=name");


if (!mysqli_query($con,$update)) {
  die('Error: ' . mysqli_error($con));
}
echo "Information Updated";



mysqli_close($con);


?>


<html>
<FORM><INPUT Type="button" VALUE="Back" onClick="history.go(-1);return true;"></FORM>
</html>