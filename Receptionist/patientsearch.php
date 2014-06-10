<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>The Clinic</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<!--<link rel="stylesheet" type="text/css" href="css/patientbutton.css">-->
	<link rel="stylesheet" type="text/css" href="css/patientsearchbutton.css">
	




<!---------------------------------------------------------------->



<script>
function showUser(str) {
  if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  } 
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","getall.php?q="+str,true);
  xmlhttp.send();
}
</script>





<!---------------------------------------------------------------->




</head>
<body>

    <div class="container">
        <h1><a href="../index.php">The Clinic</a>
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
                    	<li><a href="receptionistmain.php">View My Information</a></li>
                        <li><a href="viewappointments.php">View Appointments</a></li>
						<li><a href="setappointment.php">Set Appointment</a></li>
                        <li><a href="createpatient.php">Create New Patient</a></li>
                        <li class="active"><a href="#">Patient Search</a></li>

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
<legend>Search By:</legend>


<!---------------------------------------------------------------->

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


<!---------------------------------------------------------------->


<!--
<a href="#" class="button"/>Show All</a>
<a href="#" class="button"/>CareCard #</a>
<a href="#" class="button"/>Name</a>
<a href="#" class="button"/>Gender</a>
<a href="#" class="button"/>Address</a>
<a href="#" class="button"/>Phone #</a>
<a href="#" class="button"/>Date Of Birth</a>
<a href="#" class="button"/>Checkup Date</a>
-->

  </fieldset>
</form>

<hr>
</body>
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
</html>


	

