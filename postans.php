<?php
session_start();
$con=include("database/connection.php");
$email=$_SESSION['user'];
$login_query="select first_name,id from tbl_emp where email='$email'";
$res_login=mysql_query($login_query);
if($row_login=mysql_fetch_assoc($res_login))
{
	//echo $row_login['first_name'];
	//echo $row_login['id'];
	$login_id=$row_login['id'];
}
//echo $email;
if($con==true)
{ 
//echo "connection established";
 }
else
{
	echo mysql_error(); 
}
$user_id=$_REQUEST['user_id'];
//echo $user_id;
$ques_id=$_REQUEST['ques_id'];
//echo $ques_id;
$query_name="select first_name,last_name from tbl_emp where id='$user_id'";
$res_name=mysql_query($query_name);
if($row_name=mysql_fetch_assoc($res_name))
{
	echo $row_name['first_name']." ".$row_name['last_name'];
	$name=$row_name['first_name']." ".$row_name['last_name'];
}
echo $name;
$query_ques="select ques from tbl_ques where q_id='$ques_id'";
$res_ques=mysql_query($query_ques);
if($row_ques=mysql_fetch_assoc($res_ques))
{
	//echo $row_ques['question'];
	$ques=$row_ques['ques'];
}
echo $ques;
?>
<html>
<head>
</head>
<body>
<center>
<h1>Post your answer</h1>
<p>Post Information</p>
<h3>Question:<span style="color:pink;"><b><?php echo $ques;?></b></span></h3>
<p align="right" style="margin-right:40px;">Reply your answer to:<?php echo $name;?></p>
<form action="anscode.php" method="post"></br>
<input type="hidden" value="<?php echo $login_id; ?>" name="user_id">
<input type="hidden" value="<?php echo $ques_id; ?>" name="ques_id">
<table>
<tr><td>
Write your answer:</td><td><textarea name="answer" placeholder="answer" style="resize:none;height:100px;width:200px;border-radius:3px;box-shadow:0px 0px 10px grey;"></textarea></td></tr>
<tr><td></td><td><input type="submit" value="Reply"/></td></tr>
</table>
</form>
</center>
</body>
</html>