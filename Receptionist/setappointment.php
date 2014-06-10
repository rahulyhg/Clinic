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
        <h1><a href="../index.php">The Clinic</a>
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
                        <li><a href="receptionistmain.php">View My Information</a></li>
                        <li><a href="viewappointments.php">View Appointments</a></li>
						<li class="active"><a href="setappointment.php">Set Appointment</a></li>
                        <li><a href="createpatient.php">Create New Patient</a></li>
                        <li><a href="patientsearch.php">Patient Search</a></li>
                        <li><a href="../index.php">Logout</a></li>

                    </ul>
                </div>
            </div>
        </div>


    </div>
	
	<html>
<body>

<br>

<form form style="text-align:center" action="insert.php" method="post">
  <fieldset>
<legend>Enter Appointment Information:</legend>

AppointmentID: <input type="text" name="appointmentID"><br>
StaffID: <input type="text" name="staffID"><br>
Date: <input type="text" name="date"><br>
Time: <input type="text" name="time"><br>
Address: <input type="text" name="addr"><br><br>

<input type="submit">
  </fieldset>
</form>

<hr>
</body>
</html>

    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
	

</div>


	
	
	
	
</body>