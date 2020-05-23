<?php
$id=$_REQUEST['token'];
include("database/connection.php");
$query="delete from tbl_emp where id='$id'";
mysql_query($query);
header("location:show.php");
?>
