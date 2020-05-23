<?php
$id=$_REQUEST['id'];  //ye value url se aayi hai
//echo $id;
include("database/connection.php");
$query="select * from tbl_emp where id='$id'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{  
?>
<html>
<head>
<link href="css/updatestyle.css" type="text/css" rel="stylesheet"/>
</head>
<body>
<div id="header">
<div id="logo"></div>
Update employee data</div>
<div id="main">
<table>
<form action="updatecode.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?php echo $row['id'];?>" />
<tr><td>First Name</td><td><input type="text" name="f_name" value="<?php echo $row['first_name'];?>"/></td></tr>
<tr><td>Last name</td><td><input type="text" name="l_name" value="<?php echo $row['last_name'];?>"/></td></tr>
<tr><td>Gender</td><td><input type="radio" name="a" value="male" <?php if($row['gender']=='male') { ?>checked <?php }?> />Male</td>
<td><input type="radio" name="a" value="female" <?php if($row['gender']=='female') { ?> checked <?php } ?> />Female</td></tr>
<tr><td>Mobile</td><td><input type="number" name="mobile" value="<?php echo $row['mobile'];?>"/></td></tr>
<tr><td>E-mail</td><td><input type="email" name="email" value="<?php echo $row['email'];?>"/></td></tr>
<tr><td>Password</td><td><input type="text" name="pwd" value="<?php echo $row['password'];?>"/></td></tr>
<tr><td>Address</td><td><input type="address" name="address" value="<?php echo $row['address'];?>"/></td></tr>
<tr><td>Department</td><td><select name="dept" >
<option value="<?php echo $row['department'];?>"><?php echo $row['department'];?></option>
<?php
$query_dept="select distinct name from tbl_dept";
$res_dept=mysql_query($query_dept);
while($row_dept=mysql_fetch_assoc($res_dept))
{
	
	echo "<option>".$row_dept['name']."</option>";
	
}
?>
<tr><td>Designation</td><td><select name="designation" >
<option value="<?php echo $row['designation'];?>"><?php echo $row['designation'];?></option>
<?php
$query_dept="select distinct desig_name from tbl_desig";
$res_dept=mysql_query($query_dept);
while($row_dept=mysql_fetch_assoc($res_dept))
{
	
	echo "<option>".$row_dept['desig_name']."</option>";
}
?>





</select>
</td></tr>
<tr><td>Filename</td><td><input type="file" name="file" value="<?php echo $row['filename'];?>"/></td></tr>
<tr><td><td><input type="submit" value="Update"/></td></td></tr>
</form>
<?php
	}
?>
</table>
</div>
</body>
</html>