<?php
session_start();
include('database/connection.php');
@$note_id=$_REQUEST['note_id'];
//echo $note_id;
$query="select title,description from tbl_notification where note_id='$note_id'";
$res=mysql_query($query);
if($row=mysql_fetch_assoc($res))
{
	$title=$row['title'];
	$description=$row['description'];
}
?>
<html>
<head>
<style>
#form
{
	height:180px;
	width:80%;
	border:2px solid;
	margin:0px auto;
	margin-top:20px;
	box-shadow:0px 0px 10px gray;
	background-color:#e8e8ff;
}
#outer{
	height:auto;
	width:100%;
	//border:1px solid;
}
</style>
</head>
<body>
<div id="outer">
<center>
<h1>JOB DESCRIPTION</h1>
<h3>Job Title/Post: <?php echo @$title;?></h3>
<h4>Job Description:<?php echo @$description;?></h4>
<button id="apply" style="display:block;">Apply Here </button>
</div>
<div id="form" style="display:none;">
<form action="apply.php" method="post" enctype="multipart/form-data">
<table width="100%">
<tr><td>
Name:</td><td><input type="text" name="name"/></td></tr>
<tr><td>GENDER</td>
<td> <input type="radio" name="gender" value="male" checked />Male
     <input type="radio" name="gender" value="female"/>Female</td></tr>
	<tr><td> DOB</td><td><input type="date" name="dob"/></td></tr>
	<tr><td>Email:</td><td><input type="email" name="email"/></td></tr>
	<tr><td>Contact Information:</td><td><input type="number" name="mobile"/></td></tr>
	<tr><td>Upload CV</td><td><input type="file" name="file"/></td></tr>
	<tr><td></td><td><input type="submit" value="apply"/></td></tr>
	</table>
	</form>
</div>
</center>
<script>
var form=document.getElementById("form");
var apply=document.getElementById("apply");
apply.onclick=function()
{
	form.style="display:block";
	apply.style="display:none";
}


</script>
</body>
</html>
