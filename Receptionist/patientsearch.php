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
                    	<li><a href="receptionistmain.php">View My Information</a></li>
                        <li><a href="viewappointments.php">View Appointments</a></li>
						<li><a href="setappointment.php">Set Appointment</a></li>
                        <li><a href="createpatient.php">Create New Patient</a></li>
                        <li class="active"><a href="#">Patient Search</a></li>
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


<a href="searchq/allinfo.php" class="button"/>Information</a>
<a href="searchq/allcc.php" class="button"/>CareCard#'s</a>
<a href="searchq/allname.php" class="button"/>Names</a>
<a href="searchq/allgender.php" class="button"/>Genders</a>
<a href="searchq/alladdr.php" class="button"/>Addresses</a>
<a href="searchq/allphn.php" class="button"/>Phone#'s</a>
<a href="searchq/alldob.php" class="button"/>Date Of Birth</a>
<a href="searchq/allcheckup.php" class="button"/>Checkup Dates</a>

  </fieldset>
</form>

<hr>
</body>
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
</html>


	

