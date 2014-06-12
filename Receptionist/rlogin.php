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
           <h1><a href="receptionistmain.php">The Clinic</a>
          <div class="pull-right">
            <div class="btn-group">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    Receptionist <span class="caret"></span>
                    </button>
                <ul class="dropdown-menu" style="right: 0; left: auto"; role="menu">
                    <li><a href="../Patient/login.php">Patient</a></li>
                    <li class="divider"></li>
                    <li><a href="../Doctor/dlogin.php">Doctor</a></li>
                    <li class="active"><a href="#">Receptionist</a></li>
              </ul>
            </div>
          </div>
          </h1>

        <div class="navbar">
            <div class="navbar-inner">
                <div class="container">
                    <ul class="nav">
                       <!-- <li><a href="#">View My Information</a></li> -->
                    </ul>
                </div>
            </div>
        </div>
    </div>





</body>



<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<form name="form1" method="post" action="rchecklogin.php">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<legend align="center">Enter Your Information:</legend>
<br>
</tr>
<tr>
<td width="98">StaffID</td>
<td width="6">:</td>
<td width="294"><input name="staffID" type="text" id="staffID"></td>
</tr>

<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="Submit" value="Login"></td>
</tr>
</table>
</td>
</form>
</tr>
</table>



    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
</html>

