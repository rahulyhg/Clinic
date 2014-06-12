<!DOCTYPE html>
<?php
//Create connection
$con=mysqli_connect("localhost","root","0123456","clinic");
//Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>

<html>
<head>
    <meta charset="utf-8">
    <title>The Clinic</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/patientbutton.css">
	
</head>
<body>

    <div class="container">
        <h1><a href="doctormain.php">The Clinic</a>
		  <div class="pull-right">
			<div class="btn-group">
					<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
					Doctor: <span class="caret"></span>
					</button>
					
				
			</div>
		  </div>
		  </h1>

        <div class="navbar">
            <div class="navbar-inner">
                <div class="container">
                    <ul class="nav">
                        <li><a href="doctormain.php">View My Information</a></li>
                        <li class="active"><a href="mypatients.php">View My Patients</a></li>	
                        <li><a href="myappointments.php">View My Appointments</a></li>
                        <li><a href="createprescription.php">Create Prescription</a></li> 
                        <li><a href="searchprescription.php">Search Prescription</a></li> 
                        <li><a href="../index.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


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
 //  echo "sucessful";  
}

session_start();
// username and password sent from form 
$mystaffID = $_SESSION['mystaffID'];
//echo $mystaffID . "<p>"; 
$mylicense = $_SESSION['mylicense'];
//echo $mylicense;

echo "<h2><center>Doctor's Assigned Patients</h2>";

$doctorsPatients = mysqli_query($con,"SELECT P.CareCard, P.name, P.phone, D.appointmentID, D.staffID 
    FROM Patient P, DoctorsSee D WHERE '$mystaffID'=D.staffID AND P.CareCard=D.CareCard");

$count=mysqli_num_rows($doctorsPatients);

echo "<center><table border='1' style='width:800px'>
<tr>
<th>CareCard #</th>
<th>Name</th>
<th>Phone</th>
<th>Appointment ID</th>
</tr>";

while($row = mysqli_fetch_array($doctorsPatients)) {
  echo "<tr>";
  echo '<td align="center">' . $row['CareCard'] . "</td>";
  echo '<td align="center">' . $row['name'] . "</td>";
  echo '<td align="center">' . $row['phone'] . "</td>";
  echo '<td align="center">' . $row['appointmentID'] . "</td>";
  echo "</tr>";
}

echo "</table><p></p>";






// If result matched $mystaffID and $mylicense, table row must be 1 row
if($count == 0){
echo "Wrong staffID# or License";

}
else {
    // Register $mystaffID, $mylicense and redirect to file "login_success.php"



//echo "Successful";
}
?>
