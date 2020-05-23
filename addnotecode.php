<?php
include('database/connection.php');
$role=$_POST['role'];
$note=$_POST['description'];
$title=$_POST['title'];
$query="insert into tbl_notification(title,description,role) values ('$title','$note','$role')";
mysql_query($query);
header("location:addnotification.php");
?>
