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

                        

                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                              Personal
                              <b class="caret"></b>
                              </a>
                            <ul class="dropdown-menu">
                              <li><a href="showmyinfo.php">Personal Info</a></li>
                              <li><a href="myappointments.php">All Appointments</a></li>
                            </ul>
                        </li>

                        <li><a href="mypatients.php">View Patients</a></li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            About Prescriptions 
                            <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                              <li><a href="createprescription.php">Create Prescription</a></li>
                              <li class="active"><a href="searchprescription.php">Search Prescription</a></li>
                              <li><a href="prescriptioninfo.php">Prescription Info</a></li>
                         
                            </ul>
                        </li>
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

<p align="center"><img border="1" src="img/prescriptioninfo.jpg" alt="The Clinic" style="center" width="800" height="350"></p>


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
$carecard = $_POST['carecard'];
//echo $carecard . "<p>"; 
$name = $_POST['name'];
//echo $name;


//$addr="SELECT phone FROM patient WHERE staffID=$mystaffID AND license='$mylicense'";


echo "<h2><center>Patients, Medicines and Pharmacy</h2>";

$patientsMedPhar = mysqli_query($con,"SELECT P.CareCard, P.name, M.prescriptionID, 
  M.name, dosage, expiryDate, Ph.pname, Ph.addr, Ph.phone
  FROM Patient P, PrescribedMedicines M, Pharmacy Ph, Pickup Pi, doctorssee d
  WHERE '$carecard'=P.CareCard AND '$name'=P.name AND d.CareCard=P.CareCard 
  AND Ph.addr=Pi.addr AND Ph.pname=Pi.pname AND Pi.prescriptionID=M.prescriptionID");

//$count=mysqli_num_rows($patientsMedPhar);

echo "<center><table border='1' style='width:800px'>
<tr>
<th>CareCard #</th>
<th>Patient</th>
<th>Prescription ID</th>
<th>Medicine</th>
<th>Dosage</th>
<th>Expiry Date</th>
<th>Pharmacy</th>
<th>Address</th>
<th>Phone</th>

</tr>";

while($row = mysqli_fetch_array($patientsMedPhar)) {
  echo "<tr>";
  echo '<td align="center">' . $row['CareCard'] . "</td>";
  echo '<td align="center">' . $row['name'] . "</td>";
  echo '<td align="center">' . $row['prescriptionID'] . "</td>";
  echo '<td align="center">'. $row['name'] . "</td>";
  echo '<td align="center">' . $row['dosage'] . "</td>";
  echo '<td align="center">' . $row['expiryDate'] . "</td>";
  echo '<td align="center">' . $row['pname'] . "</td>";
  echo '<td align="center">' . $row['addr'] . "</td>";
  echo '<td align="center">' . $row['phone'] . "</td>";
  echo "</tr>";
}

echo "</table><p></p>";


?>
