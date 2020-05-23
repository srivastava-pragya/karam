<?php
session_start();
$con=include("database/connection.php");
if($con==true)
{
	//echo "connection established";
}
else
{
	//echo mysql_error();
}
@$msga=$_REQUEST['msga'];
//echo $msg;
if($msga=="notmatched")
{
	$notify1="<b style='color:red;'>sorry! old password didn't matched</b>";
}
if($msga=="oldnewnotmatched")
{
	$notify2="<b style='color:red;'>sorry! old and new password didn't matched</b>";
}
$email=$_SESSION['user'];
//echo $email;

?>
<html>
<head>
<link href="css/changepassstyle.css" type="text/css" rel="stylesheet"/>
</head>
<body>
<div id="header">
<div id="logo"></div>
Change Password</div>
<form action="userpasscode.php" method="post">
<center>
<div id="main">
<table>
<tr><td>Enter old password</td><td><input type="text" name="old" required /></br><?php echo @$notify1;?></td></tr>
<tr><td>Enter new password</td><td><input type="text" name="new" required /></br><?php echo @$notify2;?></td></tr>
<tr><td>Confirm new password</td><td><input type="text" name="cnf" required /></br><?php echo @$notify2;?></td></tr>
<tr><td></td><td><input type="submit" value="change"/></td></tr>
</div>
</center>
</form>
</body>
</html>