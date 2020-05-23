<?php
session_start();
$con=include("database/connection.php");
$email=$_SESSION['user'];
//echo $email;
if($con==true)
{ 
//echo "connection established";
 }
else
{
	echo mysql_error(); 
}
//echo "answer";

@$ques_id=$_REQUEST['ques_id'];
//echo $ques_id;
$q_query="select ques from tbl_ques where q_id='$ques_id'";
$res_q=mysql_query($q_query);
if($row_q=mysql_fetch_assoc($res_q))
{
	//echo $row_q['ques'];
	$question=$row_q['ques'];
}
$query="select * from tbl_answer where ques_id='$ques_id' order by time desc";
$res=mysql_query($query);
?>
<center>
<hr/>
<h3><caption>Question: <?php echo $question; ?></caption></h3>
<hr/>
<table border="1" style="border-collapse:collapse;width:80%;text-align:center">
<h2>View answers to your question</h2>
<thead>
<tr>
<th>S.No.</th>
<th>Answer</th>
<th>Answer by</th>
<th>Date</th>
<th>Time</th>
</tr>
</thead>
<tbody>
<?php
$a=1; 
while($row=mysql_fetch_assoc($res))
{
 ?>
<tr>
<td><?php echo $a; ?></td>
<td><?php echo $row['answer']; ?></td>
<td><?php 
$user_id=$row['emp_id'];
//echo $user_id;
$query_name="select first_name,last_name from tbl_emp where id='$user_id'";
$res_name=mysql_query($query_name);
if($row_name=mysql_fetch_assoc($res_name))
{
	echo $row_name['first_name']." ".$row_name['last_name'];
}
//echo $row['emp_id']; ?></td>
<td><?php echo $row['date']; ?></td>
<td><?php echo $row['time']; ?></td>
</tr>
<?php
$a++;
}?>
</tbody>
</table>
</center>