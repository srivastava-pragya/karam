<?php
session_start();
include('database/connection.php');
$name=$_POST['name'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$filename=$_FILES['file']['name']; 
$tmp_name=$_FILES['file']['tmp_name'];
$location="upload/";
move_uploaded_file($tmp_name,$location.$filename);
$query="insert into tbl_apply(name,gender,dob,email,mobile,CV,date,time) values ('$name','$gender','$dob','$email','$mobile','$filename',curdate(),curtime())";
$check=mysql_query($query);
if($check==true)
{
	echo "<script>alert('Thank you for Applying We will get Back to you Soon.');window.location.href='index.php';</script>";
}
else
{
	mysql_error();
}
?>
