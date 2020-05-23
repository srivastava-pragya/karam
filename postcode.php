<?php
session_start();
$con=include("database/connection.php");
$email=$_SESSION['user'];
//echo $email;
if($con==true)
{
	//echo "connection established";
}
else
{
	echo mysql_error();
}
$ques=$_POST['ques'];
//echo $ques;
$query="select id from tbl_emp where email='$email'";
$res= mysql_query($query);
//print_r($res);
if($row=mysql_fetch_assoc($res))
{
	//echo $row['id'];
	$id=$row['id'];
	echo $id;
	
}
$query2="insert into tbl_ques(emp_id,ques,date,time) values ('$id','$ques',curdate(),curtime())";
$check=mysql_query($query2);
if($check==true)
{
	//echo "data inserted";
	header("location:discuss.php?msgu=posted");
}
else
{
	echo mysql_error();
}
?>