<?php
$note_id=$_REQUEST['token']; 
//echo $id;
include('database/connection.php');
	$query1_update="update tbl_notification set status='Show' where note_id='$note_id'";
	$check=mysql_query($query1_update);
	if($check==true)
	{
		header("location:addnotification.php");
	}
	else
	{
		echo mysql_error();
	}
?>