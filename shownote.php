<?php
$note_id=$_REQUEST['token']; 
//echo $id;
include('database/connection.php');
	$query_update="update tbl_notification set status='Hide' where note_id='$note_id'";
	$check=mysql_query($query_update);
	if($check==true)
	{
		header("location:addnotification.php");
	}
	else
	{
		echo mysql_error();
	}


?>