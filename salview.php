<?php
include('database/connection.php');
?>
<html>
<head>
</head>
<body>
<a href="#">View Paygrade</a></br>
<a href="#">View Basic Salary</a></br>
<a href="#">View Salary Report</a></br>
<table border="1" align="center" style="border-collapse:collapse;">
<tr>
<!--<th>Name</th>-->
<?php
$query4="select first_name,last_name from tbl_emp";
$res4=mysql_query($query4);
while($row4=mysql_fetch_assoc($res4))
{
	?>
	<tr>
	<!--<td><?php echo $row4['first_name']." ".$row4['last_name'];?></td>-->
</tr>
<?php
}
?>
<th>DEPARTMENT</th>
<th>DESIGNATION</th>
<th>PAYGRADE</th>
</tr>
<?php
$query2="select dept,desig,paygrade from tbl_salary";
$res2=mysql_query($query2);
while($row2=mysql_fetch_assoc($res2))
{
	?>
	<tr>
	<td><?php echo $row2['dept'];?></td>
	<td><?php echo $row2['desig'];?></td>
	<td><?php echo $row2['paygrade'];?></td>
	</tr>
	<?php
	}
?>
<table border="1" align="center" style="border-collapse:collapse;">
<tr>
<th>DEPARTMENT</th>
<th>DESIGNATION</th>
<th>BASIC SALARY</th>
</tr>
<?php
$query3="select dept,desig,basic from tbl_salary";
$res3=mysql_query($query3);
while($row3=mysql_fetch_assoc($res3))
{
	?>
	<tr>
	<td><?php echo $row3['dept'];?></td>
	<td><?php echo $row3['desig'];?></td>
	<td><?php echo $row3['basic'];?></td>
	</tr>
	<?php
	}
?>
<table border="1" align="center" style="border-collapse:collapse;">
<tr>
<th>DEPARTMENT</th>
<th>DESIGNATION</th>
<th>PAYGRADE</th>
<th>BASIC SALARY</th>
</tr>
<?php
$query4="select dept,desig,paygrade,basic from tbl_salary";
$res4=mysql_query($query4);
while($row4=mysql_fetch_assoc($res4))
{
	?>
	<tr>
	<td><?php echo $row4['dept'];?></td>
	<td><?php echo $row4['desig'];?></td>
	<td><?php echo $row4['paygrade'];?></td>
	<td><?php echo $row4['basic'];?></td>
	</tr>
	<?php
	}
?>
</table>
</body>
</html>