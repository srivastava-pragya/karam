<?php
session_start();
$email=$_SESSION['admin'];
$con=include("database/connection.php");
$query="select password from tbl_admin where email='$email'";
$res=mysql_query($query);
//print_r($res);
if($row=mysql_fetch_assoc($res))
{
	$dbpass=$row['password'];
	//echo $dbpass;
}
$old=$_POST['old'];
$new=$_POST['new'];
$cnf=$_POST['cnf'];
//echo $old,$new,$cnf;
if($dbpass==$old)
{
	//echo " admin password matched"."</br>";
	if($new==$cnf)
	{
		//echo "new and old matched"."</br>";
		if($new==$old)
		{
			//echo "same password"."</br>";
			header("location:changepass.php?msga=oldmatched");
		}
		else
		{
			//echo "different password"."</br>";
			$query2="update tbl_admin set password='$new' where email='$email'";
			$check=mysql_query($query2);
			if($check==true)
			{
				//echo "password changed";
				//destroy session
				header("location:index.php?msga=changed");
			}
			else
			{
				echo mysql_error();
			}
			
		}
	}
	else
	{
		//echo "old and new didn't matched"."</br>";
		header("location:changepass.php?msga=oldnewnotmatched");
	}
}
else
{
	//echo "password didn't matched"."</br>";
	header("location:changepass.php?msga=notmatched");
}
?>