<?php
include('database/connection.php');
$query="select distinct name from tbl_dept";
$res=mysql_query($query);
?>
<html>
<head>
<link href="css/adddesigstyle.css" type="text/css" rel="stylesheet"/>
</head>
<body>
<div id="header">
<div id="logo"></div>
Add Designation</div>
<center>
<table style="margin-top:30px;">
<form action="adddesigcode.php" method="post">

<tr>
<td>DEPARTMENT</td>
<td>
<select name="department">
<option value="">--Select option--</option>
<?php
while($row=mysql_fetch_assoc($res))
{
	?>
	<option><?php echo $row['name'];?> </option>
	<?php
}
	?>
</br>
</select></td>
</tr>





<tr>
<th>Enter new designation name</th>
<td><input type="text" name="desig"/></td></tr>
<tr>
<td><center><input type="submit" value="ADD"/></center></td>
</tr></table>
<table border="1" style="border-collapse:collapse; margin-top:10px;">
<tr>
<th>S.No.</th>
<th>DEPARTMENT</th>
<th>DESIGNATION</th>
<th>DATE</th></tr>
<?php
$query="select * from tbl_desig;";
$res=mysql_query($query);
$a=1;
while($row=mysql_fetch_assoc($res))
{
	?>
	<tr>
	<td style="cursor:not-allowed"><?php echo $a;?></td>
	<td style="cursor:not-allowed"><?php echo $row['dept_name'];?></td>
	<td style="cursor:not-allowed"><?php echo $row['desig_name'];?></td>
	<td style="cursor:not-allowed"><?php echo $row['curdate'];?></td>
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