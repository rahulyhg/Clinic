
<?php
session_start();
if (isset($_SESSION['mycarecard']))
{
  $mycarecard = $_SESSION['mycarecard'];
}
else
{
  $mycarecard = intval( $_POST['cc']);
}
//Create connection
$con=mysqli_connect("localhost","root","0123456","clinic");
//Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>The Clinic</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/patientbutton.css">
	
</head>
<body>

    <div class="container">
        <h1><a href="patientmain.php">The Clinic</a>
		  <div class="pull-right">
			<div class="btn-group">
					<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
					Patient: <span class="caret"></span>
					</button>
					
				
			</div>
		  </div>
		  </h1>

        <div class="navbar">
            <div class="navbar-inner">
                <div class="container">
                    <ul class="nav">
                        <li class="active"><a href="#">View My Information</a></li>
                        <li><a href="pappointments.php">View My Appointments</a></li>
                        <li><a href="viewmap.php">View Map</a></li>
                        <li><a href="../index.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

<!--<h1 align="center"> Welcome to our Clinic!</h1>-->
<h2 align="center"> Welcome to our Clinic!</h2>

<p align="center"><img border="1" src="img/patientlogin.jpg" alt="The Clinic" style="center" width="800" height="350"></p>


<br>

<?php






$all="SELECT * FROM patient WHERE CareCard=$mycarecard ";

$result=mysqli_query($con,$all);

$count=mysqli_num_rows($result);


//$patients = mysqli_query($con,"SELECT * FROM Patient");

echo "<center><h2>Personal Information</h2>";


echo "<center><table border='5' style='width:1000px'>
<tr>
<th>CareCard</th>
<th>Name</th>
<th>Gender</th>
<th>Address</th>
<th>Phone</th>
<th>DOB</th>
<th>Checkup Date</th>
</tr>";

while($row = mysqli_fetch_array($result)){
   echo "<tr>";
  echo '<td align="center">' . $row['CareCard'] . "</td>";
  echo '<td align="center">' . $row['name'] . "</td>";
  echo '<td align="center">'. $row['gender'] . "</td>";
  echo '<td align="center">' . $row['addr'] . "</td>";
  echo '<td align="center">'. $row['phone'] . "</td>";
  echo '<td align="center">' . $row['DOB'] . "</td>";
  echo '<td align="center">' . $row['checkupDate'] . "</td>";
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

?>

<br><br>
<p align="center"><i> See something wrong? Click to update information!</i>
<form form style="text-align:center" action="updateinfo.php" method="post">
    <input type="submit" value="Update Information">
    <input type="hidden" name="cc" value = <?php echo $mycarecard ?>>
</form>
</p>


</body>

    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
</html>


