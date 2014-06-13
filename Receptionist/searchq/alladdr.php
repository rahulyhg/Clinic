<html>
<head>
    <meta charset="utf-8">
    <title>The Clinic</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../css/patientsearchbutton.css">
  
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
                        <li><a href="../viewappointments.php">View Appointments</a></li> 
                        <li><a href="../setappointment.php">Set Appointment</a></li>
                        <li><a href="deleteappointment.php">Delete Appointment</a></li>
                        <li><a href="../createpatient.php">Create New Patient</a></li>
                        <li class="active"><a href="patientsearch.php">Patient Search</a></li>
                        <li><a href="patientpickupmed.php">Patient Pickup Medicine</a></li>
                        <li><a href="../index.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


<br>

<form form style="text-align:center" action="insert.php" method="post">
  <fieldset>
<legend>I want to view a list of all Patient's:</legend>

<a href="allinfo.php" class="button"/>Information</a>
<a href="allcc.php" class="button"/>CareCard#'s</a>
<a href="allname.php" class="button"/>Names</a>
<a href="allgender.php" class="button"/>Genders</a>
<a href="alladdr.php" class="button"/>Addresses</a>
<a href="allphn.php" class="button"/>Phone#'s</a>
<a href="alldob.php" class="button"/>Date Of Birth</a>
<a href="allcheckup.php" class="button"/>Checkup Dates</a>

  </fieldset>
</form>

<hr>
<h3 align="center"> Viewing all Patient's Addresses:</h3>



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


$all="SELECT * FROM patient";
$carecard="SELECT CareCard FROM patient";
$name="SELECT name FROM patient";
$gender="SELECT gender FROM patient";
$addr="SELECT addr FROM patient";
$phn="SELECT phone FROM patient";
$dob="SELECT DOB FROM patient";
$checkup="SELECT checkupDate FROM patient";


$result=mysqli_query($con,$addr);

$count=mysqli_num_rows($result);

echo "<center><table border='1'>
<tr>

<th>Address</th>

</tr>";

while($row = mysqli_fetch_array($result)){
   echo "<tr>";
  echo '<td align="center">' . $row['addr'] . "</td>";
  echo "</tr>";

}
echo "</table><p></p></center>";

// If result matched $mycarecard and $mylname, table row must be 1 row
if($count == 0){
echo "No Patients registered.";

}
else {
    // Register $mycarecard, $mylname and redirect to file "login_success.php"

//echo "Successful";
}

?>