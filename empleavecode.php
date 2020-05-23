<?php
session_start();
echo $_SESSION['user'];
$email=$_SESSION['user'];
include("database/connection.php");
$lfrom=$_POST['lfrom'];
//echo $from;
$lto=$_POST['lto'];
//echo $to;
$reason=$_POST['reason'];
//echo $reason;
$que="select id from tbl_emp where email='$email'";   //foreign key concept
$res_1=mysql_query($que);
if($row=mysql_fetch_assoc($res_1))
{	
	$id=$row['id'];
	echo $id;
}
$query="insert into tbl_leave(id,leave_from,leave_to,reason,status,curdate) values ('$id','$lfrom','$lto','$reason','pending',curdate())";
//mysql_query($query);
if(mysql_query($query)) 
{
	echo "<script>alert('Your Leave Has been Submitted Successfully.');window.location.href='userprofile.php';</script>";
}
else
{
	echo "<script>alert('OOPs Something Wrong Try Later.');window.location.href='register.php';</script>";
	echo mysql_error();
}
//header("location:userprofile.php");
?>