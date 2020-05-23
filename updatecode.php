<?php
$id=$_POST['id'];
$f_name=$_POST['f_name'];
$l_name=$_POST['l_name'];
$gender=$_POST['a'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$pwd=$_POST['pwd'];
$address=$_POST['address'];
$dept=$_POST['dept'];
$designation=$_POST['designation'];
$filename=$_FILES['file']['name'];
//echo $id,$n,$fn,$g,$e,$p;
include("database/connection.php");
$query="update tbl_emp set first_name='$f_name',last_name='$l_name',gender='$gender',mobile='$mobile',email='$email',password='$pwd',address='$address',department='$dept',designation='$designation',filename='$filename' where id='$id'";
mysql_query($query);
header("location:show.php");
?>