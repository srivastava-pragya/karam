<?php
session_start();
include('database/connection.php');
$id=$_REQUEST['id'];
//echo $id;
$query="select name,email,mobile from tbl_apply where apply_id='$id'";
$res=mysql_query($query);
if($row=mysql_fetch_assoc($res))
{
	$name=$row['name'];
	$email=$row['email'];
	$mobile=$row['mobile'];
}
?>
<html>
<head>
<style>
#outer{
	height:auto;
	width:500px;
	border:1px solid;
	margin:0px auto;
	
}
</style>
</head>
<body>
<div id="outer">
<form action="scheduleintcode.php" method="post">
<table>
<tr><td>
Name of applicant:</td><td><input type="text" name="name" value=<?php echo $name;?> readonly /></td></tr>
<tr><td>
Mobile:</td><td><input type="text" name="mobile" value=<?php echo $mobile;?> readonly /></td></tr>
Email:</td><td><input type="email" name="email" value=<?php echo $email;?> readonly /></td></tr>
<tr><td>Date of interview:</td><td><input type="date" name="date"/></td></tr>
<tr><td>Time of interview:</td><td><input type="text" name="time"/></td>
<td><select>
<option value="">--select--</option>
<option>AM</option>
<option>PM</option>
</select></td></tr>
<tr><td></td><td><input type="submit"value="SCHEDULE"/></td></tr>
</table>
</form>
</div>
</body>
</html>