<?php
session_start();
include("database/connection.php");
$query="select * from tbl_apply";
$res=mysql_query($query);
?>
<html>
<head>
<style>
#outer{
	height:auto;
	width:50%;
	border:1px solid;
	margin:0px auto;
}
</style>
<body>
<div id="outer">
<table border="1" style="border-collapse:collapse">
<tr>
<th>S.NO.</th>
<th>Name</th>
<th>Gender</th>
<th>DOB</th>
<th>Email</th>
<th>Mobile No.</th>
<th>CV</th>
<th>Status</th>
<th>Schedule Appointment</th>
</tr>
<?php
$a=1;
while($row=mysql_fetch_assoc($res))
{
	$applyid=$row['apply_id'];
	?>
	<tr>
	<td><?php echo $a;?></td>
	<td><?php echo $row['name'];?></td>
	<td><?php echo $row['gender'];?></td>
	<td><?php echo $row['dob'];?></td>
	<td><?php echo $row['email'];?></td>
	<td><?php echo $row['mobile'];?></td>
	<td><a href="http://localhost:70/karam/upload/<?php echo $row['CV'];?>" target=_blank>View</a></td>
	<?php $status=$row['status'];
	if($status=="notselect")
	{
		?>
	<td style="background:white;"><a style="color:red;" href='select.php?token=<?php echo $applyid;?>'><?php echo  $status; ?></a></td>
	<?php
}
else if($status=="selected")
{
	?>

	<td style="background:white;"><a style="color:blue" href='notselect.php?token=<?php echo $applyid;?>'><?php echo $status; ?></a></td>
	<td>
	<?php if($status=='selected')
	{
	?><a href="scheduleinterview.php?id=<?php echo $row['apply_id'];?>">ScheduleInterview</a>
	<?php
	}
	?>
	</td>
	
<?php	
}
?>
</tr>
<?php
$a++;
}
?>
</table>
</div>
</body>
</html>