<?php
include('database/connection.php');
?>
<html>
<head>
<link href="css/adddeptstyle.css" type="text/css" rel="stylesheet"/>
</head>
<body>
<div id="header">
<div id="logo"></div>
Add Notification</div>
<center>
<table style="margin-top:30px;border-radius:5px;">
<form action="addnotecode.php" method="post">
</br>
Select type of user<select name="role">--select--
<option value="">--select--</option>
<option>Public</option>
<option>Private</option>
</select>
<tr><th>Title</th><td><input type="text" name="title"/></td></tr>
<tr><th>Add new notification</th>
<td><textarea name="description" style="height:100px;width:200px;resize:none;"></textarea></td>
</tr>
<tr>
<td><center><input type="submit" value="ADD"/></center></td>
</tr></table>
<table border="1" style="border-collapse:collapse;border-radius:3px;">
<tr>
<th>S.No.</th>
<th>TITLE</th>
<th>DESCRIPTION</th>
<th>ROLE</th>
<th>STATUS</th></tr>
<?php
$query="select * from tbl_notification;";
$res=mysql_query($query);
$a=1;
while($row=mysql_fetch_assoc($res))
{
	$note_id=$row['note_id'];
	?>
	<tr>
	<td style="cursor:not-allowed"><?php echo $a;?></td>
	<td style="cursor:not-allowed"><?php echo $row['title'];?></td>
	<td style="cursor:not-allowed"><?php echo $row['description'];?></td>
	<td style="cursor:not-allowed"><?php echo $row['role'];?></td>
	<?php  $status=$row['status'];  
if($status=="Show")
{
	?>
	<td style="background:white;"><a style="color:red;" href='shownote.php?token=<?php echo $note_id;?>'><?php echo  $status; ?></a></td>
<?php
}
else
{
	?>
	<td style="background:white;"><a style="color:blue" href='hidenote.php?token=<?php echo $note_id;?>'><?php echo $status; ?></a></td>
<?php	
}
?>
	</tr>
	<?php
	$a++;
}
?>
</table>
</form>
</center>
</body>
</html>