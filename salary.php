<?php
session_start();
//echo $_SESSION['admin'];
$email=$_SESSION['admin'];
//echo $email;
$con=include('database/connection.php');
if($con==true)
{
	//echo "connection established";
}
else
{
	echo "connection error";
}
@$dept=$_REQUEST['token'];
//echo $dept;
@$desig=$_REQUEST['tokendesig'];
//echo $desig;

?>
<html>
<head>
<style>
.showdata
{
	height:auto;
	width:100%;
	border:1px solid;
}
tr:nth-child(even)
{
	background-color:lightblue;
}
table{
	border:1px solid;
}
.formdiv
{
	height:100px;
	width:70%;
	font-family:rockwell;
	border:1px solid gray;
	background-color:#cce8ff;
}
</style>
<script>


</script>
</head>
<body>
<center>
<hr>
select department<select onchange="seldept();" id="dept">
<option value=""><?php if($dept=="")
{
	echo "--select--";
}
else
{
	echo @$dept;
}
?>
</option>

<?php 
$query="select distinct name from tbl_dept";
$res=mysql_query($query);
while($row=mysql_fetch_assoc($res))
{
	echo "<option>".$row['name']."</option>";
	
}
?>
<option value="">None</option>
</select>


select designation<select onchange="seldesig('<?php echo $dept;?>');" id="desig">
<option value=""><?php if($desig=="")
{
	echo "--select--";
}
else
{
	echo @$desig;
}
?></option>
<?php $query_desig="select distinct desig_name from tbl_desig where dept_name='$dept'";
$res_desig=mysql_query($query_desig);
while($row_desig=mysql_fetch_assoc($res_desig))
{
	echo "<option>".$row_desig['desig_name']."</option>";
}
  ?>
  <option value="">None</option>
  </select>
</center>
<?php 
if($dept!="" && $desig!="")
{
	?>

	<center>
	<br/>
	<br/>
	<div class="formdiv">
	<form action="addsalary.php" method="post">
			department:<input type="text" name="dept" value="<?php echo $dept;?>" readonly><br/>
			Designation:<input type="text" name="desig" value="<?php echo $desig;?>"  readonly><br/>
			Enter the PayGrade:<input type="text" name="paygrade"><br/>
			<input type="submit" value="Assign Salary"/>
			
	
	</form>
	</div>
	</center>
<?php } ?>
</body>
<script>
	function seldept()
	{
		var dept=document.getElementById('dept');
		//alert(dept.value);
		cur_dept=dept.value;
		window.location.href='salary.php?token='+cur_dept;
	}
	function seldesig(dept)
	{
		var desig=document.getElementById('desig');
		//alert(dept);
		//alert(desig.value);
		cur_desig=desig.value;
		//alert(cur_desig);
		window.location.href='salary.php?token='+dept+'&tokendesig='+cur_desig;
	}
</script>
</html>