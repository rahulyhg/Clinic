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
                        <li><a href="showmyinfo.php">Personal Information</a></li>

                        

                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                              About Patients
                              <b class="caret"></b>
                              </a>
                            <ul class="dropdown-menu">
                              <li><a href="createpatient.php">Create New Patient</a></li>
                              <li><a href="patientsearch.php">Patient Search</a></li>
                              <li><a href="patientpickupmed.php">Patient's Medicine Pickup</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            Appointments 
                            <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                              <li class="active"><a href="viewappointments.php">View Appointments</a></li>
                              <li><a href="setappointment.php">Set Appointment</a></li>
                              <li><a href="deleteappointment.php">Delete Appointments</a></li>
                         
                            </ul>
                        </li>
                        <li><a href="../index.php">Logout</a></li>
                </ul>                        
            </div>
        </div>
    </div>


    </div>
	
	<html>
<body>


</body>
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
</html>
<p align="center"><img border="1" src="img/viewappointments.jpg" alt="The Clinic" style="center" width="800" height="350"></p>


<?php
$con=mysqli_connect("localhost","root","0123456","clinic");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

session_start();

// escape variables for security
//$apptid = mysqli_real_escape_string($con, $_POST['apptid']);

echo "<center><h2>Maximum # Of Appointments</h2>";

$max = mysqli_query($con,"SELECT Temp.carecard, Temp.name, Max(Temp.NoOfApp) FROM (SELECT p.carecard, p.name, appointmentid, p.gender, count(appointmentid) as NoOfApp FROM Patient p, Book b Where p.carecard=b.carecard GROUP BY p.carecard) Temp GROUP BY Temp.carecard ORDER BY Max(Temp.NoOfApp) Desc Limit 1");

echo "<table border='1' style='width:400px'>
<tr>
<th>CareCard#</th>
<th>Name</th>
<th># Of Appointments</th>
</tr>";

while($row = mysqli_fetch_array($max)) {
  echo "<tr>";
  echo '<td align="center">' . $row['carecard'] . "</td>";
  echo '<td align="center">' . $row['name'] . "</td>";
  echo '<td align="center">' . $row['Max(Temp.NoOfApp)'] . "</td>";
  echo "</tr>";
}

echo "</table><p></p>";


echo "<h2>Minimum # Of Appointments</h2>";

$min = mysqli_query($con,"SELECT Temp.carecard, Temp.name, Min(Temp.NoOfApp) FROM (SELECT p.carecard, p.name, appointmentid, p.gender, count(appointmentid) as NoOfApp FROM Patient p, Book b Where p.carecard=b.carecard GROUP BY p.carecard) Temp GROUP BY Temp.carecard ORDER BY Min(Temp.NoOfApp) Limit 1");

echo "<table border='1' style='width:400px'>
<tr>
<th>CareCard#</th>
<th>Name</th>
<th># Of Appointments</th>
</tr>";

while($row = mysqli_fetch_array($min)) {
  echo "<tr>";
  echo '<td align="center">'. $row['carecard'] . "</td>";
  echo '<td align="center">' . $row['name'] . "</td>";
  echo '<td align="center">' . $row['Min(Temp.NoOfApp)'] . "</td>";
  echo "</tr>";
}

echo "</center></table><p></p>";

?>