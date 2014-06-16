<?php

$q = intval($_GET['q']);
echo $_GET["q"];

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


$all="SELECT * FROM patient";
$carecard="SELECT Care FROM patient";
$name="SELECT name FROM patient";
$gender="SELECT gender FROM patient";
$addr="SELECT addr FROM patient";
$phn="SELECT phone FROM patient";
$dob="SELECT DOB FROM patient";
$checkup="SELECT checkupDate FROM patient";




$result=mysqli_query($con,$all);

$count=mysqli_num_rows($result);

//$patients = mysqli_query($con,"SELECT * FROM Patient");

echo "<center><table border='1'>
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

}
echo "</table><p></p></center>";



// If result matched $mycarecard and $mylname, table row must be 1 row
if($count == 0){
echo "No Patients registered.";

}
else {
    // Register $mycarecard, $mylname and redirect to file "login_success.php"



echo "Successful";
}

?>