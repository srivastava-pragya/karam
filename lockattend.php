<?php
include('database/connection.php');
session_start();
//echo $_SESSION['admin'];
$email=$_SESSION['admin'];
//echo $email;
$con=include('database/connection.php');
if($con==true)
{
	//echo "connection established";
}
else
{
	echo "connection error";
}
$query="select mode from tbl_settings";
$res=mysql_query($query);
if($row=mysql_fetch_assoc($res))
{
	$mode= $row['mode'];
	if($mode==locked)
	{
		$query2="update tbl_settings set mode='unlocked'";
		mysql_query($query2);
		header("location:settings.php");
	}
	else if($mode==unlocked)
	{
		$query3="update tbl_settings set mode='locked'";
		mysql_query($query3);
		header("location:settings.php");
	}
}

?>
