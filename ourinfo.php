<!DOCTYPE html>
<?php


// Put this code in first line of web page.  
session_start();
session_destroy();

//Create connection
$con=mysqli_connect("localhost","root","0123456","clinic");
//Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>

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
					Login As: <span class="caret"></span>
					</button>
					
				<ul class="dropdown-menu" style="right: 0; left: auto"; role="menu">
					<li><a href="Patient/login.php">Patient</a></li>
					<li class="divider"></li>
					<li><a href="Doctor/dlogin.php">Doctor</a></li>
					<li><a href="Receptionist/rlogin.php">Receptionist</a></li>
			  </ul>
			</div>
		  </div>
		  </h1>

        <div class="navbar">
            <div class="navbar-inner">
                <div class="container">
                    <ul class="nav">
                        <li><a href="index.php">About Us</a></li>
						<li class="active"><a href="#">Contact Information</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

<h1 align="center"> Welcome to our Clinic!</h1>
<h2 align="center"><font size="4"> Address: 42 Wallaby <br> Phone: 604-290-0081 <br> Mon-Sun: 7am-6pm</font></h2>


</body>

    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
</html>