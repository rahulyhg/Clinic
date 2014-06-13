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
                        <li><a href="mypatients.php">View My Patients</a></li>	
                        <li><a href="myappointments.php">View My Appointments</a></li>
                        <li><a href="createprescription.php">Create Prescription</a></li> 
                        <li><a href="searchprescription.php">Search Prescription</a></li> 
                        <li  class="active"><a href="prescriptioninfo.php">Prescription Information</a></li> 
                        <li><a href="../index.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


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
 //  echo "sucessful";  
}

session_start();
// username and password sent from form 
//$carecard = $_POST['carecard'];
//echo $carecard . "<p>"; 
$name = $_POST['name'];
//echo $name;

echo "<center><h2>Average Dosage of '$name'</h2>";

$avgAloxi = mysqli_query($con,"SELECT AVG(dosage)
FROM PrescribedMedicines
WHERE name='$name'");

echo "<table border='1'>
<tr>
<th>Average (consumption/week)</th>

</tr>";

while($row = mysqli_fetch_array($avgAloxi)) {
  echo "<tr>";
  echo '<td align="center">' . $row['AVG(dosage)'] . "</td>";

  echo "</tr>";
}

echo "</table><p></p>";




echo "<h2>Minimum Dosage of '$name'</h2>";

$minAloxi = mysqli_query($con,"SELECT MIN(dosage)
FROM PrescribedMedicines
WHERE name='$name'");

echo "<table border='1'>
<tr>
<th>Minimum (consumption/week)</th>

</tr>";

while($row = mysqli_fetch_array($minAloxi)) {
  echo "<tr>";
  echo '<td align="center">' . $row['MIN(dosage)'] . "</td>";

  echo "</tr>";
}

echo "</table><p></p>";



echo "<h2>Maximum Dosage of '$name'</h2>";

$maxAloxi = mysqli_query($con,"SELECT MAX(dosage)
FROM PrescribedMedicines
WHERE name='$name'");

echo "<table border='1'>
<tr>
<th>Maximum (consumption/week)</th>

</tr>";

while($row = mysqli_fetch_array($maxAloxi)) {
  echo "<tr>";
  echo '<td align="center">' . $row['MAX(dosage)'] . "</td>";

  echo "</tr>";
}

echo "</table><p></p>";


echo "<h2>'$name' Dosages</h2>";

$aloxiDosage= mysqli_query($con,"SELECT dosage
FROM PrescribedMedicines
WHERE name='$name'");

echo "<table border='1'>
<tr>
<th>Dosages</th>

</tr>";

while($row = mysqli_fetch_array($aloxiDosage)) {
  echo "<tr>";
  echo '<td align="center">' . $row['dosage'] . "</td>";

  echo "</tr>";
}

echo "</center></table><p></p>";



?>