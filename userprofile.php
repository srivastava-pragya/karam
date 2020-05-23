<?php
session_start();
//echo "Hello Admin, Welcome to your profile";
if($_SESSION['user']=="") 
{
	session_destroy();
	header("location:index.php?msg=3");
}
?>
<html>
<head>
<link href="css/userprofile.css" type="text/css" rel="stylesheet"/>
</head>
<body>
<div id="outer">
<div id="left">
<div id="logo"></div>
<ul>
<?php
include('includes/timeconfig.php');
		echo "Date-".$set_date."</br>";
		echo "Time-".$set_time."</br>";
?>
<li>My Profile</li>
<li> Settings</li>
<a href="logout.php"><li>Logout</li></a>
</ul>
</div>
<div id="header">USER DASHBOARD
<div id="uname"><?php echo $_SESSION['user']; ?></div>
</div>
<div id="main">
<div id="one">
<div id="a">
<div id="g"><a href="viewempleave.php" style="text-decoration:none">View leaves</a></div>
</div>
<div id="b">
<div id="h"><a href="empleave.php" style="text-decoration:none">Apply for leave</a></div>
</div>
<div id="c">
<div id="i">Update Profile</div>
</div>
</div>
<div id="two">
<div id="d">
<a href="userpass.php"><div id="j">Change Password</div></a>
</div>
<div id="e">
<div id="k"><a href="discuss.php" style="text-decoration:none">Disscussion Board</a></div>
</div>
<div id="f">
<a href="logout.php"><div id="l">Logout</div></a>
</div>
</div>
</div>
</div>
<div id="footer">
<div id="contact">Contact Us
<ul>
<li><img src="../images/phone.png" style="height:30px;width:30px;"> 8009719682</li>
<li><img src="../images/email.png" style="height:30px;width:30px;"> karam@gmail.com</li>
<li></li>

</div>
<div id="about">About Us
<p>KARAM is India's leading Personal Protective Equipment Manufacturing enterprise, and is rated as one of the finest Indian companies providing world class PPE. </p></div>
</div>
</body>
</html>