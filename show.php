<?php
include("database/connection.php");
$query="select * from tbl_emp"; 
$res=mysql_query($query);  
?>
<html>
<head>
<link href="css/showstyle.css" type="text/css" rel="stylesheet"/>
</head>
<body>
<div id="header">
<div id="logo"></div>
Employee's Records</div>
<div id="main">
<table border="1" align="center" style="border-collapse:collapse;">
<tr>
<th>S.No.</th>
<th>First Name</th> 
<th>Last Name</th>
<th>Gender</th>
<th>Mobile No.</th>
<th>Email</th>
<th>Password</th>
<th>Address</th>
<th>Department</th>
<th>Designation</th>
<th>Emp_photo</th>
<th>D.O.Registration</th>
<th>Update</th>
<th>Delete</th>
</tr>
<?php
$a=1;
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<tr>
<td style="cursor:not-allowed"><?php echo $a;?></td>
<td style="cursor:not-allowed"><?php echo $row['first_name']; ?></td>
<td style="cursor:not-allowed"><?php echo $row['last_name']; ?></td>
<td style="cursor:not-allowed"><?php echo $row['gender']; ?></td>
<td style="cursor:not-allowed"><?php echo $row['mobile']; ?></td>
<td style="background: #ffffb3;"><?php echo $row['email']; ?></td>
<td><?php $password=$row['password']; ?><input style="background:lightgrey;cursor:not-allowed;"type="password" value="<?php echo $password;?>" title="<?php echo $password;?>" onclick="alert('password cannot be edited')" readonly></td>
<td style="cursor:not-allowed"><?php echo $row['address']; ?></td>
<td style="cursor:not-allowed"><?php echo $row['department']; ?></td>
<td style="cursor:not-allowed"><?php echo $row['designation']; ?></td>
<td style="cursor:not-allowed"><a  target="_blank" href="upload/<?php echo $row['filename']; ?>"><img height="40px" width="40px" src="upload/<?php echo $row['filename']; ?>" style="border-radius:50%;"></a></td>
<td style="cursor:not-allowed"><?php echo $row['currdate']; ?></td>
<td><a href="update.php?id=<?php echo $row['id'];?>"><img src="images/pencil.png"style="height:30px;width:30px;"/></a></td>
<td><a href="javascript:ask(<?php echo $row['id'];?>);"><img src="images/delete.png" style="height:30px;width:30px;"/></a></td>

</tr>
<?php
$a++;
}
?>
</table>
<script>
function ask(id)
{
	//alert(id);
	if(confirm('Are you sure you want to Delete?'))
	{		
			//alert("i am okay");
			window.location.href="delete.php?token="+id+"";	
	}
	else
	{
		window.location.href='show.php';
	}
}
</script>
</div>
</body>
</html>