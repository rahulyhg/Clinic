<?php
// Create connection
$con=mysqli_connect("localhost","root","123456","Clinic");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
} else {
	echo "<h1>Clinic Database</h1>";
}


$result = mysqli_query($con,"SELECT * FROM Patient");

echo "<table border='1'>
<tr>
<th>CareCard</th>
<th>Name</th>
<th>Gender</th>
<th>Address</th>
<th>Phone</th>
<th>DOB</th>
<th>Checkup Date</th>
</tr>";

while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['CareCard'] . "</td>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['gender'] . "</td>";
  echo "<td>" . $row['addr'] . "</td>";
  echo "<td>" . $row['phone'] . "</td>";
  echo "<td>" . $row['DOB'] . "</td>";
  echo "<td>" . $row['checkupDate'] . "</td>";
  echo "</tr>";
}

echo "</table>";

?>