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
        <h1><a href="index.php">The Clinic</a>
		  <div class="pull-right">
			<div class="btn-group">
					<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
					Viewing As: <span class="caret"></span>
					</button>
					
				<ul class="dropdown-menu" style="right: 0; left: auto"; role="menu">
					<li><a href="Patient/login.php">Patient</a></li>
					<li class="divider"></li>
					<li><a href="Doctor/login.php">Doctor</a></li>
					<li><a href="Receptionist/login.php">Receptionist</a></li>
			  </ul>
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
                        <li class="active"><a href="createprescription.php">Create Prescription</a></li> 
                    </ul>
                </div>
            </div>
        </div>
    </div>

<!--
<h1 align="center"> Welcome to our Clinic!</h1>

<h3 align="center"> You are currently viewing as a doctor. <br> What would you like to do?</h3>

-->

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
   echo "sucessful";  
}

session_start();
// username and password sent from form 
$mystaffID = $_SESSION['mystaffID'];
//echo $mystaffID; 
$mylicense = $_SESSION['mylicense'];
//echo $mylicense;

//$addr="SELECT phone FROM patient WHERE staffID=$mystaffID AND license='$mylicense'";


$all="SELECT * FROM doctorssee WHERE staffID=$mystaffID AND license='$mylicense'";

$result=mysqli_query($con,$all);

$count=mysqli_num_rows($result);



//


//hello


$patients = mysqli_query($con,"SELECT * FROM doctorssee");

/*echo "<center><table border='5'>
<tr>
<th>staffID</th>
<th>license</th>
</tr>";

while($row = mysqli_fetch_array($result)){
   echo "<tr>";
  echo '<td align="center">' . $row['staffID'] . "</td>";
  echo '<td align="center">' . $row['license'] . "</td>";
  echo "</tr>";



echo "</table><p></p></center>";

}
*/

//hello




// If result matched $mystaffID and $mylicense, table row must be 1 row
if($count == 0){
echo "Wrong staffID# or License";

}
else {
    // Register $mystaffID, $mylicense and redirect to file "login_success.php"



echo "Successful";
}

?>
