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
        <h1><a href="index.php">The Clinic</a>
		  <div class="pull-right">
			<div class="btn-group">
					<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
					Viewing As: <span class="caret"></span>
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
						<li><a href="#">Set Appointment</a></li>
                        <li><a href="#">Create New Patient</a></li>
                        <li><a href="#">Patient Search</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>

<h1 align="center"> Welcome to our Clinic!</h1>
<p align="center"><img border="1" src="img/MainPic.jpg" alt="The Clinic" style="center" width="800" height="350"></p>


</body>

    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
</html>