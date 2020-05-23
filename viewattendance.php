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
@$date=$_REQUEST['token'];
if($date=="All Records")
{
		$query1="select * from tbl_attendance";
}
else
{
	$query1="select * from tbl_attendance where date='$date'";
}
//echo $date;

?>
<html>
<head>
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script src="vendors/jquery/jquery-3.2.1.min.js" type="text/javascript"></script>
    <link rel="stylesheet"  href="vendors/DataTables/jquery.datatables.min.css">	
    <script src="vendors/DataTables/jquery.dataTables.min.js" type="text/javascript"></script> 

    <link rel="stylesheet"  href="vendors/DataTables/buttons.datatables.min.css">    
    <script src="vendors/DataTables/dataTables.buttons.min.js" type="text/javascript"></script> 
    <script src="vendors/DataTables/jszip.min.js" type="text/javascript"></script> 
    <script src="vendors/DataTables/pdfmake.min.js" type="text/javascript"></script> 
    <script src="vendors/DataTables/vfs_fonts.js" type="text/javascript"></script> 
    <script src="vendors/DataTables/buttons.html5.min.js" type="text/javascript"></script> 

<!--**link tag for External Library of Data Tables****-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

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
	width:100%;
}
</style>
<!--trrigger for the DataTables/buttons-->
<script>
$(document).ready( function () {
    $('#table_id').DataTable({
        "lengthMenu": [[5,10, 25, 50,100, -1], [5,10, 25, 50,100, "All"]],
    	dom: 'lBfrtip',
                buttons: [
                    {extend: 'copy', attr: {id: 'allan'}}, 'csv', 'excel', 'pdf'
                ]
    });
} );
</script>
</head>
<body>
<center>
<hr>
select date<select onchange="seldate();" id="date_sel">
<option value=""><?php if($date=="")
{
	echo "--select--";
}
else
{
	echo $date;
}
?>
</option>
<option value="All Records">All Records</option>
<?php 
$query="select distinct date from tbl_attendance";
$res=mysql_query($query);
while($row=mysql_fetch_assoc($res))
{
	echo "<option>".$row['date']."</option>";
}

?>
<option value="--select--">None</option>

<?php


?>
</select>
</hr>
<div class="showdata">
<table border="1" style="border-collapse:collapse;cursor:not-allowed" id='table_id'>
<thead>
<tr>
<th>S.N0.</th>
<th>Emp Name</th>
<th>Department</th>
<th>Attendance</th>
<th>Date</th>
<th>Time</th>
</tr>
</thead>
<tbody>
<?php 

$res1=mysql_query($query1);
$a=1;
while($row1=mysql_fetch_assoc($res1))
{
?>
<tr>
<td><?php echo $a; ?></td>
<td><?php echo $row1['emp_name']; ?></td>
<td><?php echo $row1['dept']; ?></td>
<td><?php echo $row1['status']; ?></td>
<td><?php echo $row1['date']; ?></td>
<td><?php echo $row1['time']; ?></td>
</tr>
<?php
$a++;
}
?>
</tbody>
</table>
</div>
<script>
function seldate()
{
	//alert('done');
	var date_sel=document.getElementById("date_sel");
	//alert(date_sel.value);
	var date=date_sel.value;
	//console.log(date);
	window.location.href='viewattendance.php?token='+date;
	
}
</script>
</center>
</body>
</html>