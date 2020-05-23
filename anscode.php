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
$ques_id=$_POST['ques_id'];
$user_id=$_POST['user_id'];
$answer=$_POST['answer'];
//echo $ques_id,$user_id,$answer;
$query="insert into tbl_answer (ques_id,emp_id,answer,date,time) values ('$ques_id','$user_id','$answer',curdate(),curtime())";
$check=mysql_query($query);
if($check==true)
{
	echo "<script>alert('answer posted');window.location.href='viewans.php?ques_id=".$ques_id."';</script>";
}
else
{
	echo mysql_error();
}

?>