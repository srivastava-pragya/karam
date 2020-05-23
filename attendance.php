<?php 
session_start();
//echo $_SESSION['admin'];
$con=include('database/connection.php');
if($con==true)
{
	//echo "connection established";
}
else
{
	//echo "connection error";
}
$query="select distinct name from tbl_dept";
$res=mysql_query($query);
@$dept=$_POST['dept'];
$query3="select * from tbl_emp where department='$dept'";
$res3=mysql_query($query3);
while($row3=mysql_fetch_assoc($res3))
{
	$emp_id=$row3['id'];
	$name=$row3['first_name']." ".$row3['last_name'];
	$dept=$row3['department'];
	//echo $dept;
	$query4="insert into tbl_attendance(emp_id,emp_name,dept,status,date,time)values('$emp_id','$name','$dept','absent',curdate(),curtime())";
	$check=mysql_query($query4);
	if($check==false)
	{
		echo "<script>alert('Attendance already done')</script>";
		break;
	}
}
?>
<html>
<head>
<link href="css/attendancestyle.css" type="text/css" rel="stylesheet"/>
</head>
<body>
<div id="header">
<div id="logo"></div>
Attendance</div>
<form action="attendance.php" method="post">
</br></br></br>
<div id="all">
Select Department:<select name="dept" style="margin-top:10px;">
<option value="">--select option--</option>
<?php
while($row=mysql_fetch_assoc($res))
{
	echo "<option>".$row['name']."</option>";
}
?>
</select>
<input type="submit" value="show">
</br>
</br>
<div class="showdata">
</br>
<center>Today's Date:<input type="text" value="<?php echo date('Y-m-d');?>" disabled></center>
</br></br>

<table border="1" width="100%" style="border-collapse:collapse;text-align:center;">
<thead>
<th>S.No.</th>
<th>Emp_Name</th>
<th>Department</th>
<th>Update</th>
<th>Current Attendance</th>
<th>Date</th>
<th>Time</th>
</thead>
<tbody>
<?php
$setdate=date('Y-m-d');
$a=1;
$query2="select * from tbl_attendance where date='$setdate'";
$res2=mysql_query($query2);
$count=mysql_num_rows($res2);
if($count<=0)
{
	$notify="<h3>You have not marked todays attendance</h3>";
}
else{
	$notify="";
}
while($row2=mysql_fetch_assoc($res2))
{
	?>
	<tr>
	<td><?php echo $a;?></td>
	<td><?php echo $row2['emp_name'];?></td>
	<td><?php echo $row2['dept'];?></td>
	<td>
	<?php  
	$status=$row2['status'];
	//echo $status;
	$attid=$row2['att_id'];
	//echo $attid;
	if($status=='present')
	{
		?>
		<a style="color:red" href="javascript:update(<?php echo $attid;?>,'present');">Absent</a>
	<?php 
	}
	else
	{
		?>
		<a style="color:blue" href="javascript:update(<?php echo $attid;?>,'absent');">Present</a>
	<?php
	}
	?>
	</td>
	<td><?php $sts=$row2['status'];
	//echo $sts;
	if($sts=="present")
	{
		echo "<img src='images/check.png' height='30px' width='30px'>";
	}
	else
	{
		echo "<img src='images/del.png' height='30px' width='30px'>";
	}
	
	?>
	</td>
	
	<td><?php echo $row2['date'];?></td>
	<td><?php echo $row2['time'];?></td>
	</tr>
	<?php $a++;
}
?>
</tbody>
</table>
<script>
function update(id,status)
{
	//alert(id);
	//alert(id);
	if(status=='absent')
	{
		window.location.href='updatepresent.php?id='+id;
	}
	else
	{
		window.location.href='updateabsent.php?id='+id;
	}
	//alert(status);
	//
}
</script>
<?php echo @$notify; ?>
</div>
</div>
</form>
</body>
</html>

	