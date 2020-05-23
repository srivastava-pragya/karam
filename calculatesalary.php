<?php
session_start();
$con=include("database/connection.php");
if($con==true)
{
	//echo "connection created";
}
else
{
	//echo "error";
}

//calculatesalary.php emp_id=4&sal_id=12
$emp_id=$_REQUEST['emp_id'];
//echo $emp_id;
$sal_id=$_REQUEST['sal_id'];
//##############################################################################//
//$hra=$_REQUEST['hra'];
//$da=$_REQUEST['da'];
//$tax=$_REQUEST['tax'];
//$adv=$_REQUEST['adv'];;
//echo $sal_id;
//################################################################################
$query="select count(*) as work_days,emp_name,dept from tbl_attendance where emp_id='$emp_id' and status='present'";
$res=mysql_query($query);
if($row=mysql_fetch_assoc($res))
{
	//print_r($row);
	$emp_name=$row['emp_name'];
	$work_days=$row['work_days'];
}
//echo $emp_name;
//echo $work_days;
$query2="select * from tbl_salary where sal_id='$sal_id'";
$res2=mysql_query($query2);
if($row2=mysql_fetch_assoc($res2))
{
	//print_r($row2);
	//[sal_id] => 11 [dept] => ACCOUNTS [desig] => CLERK [paygrade] => 300 [basic] => 9000 
	$dept=$row2['dept'];
	$desig=$row2['desig'];
	$paygrade=$row2['paygrade'];
	$basic=$row2['basic'];
}

//echo $dept;
//echo $desig;
//echo $paygrade;
//echo $basic;

$salary=$work_days*$paygrade;
$salary=isset($salary)?$salary:0;
$hra=isset($hra)?$hra:200;
$da=isset($da)?$da:3776;
$tax=isset($tax)?$tax:30;
$adv=isset($adv)?$adv:323;
$deductions=$tax+$adv;
$netsal=($salary+$hra+$da)-($deductions);

?>
<center>
<?php include('payslip.php'); ?>
</center>
