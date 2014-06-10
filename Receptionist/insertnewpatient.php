<?php
$con=mysqli_connect("localhost","root","12345","clinic");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// escape variables for security
$cc = mysqli_real_escape_string($con, $_POST['carecard']);
$name = mysqli_real_escape_string($con, $_POST['name']);
$gender = mysqli_real_escape_string($con, $_POST['gender']);
$addr = mysqli_real_escape_string($con, $_POST['addr']);
$phn = mysqli_real_escape_string($con, $_POST['phn']);
$dob = mysqli_real_escape_string($con, $_POST['dob']);
$checkup = mysqli_real_escape_string($con, $_POST['checkup']);


$sql="INSERT INTO Patient (CareCard, name, gender, addr, phone, DOB, checkupDate) 
VALUES ('$cc', '$name', '$gender', '$addr', '$phn', '$dob', '$checkup')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
echo "1 record added";

mysqli_close($con);
?>