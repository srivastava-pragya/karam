<?php
$id=$_REQUEST['token']; 
//echo $id;
include('database/connection.php');
//update status as confirm
	$query1_update="update tbl_leave set status='confirm' where leave_id='$id'";
	$check=mysql_query($query1_update);
	if($check==true)
	{
		//echo "<script>alert('Leave Has been Granted!!');window.location.href='grantleave.php';</script>";
		header("location:grantleave.php");
	}
	else
	{
		echo mysql_error();
	}
?>