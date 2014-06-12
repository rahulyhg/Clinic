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
        <h1><a href="patientmain.php">The Clinic</a>
		  <div class="pull-right">
			<div class="btn-group">
					<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
					Patient: <span class="caret"></span>
					</button>
					
				
			</div>
		  </div>
		  </h1>

        <div class="navbar">
            <div class="navbar-inner">
                <div class="container">
                    <ul class="nav">
                        <li class="active"><a href="#">View My Information</a></li>
                        <li><a href="pappointments.php">View My Appointments</a></li>	
                        <li><a href="../index.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

<form form style="text-align:center" action="grabupdated.php" method="post">
  <fieldset>
<legend>Enter your new information:</legend>


Address: <input type="text" name="addr" required><br>
Phone #: <input type="text" name="phn" required><br>

<input type="submit">
  </fieldset>
</form>

<br>


<?php
session_start();
$carecard= $_SESSION['carecard'];
echo $carecard;
$name= $_SESSION['lname'];



$_SESSION['carecard']="$mycarecard";
$_SESSION['lname']="$mylname";

?>



</body>

    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="non-empty.js"></script>  
</html>

