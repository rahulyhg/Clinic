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
                        <li class="active">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                              Personal
                              <b class="caret"></b>
                              </a>
                            <ul class="dropdown-menu">
                              <li><a href="showmyinfo.php">Personal Info</a></li>
                              <li class="active"><a href="myappointments.php">All Appointments</a></li>
                            </ul>
                        </li>
                        </li>

                        <li><a href="mypatients.php">View Patients</a></li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            About Prescriptions 
                            <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                              <li><a href="createprescription.php">Create Prescription</a></li>
                              <li><a href="searchprescription.php">Search Prescription</a></li>
                         
                            </ul>
                        </li>
                        <li><a href="../index.php">Logout</a></li>
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


<p align="center"><img border="1" src="img/viewappointments.jpg" alt="The Clinic" style="center" width="800" height="400"></p>



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

//$addr="SELECT phone FROM patient WHERE staffID=$mystaffID AND license='$mylicense'";


$all= mysqli_query($con,"SELECT d.appointmentID, p.name, p.CareCard, s.date, s.time FROM doctorssee d, patient p, setappointments s 
WHERE d.staffID='$mystaffID' AND p.carecard=d.carecard AND s.appointmentID=d.appointmentID");
//<!--AND id.carecard=p.carecard AND d.appointmentID=s.appointmentID-->;


//$result=mysqli_query($con,$all);

$count=mysqli_num_rows($all);


echo "<h2><center>All my appointments</h2>";


echo "<center><table border='1' style='width:800px'>
<tr>
<th>Appointment ID</th>
<th>Name</th>
<th>CareCard #</th>
<th>Date</th>
<th>Time</th>

</tr>";

while($row = mysqli_fetch_array($all)) {
  echo "<tr>";
  echo '<td align="center">' . $row['appointmentID'] . "</td>";
  echo '<td align="center">' . $row['name'] . "</td>";
  echo '<td align="center">' . $row['CareCard'] . "</td>";
  echo '<td align="center">' . $row['date'] . "</td>";
  echo '<td align="center">' . $row['time'] . "</td>";
  echo "</tr>";
}

echo "</table><p></p><center>";


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



//echo "Successful";
}

?>
