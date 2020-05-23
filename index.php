<?php
//error_reporting(0);
session_start();
$con=include("database/connection.php");
if($con==true)
{
	//echo "connection created";
}
else
{
	//echo "error";
}

//echo $session['admin'];
$msg=@$_REQUEST['msg'];
if($msg==1)
{
	$validate="Inavlid ID or Password ";
}
if($msg==2)
{
	$notice="Logout Successfully ";
}
if($msg==3)
{
	$notice="Please Login ";
}
@$msga=$_REQUEST['msga'];
if($msga=='changed')
{
	$note="<b style='color:green'>Password changed successfully.Please login again</br></b>";
}
$query_notify="select * from tbl_notification where status='show'";
$res_notify=mysql_query($query_notify);
//echo mysql_error($res_notify);
	
?>
<html>
<head>
<link href="css/style.css" type="text/css" rel="stylesheet"/>
</head>
<body>
<form action="logincode.php" method="post">
<div id="outer">
<a href="http://karam.in"><div id="header"></div></a>
<div id="notify">
<div id="one">IMPORTANT UPDATES</div>
<div id="two">
<marquee behavior="alternate" width="100%" direction="left" height="30px;" onmouseover="this.stop();" onmouseout="this.start();" style="color:red;font-family:rockwell;font-size:20px;">
<?php 
$a=1;
while($row_notify=mysql_fetch_assoc($res_notify))
{
	$update=$row_notify['title'];
	$role=$row_notify['role'];
	$note_id=$row_notify['note_id'];
?>
<a href="javascript:role(<?php echo $note_id;?>,'<?php echo $role;?>');"><?php echo $a,".",$update;?></a> | 
<?php
$a++;
}
?>

</marquee>

</div>
</div>
<div id="login">
<?php echo @$note; ?>
<table>
</br></br>
<form action="logincode.php" method="post">
<center>
<select name="option" style="height:30px;width:150px;border-radius:5px;">
<option>Who are you?</option>
<option>User</option>
<option>Admin</option>
</select>
<tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email:</td><td><input type="email" name="email" /><span style="color:red;height:100px;width:400px;"><?php echo @$validate; ?></span></td></tr>
<tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Password:</td><td><input type="password" name="password"/></td></tr>
<tr><td></td><td></td><td><input type="submit" value="LOGIN" style="width:180px; background-color:blue; color:white; border:1px solid blue;"/></td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="forgot password" style="color:red;font-size=3">Forgot Password?</a></td></tr>
</br>
<center><?php  echo @$notice;?></center>
</center>
</table>
</div>
<div id="footer">
<div id="left">
PRAGYA | Copyright: &copy; 2019.All rights reserved.</div>
<div id="middle">
Address: D-95, Sector- 2, Noida- 201301 Delhi NCR, India</div>
<div id="right">
Phones: +91 120 4734400;&nbsp;&nbsp;&nbsp;&nbsp;
E-mail: karam@karam.in</div>
</div>
</div>
</form>
</body>
<script>
function role(id,role)
{
	//alert(role);
	//alert(id);

	if(role=="Private")
	{
		alert("You are Registered User Please Login");
	}
	else
	{
		window.open('public_notification.php?note_id='+id+'','_blank');
	}
}
</script>
</html>