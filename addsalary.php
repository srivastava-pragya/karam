<?php
include('database/connection.php');
$dept=$_POST['dept'];
$desig=$_POST['desig'];
$paygrade=$_POST['paygrade'];
//echo $dept,$desig,$paygrade;
$basicsal=$paygrade*30;
$query="insert into tbl_salary(dept,desig,paygrade,basic) values('$dept','$desig','$paygrade','$basicsal')";
mysql_query($query);
header('location:salview.php');
?>
