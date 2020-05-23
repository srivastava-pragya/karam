<?php
$applyid=$_REQUEST['token']; 
//echo $applyid;

include('database/connection.php');
	$query_update="update tbl_apply set status='selected' where apply_id='$applyid'";
	$check=mysql_query($query_update);
	if($check==true)
	{
		header("location:viewapplicants.php");
	}
	else
	{
		echo mysql_error();
	}


?>