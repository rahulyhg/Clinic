
<?php
session_start();
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



// username and password sent from form

if(isset($_SESSION['mycarecard']))
{
	//$carecard= $_SESSION['mycarecard'];
	//echo $carecard;
} else
{
	//echo "failed";
	//$carecard = 193785;
}
$myaddr = $_POST['addr']; 
$myphn = $_POST['phn'];
$cc = $_POST['cc'];
?>

<!DOCTYPE html>
<html>
<body>

<?php
echo "<h2><center>Information Updated</h2>";
//echo $name;
//echo $carecard;
$state = "UPDATE Patient SET addr='$myaddr', phone='$myphn' WHERE carecard=$cc";

//$update = mysqli_query($con,$state);


if (!mysqli_query($con,$state)) {
  die('Error: ' . mysqli_error($con));
}
//echo "<h3><center>Information Updated</center></h3>";



mysqli_close($con);



?>


<FORM form style="text-align:center" action="patientmain.php" method="post">
<INPUT Type="submit" VALUE="Back" ></INPUT>
<input type="hidden" name="cc" value = <?php echo $cc ?>><br>

</FORM>  

</body>
</html>