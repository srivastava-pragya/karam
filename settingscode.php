<?php
include('database/connection.php');
$email=$_POST['email'];
$password=$_POST['password'];
$query2="select setting,mode from tbl_settings where setting='access' and mode='$password'";
$res=mysql_query($query2);
if($row=mysql_fetch_assoc($res))
{
	header('location:settings.php');
}
else
{
	header('location:settingslogin.php');
}
?>