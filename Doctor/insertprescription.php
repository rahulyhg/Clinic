<?php
$con=mysqli_connect("localhost","root","0123456","clinic");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// escape variables for security
$prescriptionid = mysqli_real_escape_string($con, $_POST['prescriptionid']);
$staffid = mysqli_real_escape_string($con, $_POST['staffid']);
$license = mysqli_real_escape_string($con, $_POST['license']);
$med = mysqli_real_escape_string($con, $_POST['med']);
$dosage = mysqli_real_escape_string($con, $_POST['dosage']);
$exp = mysqli_real_escape_string($con, $_POST['exp']);



$sql="INSERT INTO Prescribedmedicines (prescriptionID, staffID, license, name, dosage, expiryDate)
VALUES ('$prescriptionid', '$staffid', '$license', '$med', '$dosage', '$exp')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
echo "1 record added";



mysqli_close($con);
?>

<html>
<FORM><INPUT Type="button" VALUE="Back" onClick="history.go(-1);return true;"></FORM>
</html>