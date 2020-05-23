<?php
//$name=$_POST['name'];
//echo $name;
//$description=$_POST['description'];
//echo $description;
include('database/connection.php');
//$query="insert into tbl_dept(name,description,curdate) values('$name','$description',curdate());";
//mysql_query($query);
?>
<html>
<head>
<link href="css/adddeptstyle.css" type="text/css" rel="stylesheet"/>
</head>
<body>
<div id="header">
<div id="logo"></div>
Add Department</div>
<center>
<table style="margin-top:30px;border-radius:5px;">
<form action="adddeptcode.php" method="post">
<tr>
<th>Enter new department's name</th>
<td><input type="text" name="department" required style="width:200px;border-radius:3px;"/></td></tr>
<tr><th>Description</th>
<td><textarea name="description" style="height:100px;width:200px;resize:none;"></textarea></td>
</tr>
<tr>
<td><center><input type="submit" value="ADD"/></center></td>
</tr></table>
<table border="1" style="border-collapse:collapse;border-radius:3px;">
<tr>
<th>S.No.</th>
<th>DEPARTMENT</th>
<th>DESCRIPTION</th>
<th>DATE</th></tr>
<?php
$query="select * from tbl_dept;";
$res=mysql_query($query);
$a=1;
while($row=mysql_fetch_assoc($res))
{
	?>
	<tr>
	<td style="cursor:not-allowed"><?php echo $a;?></td>
	<td style="cursor:not-allowed"><?php echo $row['name'];?></td>
	<td style="cursor:not-allowed"><?php echo $row['description'];?></td>
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