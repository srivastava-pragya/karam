<?php
$id=$_REQUEST['token']; 
//echo $id;
include('database/connection.php');
//update status as pending;
	$query_update="update tbl_leave set status='pending' where leave_id='$id'";
	$check=mysql_query($query_update);
	if($check==true)
	{
		//echo "<script>alert('Leave Not Granted!!');window.location.href='grantleave.php';</script>";
		header("location:grantleave.php");
	}
	else
	{
		echo mysql_error();
	}


?>