<!DOCTYPE html>
<?php


// Put this code in first line of web page.  
session_start();
session_destroy();

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
        <h1><a href="index.php">The Clinic</a>
		  <div class="pull-right">
			<div class="btn-group">
					<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
					Login As: <span class="caret"></span>
					</button>
					
				<ul class="dropdown-menu" style="right: 0; left: auto"; role="menu">
					<li><a href="Patient/login.php">Patient</a></li>
					<li class="divider"></li>
					<li><a href="Doctor/dlogin.php">Doctor</a></li>
					<li><a href="Receptionist/rlogin.php">Receptionist</a></li>
			  </ul>
			</div>
		  </div>
		  </h1>

        <div class="navbar">
            <div class="navbar-inner">
                <div class="container">
                    <ul class="nav">
                        <li class="active"><a href="#">About Us</a></li>
						<li><a href="ourinfo.php">Contact Information</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

<h1 align="center"> Welcome to our Clinic!</h1>
<p align="center"><img border="1" src="img/MainPic.jpg" alt="The Clinic" style="center" width="800" height="350"></p>



<p align="center"><font size="5">We currently have: <?php 
//echo "<h2><center>Number of Receptionists</h2>";

$numReceptionists = mysqli_query($con,"SELECT COUNT(*) FROM Receptionists");

echo "<center><table border='1'>
<tr>
<th># of Receptionists</th>
</center>
</tr>";

while($row = mysqli_fetch_array($numReceptionists)) {
  echo "<tr>";
  echo '<td align="center">' . $row['COUNT(*)'] . "</td>";
  echo "</tr>";
}
echo "</table><p></p>";





//echo "<h2>Number of Patients</h2>";

$numPatients = mysqli_query($con,"SELECT COUNT(*) FROM Patient");

echo "<table border='1'>
<tr>
<th># of Patients</th>

</tr>";

while($row = mysqli_fetch_array($numPatients)) {
  echo "<tr>";
  echo '<td align="center">' . $row['COUNT(*)'] . "</td>";

  echo "</tr>";
}

echo "</table><p></p>";



//echo "<h2>Number of Doctors</h2>";

$numDoctors = mysqli_query($con,"SELECT COUNT(*) FROM DoctorsSee");

echo "<table border='1'>
<tr>
<th># of Doctors</th>

</tr>";

while($row = mysqli_fetch_array($numDoctors)) {
  echo "<tr>";
  echo '<td align="center">' . $row['COUNT(*)'] . "</td>";

  echo "</tr>";
}

echo "</table><p></p>";
?>
</font></p>

</body>

    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
</html>