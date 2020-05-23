<?php
$attid=$_REQUEST['id'];
include('database/connection.php');
echo $attid;
$query_mode="select mode from tbl_settings";
$res_mode=mysql_query($query_mode);
if($row_mode=mysql_fetch_assoc($res_mode))
{
	//print_r($row_mode);
	$mode=$row_mode['mode'];
}
//echo $mode;
if($mode=="locked")
{
	echo "<script>alert('Cannot Update Attendance!!');window.location.href='attendance.php';</script>";
}
else
{		//mode unlocked
	$query="update tbl_attendance set status='absent' where att_id='$attid'";

	$check=mysql_query($query);
	if($check==true)
	{
		//echo "updated successfully";
		header('location:attendance.php');
	}
	else
	{
		echo mysql_error();
	}
}
?>