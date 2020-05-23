<?php
$int_id=$_REQUEST['int_id']; 
//echo $id;
include('database/connection.php');
	$query_update="update tbl_interview set final='done' where int_id='$int_id'";
	$check=mysql_query($query_update);
	if($check==true)
	{
		header("location:viewinterview.php");
	}
	else
	{
		echo mysql_error();
	}


?>