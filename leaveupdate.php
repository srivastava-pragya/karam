<?php
$id=$_REQUEST['token']; 
//echo $id;
include('database/connection.php');
$query="select status from tbl_leave";
$res=mysql_query($query);
if($row=mysql_fetch_assoc($res))
{
	$status=$row['status'];
	//echo $row['status'];
}
if($status=="pending")
{
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
}
else if($status=="confirm")
{
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
}
else
{
	
}

?>