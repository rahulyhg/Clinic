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
                        <li><a href="showmyinfo.php">Personal Information</a></li>

                        

                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                              About Patients
                              <b class="caret"></b>
                              </a>
                            <ul class="dropdown-menu">
                              <li><a href="createpatient.php">Create New Patient</a></li>
                              <li><a href="patientsearch.php">Patient Search</a></li>
                              <li><a href="patientpickupmed.php">Patient's Medicine Pickup</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            Appointments 
                            <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                              <li><a href="viewappointments.php">View Appointments</a></li>
                              <li class="active"><a href="setappointment.php">Set Appointment</a></li>
                              <li><a href="deleteappointment.php">Delete Appointments</a></li>
                         
                            </ul>
                        </li>
                        <li><a href="../index.php">Logout</a></li>
                </ul>                        
            </div>
        </div>
    </div>


    </div>
	
	<html>
<body>

<br>

<form form style="text-align:center" action="insertnewappt.php" method="post">
 <fieldset>
<legend>Enter Appointment Information:</legend>
  <table align="center">
    <tr>
      <td align="right">AppointmentID:</td>
      <td align="left"><input type="text" name="appointmentID" required/></td>
    </tr>
    <tr>
      <td align="right">StaffID:</td>
      <td align="left"><input type="text" name="staffID" required/></td>
    </tr>   
    <tr>
      <td align="right">Date:</td>
      <td align="left"><input type="text" name="date" required/></td>
    </tr> 
    <tr>
      <td></td>
      <td align="left"><i>Must be in format: MM/DD/YYYY</i></td>
    </tr> 
    <tr>
      <td align="right">Time:</td>
      <td align="left"><input type="text" name="time" required/></td>
    </tr> 
       <tr>
      <td></td>
      <td align="left"><i>Must be in 24 hr format</i></td>
    </tr> 
    <tr>
      <td align="right">Address:</td>
      <td align="left"><input type="text" name="addr" required/></td>
    </tr> 
  </table>
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