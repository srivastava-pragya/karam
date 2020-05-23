<?php
session_start();
include('database/connection.php');
$query="select * from tbl_interview";
$res=mysql_query($query);
?>
<html>
<head>
<style>
#content
{
	height:auto;
	width:400px;
	//border:1px solid;
}
</style>
</head>
<body>
<center>
<div id="content">
<table border="1" style="border-collapse:collapse">
<tr>
<thead>
<th>S.NO.</th>
<th>Name</th>
<th>Email</th>
<th>Mobile N0.</th>
<th>Date</th>
<th>Time</th>
<th>Selection Status</th>
<th>Update Selection</th>
<th>Print(LOI)</th>
</thead>
<?php
$a=1;
while($row=mysql_fetch_assoc($res))
{ 
?>
<tbody>
<td><?php echo $a; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['mobile']; ?></td>
<td><?php echo $row['date']; ?></td>
<td><?php echo $row['time']; ?></td>
<td><?php echo $row['final']; ?></td>
<?php $final=$row['final'];
if($final=="undone")
{
?>
<td><a href="final_done.php?int_id=<?php echo $row['int_id'];?>">Done</td>
<?php
}
else
{
?>
<td><a style='color:red;'href="final_notdone.php?int_id=<?php echo $row['int_id'];?>">Not done</td>
<?php
}
?>
<?php if($final=="done")
{
?>
<td><a href="joining_letter.php?name=<?php echo $row['name'];?>">Print</a></td>
<?php
}
else
{
	?>
	<td>--NA--</td>
<?php
}
?>
</tbody>
<?php
$a++;
}
?>
</table>
</div>
</center>
</body>
</html>