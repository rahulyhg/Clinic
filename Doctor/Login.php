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
					Doctor <span class="caret"></span>
					</button>
				<ul class="dropdown-menu" style="right: 0; left: auto"; role="menu">
					<li><a href="#">Patient</a></li>
					<li class="divider"></li>
					<li><a href="#">Doctor</a></li>
					<li><a href="Receptionist/createpatient.php">Receptionist</a></li>
			  </ul>
			</div>
		  </div>
		  </h1>

        <div class="navbar">
            <div class="navbar-inner">
                <div class="container">
                    <ul class="nav">
                        <li><a href="#">View Appointments</a></li>
						<li><a href="#">Add Prescription</a></li>
                        <li><a href="#">Update Prescription</a></li>
                        <li><a href="#">Patient Search</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>




</body>


<form form style="text-align:center" action="insert.php" method="post">
  <fieldset>
<legend>Enter Login Credentials:</legend>
<br>
 Staff ID: <input type="text" name="staffid"><br>
Surname: <input type="text" name="lastname"><br>
<input type="submit">
  </fieldset>
</form>
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
</html>