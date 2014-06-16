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
<h2 align="center"><font size="4"> Address: 2211 Wesbrook Mall <br> Phone: 604-290-0081 <br> Mon-Sun: 7am-6pm</font></h2>

<div align="center">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2603.6987374505466!2d-123.24600219999999!3d49.2631558!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x548672c848adf0d7%3A0x1bc55f8991d319a9!2s2211+Wesbrook+Mall!5e0!3m2!1sen!2sca!4v1402809053917" width="400" height="400" frameborder="1" style="border:0"></iframe>
</div>


</body>

    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
</html>