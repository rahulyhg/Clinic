

<?php
$con=mysqli_connect("localhost","root","0123456","clinic");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// escape variables for security
$prescriptionid = mysqli_real_escape_string($con, $_POST['prescriptionid']);


$sql="DELETE From During where During.prescriptionid='$prescriptionid'";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
echo "<h3><center>Appointment has been deleted</center></h3>";

mysqli_close($con);
?>


<html>
<FORM><center><INPUT form style="text-align:center" Type="button" VALUE="Back" onClick="history.go(-1);return true;"></FORM>
</html>


    
    
    
    
</body>