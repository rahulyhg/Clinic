<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>The Clinic</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	  <link rel="stylesheet" type="text/css" href="css/patientsearchbutton.css">
	

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
                              <li class="active"><a href="patientsearch.php">Patient Search</a></li>
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

<p align="center"><img border="1" src="img/patientsearch.jpg" alt="The Clinic" style="center" width="800" height="350"></p>


<form form style="text-align:center" action="insert.php" method="post">
  <fieldset>
<legend>I want to view a list of all Patient's:</legend>


<!---------------------------------------------------------------

<form>
<select name="queries" onchange="showUser(this.value)">
<option value="">I want to view a list of:</option>
<option value="1">All Patient's Information</option>
<option value="2">All Patient's CareCard#'s</option>
<option value="3">All Patient's Names</option>
<option value="4">All Patient's Genders</option>
<option value="5">All Patient's Addresses</option>
<option value="6">All Patient's Phone#'s</option>
<option value="7">All Patient's Date Of Births</option>
<option value="8">All Patient's Checkup Dates</option>
</select>
</form>
<br>
<div id="txtHint"><b></b></div>


-------------------------------------------------------------->


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
</body>
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
</html>


	

