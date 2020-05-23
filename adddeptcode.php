<?php
include('database/connection.php');
$dept=$_POST['department'];
$des=$_POST['description'];
$query="insert into tbl_dept(name,description,curdate) values ('$dept','$des',curdate())";
mysql_query($query);
header("location:adddept.php");
?>
