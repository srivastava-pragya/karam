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
?>
<html>
<head>
<title>discussion forum</title>
<link href="css/dicussstyle.css" type="text/css" rel="stylesheet"/>
</head>
<body>
<center>
<form action="postcode.php" method="post">
<div id="bahar">
<div id="header">
<div id="logo"></div>
Discussion Board</div>
<div id="main">
<table>
<tr><td>
<b>Create Your Post Here</b></td><td><textarea name="ques" placeholder="ask your question" style="height:100px;width:300px;border-radius:5px;resize:none;font-family:rockwell;font-size:20px;"></textarea></td></tr>
<tr><td></td><td></td><td><input type="submit" value="post" style="border-radius:30px;height:30px;width:50px;background-color:orange;"></td></tr>
</table>
</form>
<div class="showdata">
<!-- repeat these div -->
<?php 
$query3="select * from tbl_ques";
$res3=mysql_query($query3);
//print_r($res3);
while($row3=mysql_fetch_assoc($res3))
{
?>
<div id="outer">
<div id="row1">
<b>&nbsp;&nbsp;Question:</b><?php echo $row3['ques']; ?></br></br></br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<b>Asked by:</b>
<?php 
$user_id=$row3['emp_id'];
$query4="select first_name from tbl_emp where id='$user_id'";
$res4=mysql_query($query4);
//print_r($res4);
if($row4=mysql_fetch_assoc($res4))
{
	echo $row4['first_name'];
}
?>
<b>&nbsp;&nbsp;&nbsp;&nbsp;Date:<?php echo $row3['date'];?></b></br>
</div>
<div id="row2">
<a href="viewans.php?ques_id=<?php echo $row3['q_id'];?>" style="color:yellow;">view</a>
<a href="postans.php?user_id=<?php echo $user_id; ?>&ques_id=<?php echo $row3['q_id'];?>" style="color:yellow;">comment</a>
</div>
</div>
</br>
<?php
}
?>
<!--till here-->
</div>
</center>
</div>
</div>
</body>
</html>