<?php
$applyid=$_REQUEST['token']; 
include('database/connection.php');
	$query1_update="update tbl_apply set status='notselect' where apply_id='$applyid'";
	$check=mysql_query($query1_update);
	if($check==true)
	{
		header("location:viewapplicants.php");
	}
	else	
	{
		echo mysql_error();
	}
?>