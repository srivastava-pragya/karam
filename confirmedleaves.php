<?php
session_start();
//echo $_SESSION['user'];
$email=$_SESSION['user'];
include("database/connection.php");
$query="select id from tbl_emp where email='$email'";
$res_id=mysql_query($query);
if($row=mysql_fetch_assoc($res_id))
{
	$id=$row['id'];
	//echo $id;
}

$query2="select * from tbl_leave where status='confirm' and id='$id'";
$res2=mysql_query($query2);
$count=mysql_num_rows($res2);
//echo $count;
if($count<=0)
{
	$notify="<div id='note'>You Have No Confirm Leaves.</div>";
	//$count mysql_num_rows($res2);
}
?>
<html>
<head>
<style>
th
{
	background-color:black;
	color:white;
}
#note{
	height:50px;
	width:20%;
	margin:0px auto;
	border:2px solid yellow;
	background-color:aqua;
	font-family:rockwell;
	color:blue;
	text-align:center;	
}
tr:nth-child(even)
{
	background-color:#d6d6c2;
}
tr:hover
{
	background-color:aqua;
}
</style></head>
<body>
<table border="1" align="center" style="border-collapse:collapse;background-color:lightgrey;">
<tr>
<th>from</th>
<th>to</th>
<th>reason</th>
<th>status</th>
</tr>
<?php  
while($row=mysql_fetch_assoc($res2))
{
	?>
	<tr>
	<!--<td><?php echo $row['id'];?></td>-->
	<td><?php echo $row['leave_from']; ?></td>
	<td><?php echo $row['leave_to']; ?></td>
	<td><?php echo $row['reason']; ?></td>
	<td><?php echo $row['status']; ?></td>	
</tr>
<?php
}
?>
<?php  echo @$notify;  ?>
</table>
</body>