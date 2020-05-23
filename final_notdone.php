<?php
$int_id=$_REQUEST['int_id']; 
//echo $id;
include('database/connection.php');
	$query1_update="update tbl_interview set final='undone' where int_id='$int_id'";
	$check=mysql_query($query1_update);
	if($check==true)
	{
		header("location:viewinterview.php");
	}
	else
	{
		echo mysql_error();
	}
?>