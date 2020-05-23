<?php
include('database/connection.php');
$desig=$_POST['desig'];
$dept_name=$_POST['department'];
echo $desig;
echo $dept_name;
$query="insert into tbl_desig(desig_name,dept_name,curdate) values ('$desig','$dept_name',curdate())";
mysql_query($query);
header("location:adddesignation.php");
?>
