<!DOCTYPE html>
<?php
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
        <h1><a href="doctormain.php">The Clinic</a>
		  <div class="pull-right">
			<div class="btn-group">
					<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
					Doctor: <span class="caret"></span>
					</button>
					
				
			</div>
		  </div>
		  </h1>

        <div class="navbar">
            <div class="navbar-inner">
                <div class="container">
                    <ul class="nav">
                        <li><a href="doctormain.php">View My Information</a></li>
                        <li><a href="mypatients.php">View My Patients</a></li>	
                        <li><a href="myappointments.php">View My Appointments</a></li>
                        <li><a href="createprescription.php">Create Prescription</a></li> 
                        <li class="active"><a href="searchprescription.php">Search Prescription</a></li> 
                        <li><a href="../index.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


<br>

<form form style="text-align:center" action="getprescription.php" method="post">
  <fieldset>
<legend>Enter Patient's Information:</legend>

CareCard#: <input type="text" name="carecard"><br>
Name: <input type="text" name="name"><br>


<input type="submit">
  </fieldset>
</form>

<hr>


</body>

    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
</html>





