<?php
// Create connection
$con=mysqli_connect("localhost","root","123456","Clinic");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
} else {
  echo "<h1>Clinic Database</h1>";
}

echo "<h2>Patients</h2>";

$patients = mysqli_query($con,"SELECT * FROM Patient");

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

while($row = mysqli_fetch_array($patients)) {
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

echo "</table><p></p>";

echo "<h2>Doctors See</h2>";

$doctorssee = mysqli_query($con,"SELECT * FROM DoctorsSee");

echo "<table border='1'>
<tr>
<th>Staff ID</th>
<th>License #</th>
<th>CareCard</th>
<th>Appointment ID</th>
</tr>";

while($row2 = mysqli_fetch_array($doctorssee)) {
  echo "<tr>";
  echo "<td>" . $row2['staffID'] . "</td>";
  echo "<td>" . $row2['license'] . "</td>";
  echo "<td>" . $row2['CareCard'] . "</td>";
  echo "<td>" . $row2['appointmentID'] . "</td>";
  echo "</tr>";
}

echo "</table><p></p>";

echo "<h2>Book</h2>";

$book = mysqli_query($con,"SELECT * FROM Book");

echo "<table border='1'>
<tr>
<th>Book</th>
<th>Appointment ID</th>
</tr>";

while($row = mysqli_fetch_array($book)) {
  echo "<tr>";
  echo "<td>" . $row['CareCard'] . "</td>";
  echo "<td>" . $row['appointmentID'] . "</td>";
  echo "</tr>";
}

echo "</table><p></p>";

echo "<h2>During</h2>";

$during = mysqli_query($con,"SELECT * FROM During");

echo "<table border='1'>
<tr>
<th>Prescription ID</th>
<th>License #</th>
<th>Staff ID</th>
</tr>";

while($row = mysqli_fetch_array($during)) {
  echo "<tr>";
  echo "<td>" . $row['prescriptionID'] . "</td>";
  echo "<td>" . $row['license'] . "</td>";
  echo "<td>" . $row['staffID'] . "</td>";
  echo "</tr>";
}

echo "</table><p></p>";

echo "<h2>Janitors</h2>";

$janitors = mysqli_query($con,"SELECT * FROM Janitors");

echo "<table border='1'>
<tr>
<th>Staff ID</th>
</tr>";



while($row = mysqli_fetch_array($janitors)) {
  echo "<tr>";
  echo "<td>" . $row['staffID'] . "</td>";
  echo "</tr>";
}

echo "</table><p></p>";

echo "<h2>Pickup</h2>";

$pickup = mysqli_query($con,"SELECT * FROM Pickup");

echo "<table border='1'>
<tr>
<th>Prescription ID</th>
</tr>";

while($row = mysqli_fetch_array($pickup)) {
  echo "<tr>";
  echo "<td>" . $row['prescriptionID'] . "</td>";
  echo "</tr>";
}

echo "</table><p></p>";

echo "<h2>Prescribed Medicines</h2>";

$prescribedMedicines = mysqli_query($con,"SELECT * FROM PrescribedMedicines");

echo "<table border='1'>
<tr>
<th>Prescription ID</th>
<th>Staff ID</th>
<th>License</th>
<th>Name</th>
<th>Dosage</th>
<th>Expiry Date</th>

</tr>";

while($row = mysqli_fetch_array($prescribedMedicines)) {
  echo "<tr>";
  echo "<td>" . $row['prescriptionID'] . "</td>";
  echo "<td>" . $row['staffID'] . "</td>";
  echo "<td>" . $row['license'] . "</td>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['dosage'] . "</td>";
  echo "<td>" . $row['expiryDate'] . "</td>";
  echo "</tr>";
}

echo "</table><p></p>";

echo "<h2>Receptionists</h2>";

$receptionists = mysqli_query($con,"SELECT * FROM Receptionists");

echo "<table border='1'>
<tr>
<th>Staff ID</th>
</tr>";

while($row = mysqli_fetch_array($receptionists)) {
  echo "<tr>";
  echo "<td>" . $row['staffID'] . "</td>";
  echo "</tr>";
}

echo "</table><p></p>";


echo "<h2>Set Appointments</h2>";

$setAppointments = mysqli_query($con,"SELECT * FROM SetAppointments");

echo "<table border='1'>
<tr>
<th>Appointment ID</th>
<th>Staff ID</th>
<th>Date</th>
<th>Time</th>
<th>Address</th>
</tr>";

while($row = mysqli_fetch_array($setAppointments)) {
  echo "<tr>";
  echo "<td>" . $row['appointmentID'] . "</td>";
  echo "<td>" . $row['staffID'] . "</td>";
  echo "<td>" . $row['date'] . "</td>";
  echo "<td>" . $row['time'] . "</td>";
  echo "<td>" . $row['addr'] . "</td>";
  echo "</tr>";
}

echo "</table><p></p>";

echo "<h2>Staff</h2>";

$staff = mysqli_query($con,"SELECT * FROM Staff");

echo "<table border='1'>
<tr>
<th>Staff ID</th>
<th>Name</th>
<th>Gender</th>
<th>Phone</th>
<th>Address</th>
</tr>";

while($row = mysqli_fetch_array($staff)) {
  echo "<tr>";
  echo "<td>" . $row['staffID'] . "</td>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['gender'] . "</td>";
  echo "<td>" . $row['phone'] . "</td>";
  echo "<td>" . $row['addr'] . "</td>";
  echo "</tr>";
}

echo "</table><p></p>";

?>