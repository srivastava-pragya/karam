<?php
include('database/connection.php');
?>
<html>
<head>
<style>
#outer
{
height:auto;
width:100%;
//border:1px solid;
margin: 100px auto;
}
#header
{
	height:50px;
	width:100%;
	//border:1px solid red;
	border-bottom:2px solid gray;
}
#one{
	height:50px;
	width:12%;
	//border:1px solid;
	border-radius:10px 10px 0px 0px;
	float:left;
	text-align:center;
	//margin-left:50px;
}
#two{
	height:50px;
	width:12%;
	//border:1px solid;
	border-radius:10px 10px 0px 0px;
	float:left;
	text-align:center;
	margin-left:3px;
}
#three{
	height:50px;
	width:12%;
	//border:1px solid;
	border-radius:10px 10px 0px 0px;
	float:left;
	text-align:center;
	margin-left:3px
}
#four{
	height:50px;
	width:12%;
	//border:1px solid;
	border-radius:10px 10px 0px 0px;
	float:left;
	text-align:center;
	margin-left:3px
}
#content1
{
	height:470px;
	width:100%;
	border:1px solid blue;
	background-color:lightblue;
}
#content2
{
	height:470px;
	width:100%;
	border:1px solid blue;
	background-color:lightyellow;
}
#content3
{
	height:470px;
	width:100%;
	border:1px solid blue;
	background-color:lightpink;
}
#content4
{
	height:470px;
	width:100%;
	border:1px solid blue;
	background-color:aqua;
}

</style>
</head>
<body>
<div id="outer">
<div id="header">
<div id="one"><input id="paygrade" type="button" name="one" value="Paygrade" style="height:49px;width:100%;border-radius:10px 10px 0px 0px;background:linear-gradient(silver,white,silver);"/></div>
<div id="two"><input id="basic" type="button" name="two" value="Basic Salary" style="height:49px;width:100%;border-radius:10px 10px 0px 0px;background:linear-gradient(silver,white,silver);"/></div>
<div id="three"><input id="report" type="button" name="three" value="Salary Report" style="height:49px;width:100%;border-radius:10px 10px 0px 0px;background:linear-gradient(silver,white,silver);"/></div>
<div id="four"><input id="viewall" type="button" name="four" value="Bulk View" style="height:49px;width:100%;border-radius:10px 10px 0px 0px;background:linear-gradient(silver,white,silver);"/></div>
</div>
<div id="content1" style="display:none;">
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
</table>
</div>
<div id="content2" style="display:none;">
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
</table>
</div>
<div id="content3" style='display:none'>
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
</div>
<div id="content4" style='display:none'>
<table border="1" align="center" style="border-collapse:collapse;">
<tr>
<th>Sr No.</th>
<th>Name</th>
<th>DEPARTMENT</th>
<th>DESIGNATION</th>
<th>PAYGRADE</th>
<th>BASIC SALARY</th>
<th>Calculate Salary</th>
</tr>
<?php
$query5="select * from tbl_salary";
$res5=mysql_query($query5);
$a=1;
while($row5=mysql_fetch_assoc($res5))
{
	
	//print_r($row5);
	$sal_id= $row5['sal_id'];
	//echo $id;
	$dept= $row5['dept'];
	//echo $dept;
	$desig= $row5['desig'];
	//echo $desig;
	$paygrade=$row5['paygrade'];
	//echo $paygrade;
	$basic=$row5['basic'];
	//echo $basic;
		
		$query6="select first_name,last_name,id from tbl_emp where department='$dept' and designation='$desig'";
		$res6=mysql_query($query6);
		while($row6=mysql_fetch_assoc($res6))
		{
			?>
			<tr>
			<td><?php echo $a; ?></td>
			<?php $empid=$row6['id'];//echo $empid;?>
			<td><?php echo $row6['first_name']." ".$row6['last_name']; ?></td>
			<td><?php echo $dept;?></td>
			<td><?php echo $desig;?></td>
			<td><?php echo $paygrade;?></td>
			<td><?php echo $basic;?></td>
			<td><a href="calculatesalary.php?emp_id=<?php echo $empid?>&sal_id=<?php echo $sal_id; ?>">Calculate</td>
			</tr>
			<?php 
			$a++;
		}
}
?>
</table>
</div>
<div id="main" style='display:block'>
	<center>
		<h1>Please Click The Tabs To View Information</h1>
	</center>
</div>
</div>
<script>
var paygrade=document.getElementById('paygrade');
var basic=document.getElementById('basic');
var report=document.getElementById('report');
var viewall=document.getElementById('viewall');
var content1=document.getElementById('content1');
var content2=document.getElementById('content2');
var content3=document.getElementById('content3');
var content4=document.getElementById('content4');
var main=document.getElementById('main');
paygrade.onclick=function()
{	content1.style="display:block";
	content2.style="display:none";
	content3.style="display:none";
	content4.style="display:none";
	main.style="display:none";
}
basic.onclick=function()
{	content1.style="display:none";
	content2.style="display:block";
	content3.style="display:none";
	content4.style="display:none";
	main.style="display:none";
}
report.onclick=function()
{	content1.style="display:none";
	content2.style="display:none";
	content3.style="display:block";
	content4.style="display:none";
	main.style="display:none";
}
viewall.onclick=function()
{	content1.style="display:none";
	content2.style="display:none";
	content3.style="display:none";
	content4.style="display:block";
	main.style="display:none";
}
</script>


</body>
</html>