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
        <h1><a href="#">The Clinic</a>
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
                        <li class="active"><a href="mypatients.php">View My Patients</a></li>	
                        <li><a href="myappointments.php">View My Appointments</a></li>
                        <li><a href="createprescription.php">Create Prescription</a></li> 
                        <li><a href="../index.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>



<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<form name="form1" method="post" action="checkmypatients.php">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<legend align="center">Enter Your Crediental:</legend>
<br>
</tr>
<tr>
<td width="98">StaffID</td>
<td width="6">:</td>
<td width="294"><input name="staffID" type="text" id="staffID"></td>
</tr>
<tr>
<td>License#</td>
<td>:</td>
<td><input name="license" type="text" id="license"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="Submit" value="Find"></td>
</tr>
</table>
</td>
</form>
</tr>
</table>



    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
</html>


<?php
$mycarecard=intval($_POST['staffid']); 
$mylname=$_POST['lastname']; 
echo $mycarecard;
echo $mylname;
?>


