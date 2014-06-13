<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>The Clinic</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">

	
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
                        <li><a href="../receptionistmain.php">View My Information</a></li>
                        <li class="active"><a href="../viewappointments.php">View Appointments</a></li> 
                        <li><a href="../setappointment.php">Set Appointment</a></li>
                        <li><a href="deleteappointment.php">Delete Appointment</a></li>
                        <li><a href="../createpatient.php">Create New Patient</a></li>
                        <li><a href="../patientsearch.php">Patient Search</a></li>
                        <li><a href="patientpickupmed.php">Patient Pickup Medicine</a></li>
                        <li><a href="../../index.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>


    </div>
	
	<html>
<body>

<br>



<hr>
</body>
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
</html>


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

// apptid sent from form 
$apptid = $_POST['apptid'];
//echo $apptid; 


echo '<h3 align="center">Viewing Scheduled AppointmentID: ' . $apptid . '</h3>';

$patientsAppts = mysqli_query($con,"SELECT P.CareCard, name, addr, phone, appointmentID 
  FROM Patient P, Book B WHERE P.CareCard=B.CareCard AND appointmentID='$apptid'");

echo "<center><table border='1' style='width:800px'>
<tr>
<th>CareCard #</th>
<th>Name</th>
<th>Address</th>
<th>Phone</th>
<th>Appointment ID</th>

</tr>";

while($row = mysqli_fetch_array($patientsAppts)) {
  echo "<tr>";
  echo '<td align="center">' . $row['CareCard'] . "</td>";
  echo '<td align="center">' . $row['name'] . "</td>";
  echo '<td align="center">' . $row['addr'] . "</td>";
  echo '<td align="center">' . $row['phone'] . "</td>";
  echo '<td align="center">' . $row['appointmentID'] . "</td>";
  echo "</tr>";
}

echo "</table><p></p><center>";

/*
$patientappt = mysqli_query($con,"SELECT p.CareCard, p.name, p.phone, s.date, s.time, s.address, st.name FROM patient p, book b, doctorssee d, setappointments s, staff st WHERE p.CareCard=b.CareCard AND appointmentID='$apptid' AND appointmentID=d.appointmentID AND d.appointmentID=b.appointmentID AND d.staffID=st.staffID");

echo "<table border='1'>
<tr>
<th>CareCard #</th>
<th>Name</th>
<th>Gender</th>
<th>Address</th>
<th>Phone</th>
<th>Date of Birth</th>
<th>Checkup Date</th>
<th>Appointment ID</th>

</tr>";

while($row = mysqli_fetch_array($prescribedMedicines)) {
  echo "<tr>";
  echo "<td>" . $row['CareCard'] . "</td>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['gender'] . "</td>";
  echo "<td>" . $row['addr'] . "</td>";
  echo "<td>" . $row['phone'] . "</td>";
  echo "<td>" . $row['DOB'] . "</td>";
  echo "<td>" . $row['checkupDate'] . "</td>";
  echo "<td>" . $row['appointmentID'] . "</td>";
  echo "</tr>";
}

echo "</table><p></p>";

*/

/*
$all="SELECT * FROM setappointments WHERE appointmentID='$apptid'"; 

$result=mysqli_query($con,$all);

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

echo "</table><p></p></center>";

}



// If result matched $mycarecard and $mylname, table row must be 1 row
if($count == 0){
echo "Wrong CareCard# or Surname";

}
else {
    // Register $mycarecard, $mylname and redirect to file "login_success.php"



//echo "Successful";
}

*/

?>
