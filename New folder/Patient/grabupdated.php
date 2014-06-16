
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

// format the number that's in xxxxxxxxxx to xxx-xxx-xxxx
function convert_number($number) {
	if (strlen($number) == 10) {
		$formatted_number = preg_replace("/^(\d{3})(\d{3})(\d{4})$/", "$1-$2-$3", $number);
		return $formatted_number;
	} else 
		return $number;
}


// test to see if the number is in either xxxxxxxxxx or xxx-xxx-xxxx
function test_phone ($data) {

		$formats = "/^(\d[\s-]?)?[\(\[\s-]{0,2}?\d{3}[\)\]\s-]{0,2}?\d{3}[\s-]?\d{4}$/i";

		if (preg_match ($formats, $data)) 
			return $data;
		else return 1;
}


$myaddr = $_POST['addr']; 

if (1 !== (test_phone($_POST['phn']))) {
	$myphn=convert_number($_POST['phn']);
} else {echo "<script language='javascript'>alert('Number in the wrong format, it has to be in 10 digits or xxx-xxx-xxxx');history.back();</script>";
            exit;
	}




//$myphn = test_input($_POST['phn']);
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