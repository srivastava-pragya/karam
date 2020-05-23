<?php
session_start();
//echo "Hello Admin, Welcome to your profile";
//echo $_SESSION['admin']; 
if($_SESSION['admin']=="") 
{
	session_destroy();
	header("location:index.php?msg=3");
}
?>
<html>
<head>
<link href="css/profilestyle.css" type="text/css" rel="stylesheet"/>
</head>
<body>
<form action="logout.php">
<div id="outer">
<div id="header">ADMIN DASHBOARD
<div id="clogo"><img src="images/logo1.png"/></div>
</div>
<div id="main">
<div id="left">
<div id="logo"></div>
<ul>
<li>
<?php   

/* date_default_timezone_set('Asia/Kolkata');
echo "Date-".date("Y-m-d")."</br>"; 
		echo "Time-".date("H:i:s");*/
		include('includes/timeconfig.php');
		echo "Date-".$set_date."</br>";
		echo "Time-".$set_time;
?>
</li>
<li>My Profile</li>
<a href="addnotification.php"><li>Add Notification</li></a>
<a href="viewsalary.php"><li>View Salary</li></a>
<a href="settingslogin.php"><li> Settings</li></a>
<a href="logout.php"><li>Logout</li></a>
<a href="viewapplicants.php"><li>view applicants</li></a>
<a href="viewinterview.php"><li>view interview schedule</li></a>
</ul>
</div>
<div id="right">
<div id="one">
<a href="register.php"><div id="a">Add Employee</div></a>
<a href="show.php"><div id="b">View Employee</div></a>
<a href="grantleave.php"><div id="c">
<div id="j">Grant leave</div>
</div></a>
</div>
<div id="two">
<a href="adddept.php"><div id="d">Department</div></a>
<a href="payslip.php"><div id="e">Salary</div></a>
<a href="adddesignation.php"><div id="f">Designation</div></a>
</div>
<div id="three">
<a href="attendance.php"><div id="g">Add Attendance</div></a>
<a href="salary.php"><div id="h">Add Salary</div></a>
<a href="viewattendance.php"><div id="i">view attendance</div></a>
</div>
</div>
</div>
</div>
<!--<input type="submit" value="LOGOUT"/>-->
</form>
</body>
</html>