<?php
include("database/connection.php");
$f_name=$_POST['f_name'];
echo $f_name;
$l_name=$_POST['l_name'];
echo $l_name;
$gender=$_POST['gender'];
echo $gender;
$mobile=$_POST['mobile'];
echo $mobile;
$email=$_POST['email'];
echo $email;
$address=$_POST['address'];
echo $address;
$password=$_POST['password'];
echo $password;
$dept=$_POST['department'];
echo $dept;
$designation=$_POST['designation'];
echo $designation;
$filename=$_FILES['file']['name'];
$type=$_FILES['file']['type'];
$size=$_FILES['file']['size'];
$tmp_name=$_FILES['file']['tmp_name'];
$location="upload/";
move_uploaded_file($tmp_name,$location.$filename);
$query="insert into tbl_emp(first_name,last_name,gender,mobile,email,password,address,department,designation,filename,currdate) values ('$f_name','$l_name','$gender','$mobile','$email','$password','$address','$dept','$designation','$filename',curdate())"; 
if(mysql_query($query)) 
{
	echo "<script>alert('Data inserted successfully.');window.location.href='profile.php';</script>";
}
else
{
	//echo "<script>alert('data not inserted');window.location.href='register.php';</script>";
echo mysql_error();
}

?>