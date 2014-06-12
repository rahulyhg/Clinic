<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>The Clinic</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

	
</head>
<body>

    <div class="container">
        <h1><a href="receptionistmain.php">The Clinic</a>
		  <div class="pull-right">
			<div class="btn-group">
					<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
					Receptionist: <span class="caret"></span>
					</button>
					
			
			</div>
		  </div>
		  </h1>

        <div class="navbar">
            <div class="navbar-inner">
                <div class="container">
                    <ul class="nav">
                        <li><a href="receptionistmain.php">View My Information</a></li>
                        <li class="active"><a href="viewappointments.php">View Appointments</a></li> 
                        <li><a href="setappointment.php">Set Appointment</a></li>
                        <li><a href="createpatient.php">Create New Patient</a></li>
                        <li><a href="patientsearch.php">Patient Search</a></li>
                        <li><a href="../index.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>


    </div>
	
	<html>
<body>

<h3 align="center"> Viewing All Appointments:</h3>

</body>
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
</html>


<?php
$con=mysqli_connect("localhost","root","0123456","clinic");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

session_start();

// escape variables for security
//$apptid = mysqli_real_escape_string($con, $_POST['apptid']);


$allappts ="SELECT * FROM setappointments"; 

$result=mysqli_query($con,$allappts);

$count=mysqli_num_rows($result);

echo "<center><table border='5' style='width:800px'>
<tr>
<th>AppointmentID</th>
<th>StaffID</th>
<th>Date</th>
<th>Time</th>
<th>Address</th>
</tr>";

while($row = mysqli_fetch_array($result)){
   echo "<tr>";
  echo '<td align="center">' . $row['appointmentID'] . "</td>";
  echo '<td align="center">' . $row['staffID'] . "</td>";
  echo '<td align="center">'. $row['date'] . "</td>";
  echo '<td align="center">' . $row['time'] . "</td>";
  echo '<td align="center">'. $row['addr'] . "</td>";
  echo "</tr>";

}
echo "</table><p></p></center>";

// If result matched $mycarecard and $mylname, table row must be 1 row
if($count == 0){
echo "No appointments made yet.";

}
else {
    // Register $mycarecard, $mylname and redirect to file "login_success.php"

//echo "Successful";
}

?>