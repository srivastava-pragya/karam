<?php
session_start();
//echo $_SESSION['admin'];
$email=$_SESSION['admin'];
//echo $email;
$con=include('database/connection.php');
if($con==true)
{
	echo "connection established";
}
else
{
	echo "connection error";
}
?>
<html>
<head>
<style>
#outer{
	height:auto;
	width:500px;
	border:1px solid;
}
</style>
</head>
<body>
<center>
<form action="settingscode.php" method="post">
<div id="outer">
<h3>Get Access to Settings</h3>
<table>
<tr><td>Email:</td><td><input type="email" name="email" value="<?php echo $email;?>" readonly /></td></tr>
<tr><td>Passcode:</td><td><input type="password" name="password" /></td></tr>
<tr><td></td><td><input type="submit" value="Get Access"/></td></tr>
</table>
</div>
</form>
</center>
</body>
</html>