<?php
session_start();
$email=$_POST['email'];
$password=$_POST['password'];
$option=$_POST['option'];
echo $option;
if($option=="User")
{
	include("database/connection.php");
	$query="select * from tbl_emp where email='$email' and password='$password'";
	$res=mysql_query($query);
	if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$_SESSION['user']=$email;
	header("location:userprofile.php");	
}
else
{
	header("location:index.php?msg=1");
}
	//header("location:userprofile.php");
}
elseif($option=="Admin")
{
//echo $email,$password;
include("database/connection.php");
$query="select * from tbl_admin where email='$email' and password='$password'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$_SESSION['admin']=$email;
	header("location:profile.php");	
}
else
{
	header("location:index.php?msg=1");
}
}
else
{
	header("location:index.php");
}
?>