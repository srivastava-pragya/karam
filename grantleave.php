<?php
include("database/connection.php");
$query="select * from tbl_leave"; 
$res=mysql_query($query);
?>
<html>
<head>
<link href="css/grantleavestyle.css" type="text/css" rel="stylesheet"/>
</head>
<body>
<div id="header">
<div id="logo"></div>
Employee Leave Permission</div>
<table border="1" align="center" style="border-collapse:collapse;margin-top:100px;height:50%;width:100%">
<tr>
<th>S.No.</th>
<th>Emp_Name</th>
<th>From</th> 
<th>To</th>
<th>Reason</th>
<th>Date of Apply</th>
<th>Status</th>
</tr>
<?php
$a=1;
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$leaveid=$row['leave_id'];
?>
<tr>
<td> <?php echo $a;?></td>
<td ><?php 
$empid=$row['id'];
$query_2="select first_name,last_name from tbl_emp where id='$empid'";
$res_2=mysql_query($query_2);
if($row_2=mysql_fetch_assoc($res_2))
{
	echo $row_2['first_name']." ".$row_2['last_name'];
}
?></td>
<td ><?php echo $row['leave_from']; ?></td>
<td ><?php echo $row['leave_to']; ?></td>
<td ><?php echo $row['reason']; ?></td>
<td ><?php echo $row['curdate']; ?></td>
<?php  $status=$row['status'];  
if($status=="confirm")
{
	?>
	<td style="background:white;"><a style="color:red;" href='leaveconfim.php?token=<?php echo $leaveid;?>'><?php echo  $status; ?></a></td>
<?php
}
else
{
	?>
	<td style="background:white;"><a style="color:blue" href='leavepending.php?token=<?php echo $leaveid;?>'><?php echo $status; ?></a></td>
<?php	
}
?>



</tr>
<?php
$a++;
}
?>
</table>
</body>
</html>