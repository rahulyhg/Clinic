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
					Patient <span class="caret"></span>
					</button>
				<ul class="dropdown-menu" style="right: 0; left: auto"; role="menu">
					<li class="active"><a href="#">Patient</a></li>
					<li class="divider"></li>
					<li><a href="../Doctor/dlogin.php">Doctor</a></li>
					<li><a href="../Receptionist/rlogin.php">Receptionist</a></li>
			  </ul>
			</div>
		  </div>
		  </h1>

        <div class="navbar">
            <div class="navbar-inner">
                <div class="container">
                    <ul class="nav">
                    </ul>
                </div>
            </div>
        </div>
    </div>


<!--
<form form style="text-align:center" action="checklogin.php" method="post">
  <fieldset>
<legend>Enter Your Information:</legend>
<br>


CareCard#: <input name="carecard" type="text" id="carecard" required><br>
Surname: <input name="lname" type="text" id="lname" required><br>
    <i> *Surname has to be in format: A. Jolie<i><br><br>
<input type="submit" name="Submit" value="Login">
  </fieldset>
</form>
-->

<form form style="text-align:center" action="checklogin.php" method="post">
 <fieldset>
<legend>Enter Your Information:</legend>
  <table align="center">
    <tr>
      <td align="right">Carecard#:</td>
      <td align="left"><input type="text" name="carecard" required/></td>
    </tr>
    <tr>
      <td align="right">Name:</td>
      <td align="left"><input type="text" name="lname" required/></td>
    </tr>    
    <tr>
        <td></td>
        <td align="left"><i> *Name has to be in format: A. Jolie<i><br><br></td>
    </tr>
  </table>
 <input type="submit" name="Submit" value="Login">
</fieldset>
</form>


    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
</html>
