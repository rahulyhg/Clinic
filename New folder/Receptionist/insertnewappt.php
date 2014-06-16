<?php
$con=mysqli_connect("localhost","root","0123456","clinic");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// escape variables for security
$apptid = mysqli_real_escape_string($con, $_POST['appointmentID']);
$staffid = mysqli_real_escape_string($con, $_POST['staffID']);
$date = mysqli_real_escape_string($con, $_POST['date']);
$time = mysqli_real_escape_string($con, $_POST['time']);
$addr = mysqli_real_escape_string($con, $_POST['addr']);



$sql="INSERT INTO setappointments (appointmentID, staffID, date, time, addr) 
VALUES ('$apptid', '$staffid', '$date', '$time', '$addr')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
echo "Appointment has been set on " . $date . " at " . $time;

mysqli_close($con);
?>

<html>
<FORM><INPUT Type="button" VALUE="Back" onClick="history.go(-1);return true;"></FORM>
</html>