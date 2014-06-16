<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>The Clinic</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

	
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
                              <li class="active"><a href="viewappointments.php">View Appointments</a></li>
                              <li><a href="setappointment.php">Set Appointment</a></li>
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
<p align="center"><img border="1" src="img/viewappointments.jpg" alt="The Clinic" style="center" width="800" height="350"></p>


<form form style="text-align:center" action="maxpatient.php">
    <input type="submit" value="Max/Min #ofAppointments">
</form>

<p align="center"> <br><b> OR </b><br><br> </p>

<form form style="text-align:center" action="insertallappts.php">
    <input type="submit" value="View All Appointments">
</form>

<p align="center"> <br><b> OR </b><br><br> </p>

<form form style="text-align:center" action="searchapptid.php" method="post">
  <fieldset>
Search by AppointmentID: <br><input type="text" name="apptid"><br>
<input type="submit">
  </fieldset>
</form>

<p align="center"> <br><b> OR </b><br><br> </p>

<form form style="text-align:center" action="searchcc.php" method="post">
  <fieldset>
Search by CareCard#: <br><input type="text" name="carecard"><br>
<input type="submit">
  </fieldset>
</form>

<hr>
</body>
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
</html>


