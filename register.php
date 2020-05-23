<?php
include('database/connection.php');
$query="select distinct name from tbl_dept";
$query2="select distinct desig_name from tbl_desig";
$res=mysql_query($query);
$res2=mysql_query($query2);
?>
<html>
<head>
<link href="css/registerstyle.css" type="text/css" rel="stylesheet"/>
</head>
<body>

<div id="outer">
<div id="header">
<div id="logo"></div>
EMPLOYEE REGISTRATION</div>
<div id="right">
<center>
<table class="style">
<form action="registercode.php" method="post" enctype="multipart/form-data">
<tr><td>FIRST NAME</td><td><input type="text" name="f_name" placeholder="Text only" size="30" /></td>
</tr>
<tr>
<td>LAST NAME</td>
<td><input type="text" name="l_name" placeholder="Text only" size="30"/></td>
</tr>
<tr>
<td>GENDER</td>
<td> <input type="radio" name="gender" value="male" checked />Male
     <input type="radio" name="gender" value="female"/>Female</td></tr>

<tr><td>MOBILE NO.</td><td><input type="number" name="mobile"/></td></tr>
<tr><td>EMAIL</td><td><input type="email" name="email"/></td></tr>
<tr><td>PASSWORD</td><td><input type="password" name="password"/></td></tr>

<!--<table class="style">-->
<tr>
<td>ADDRESS</td>
<td><input type="text" name="address" ></td>
</tr></br></br></br>
<tr>
<td>DEPARTMENT</td>
<td>
<select name="department">
<option value="">--Select option--</option>
<!--<option>HR</option>
<option>ACCOUNTS</option>
<option>INVENTORY</option>
<option>WORKSHOP</option>
<option>MARKETING</option>-->
<?php
while($row=mysql_fetch_assoc($res))
{
	?>
	<option> <?php echo $row['name'];?> </option>
	<?php
}
	?>
</br>
</select></td>
</tr>


<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr></tr><tr></tr><tr></tr><tr></tr></tr><tr></tr><tr></tr><tr></tr>


<tr>
<td>DESIGNATION</td>
<td>
<select name="designation">
<option value="">--Select option--</option>
<!--<option>HR</option>
<option>ACCOUNTS</option>
<option>INVENTORY</option>
<option>WORKSHOP</option>
<option>MARKETING</option>-->
<?php
while($row1=mysql_fetch_assoc($res2))
{
	?>
	<option> <?php echo $row1['desig_name'];?> </option>
	<?php
}
	?>
</br>
</select></td>
</tr>


<tr><td>Upload Photo</td>
<td><input type="file" name="file" /></td>
</tr>
<tr><td><input type="submit" name="insert"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td><input type="reset"/></td></tr>
<!--</table>-->
</form>
</table>
</center>
</div>
</div>

</body>
</html>