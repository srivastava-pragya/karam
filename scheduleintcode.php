<?php
include('database/connection.php');
$name=$_POST['name'];
$email=$_POST['email'];
//$mobile=$_POST['mobile'];
$date=$_POST['date'];
$time=$_POST['time'];
//echo $name,$date,$time;
//***************************API CODE*****************************************************
$mobile=$_POST['mobile'];
function PostRequest($url, $referer, $_data) {     // convert variables array to string: 
    $data = array();    
	while(list($n,$v) = each($_data)){         $data[] = "$n=$v";     }      
	$data = implode('&', $data);     // format --> test1=a&test2=b etc.   
	// parse the given URL    
	$url = parse_url($url);    
	if ($url['scheme'] != 'http') {       
	die('Only HTTP request are supported !');    
	}   
	// extract host and path:   
	$host = $url['host'];   
	$path = $url['path'];   
	// open a socket connection on port 80    
	$fp = fsockopen($host, 80);
	// send the request headers:   
	fputs($fp, "POST $path HTTP/1.1\r\n");  
	fputs($fp, "Host: $host\r\n");   
	fputs($fp, "Referer: $referer\r\n");   
	fputs($fp, "Content-type: application/x-www-form-urlencoded\r\n");  
	fputs($fp, "Content-length: ". strlen($data) ."\r\n");   
	fputs($fp, "Connection: close\r\n\r\n");   
	fputs($fp, $data);     $result = '';    
	while(!feof($fp)) {       
	// receive the results of the request    
    $result .= fgets($fp, 128);   
	}     // close the socket connection:   
	fclose($fp);   
	// split the result header from the content   
	$result = explode("\r\n\r\n", $result, 2);  
	$header = isset($result[0]) ? $result[0] : '';  
	$content = isset($result[1]) ? $result[1] : '';  
	// return as array:    
	return array($header, $content); 
	}
$message="Hello".$name.", This  is to inform you that you have been short listed for the Interview please report at the Karma Industries on Following date:".$date."& Timing :".$time.".";
$data = array(
 'user' => "rohitsonu",
 'password' => "326973",
 'msisdn' => "91".$mobile,
 'sid' => "WEBSMS",
 'msg' =>$message,
 'fl' =>"0"
);

list($header, $content) = PostRequest(
"http://www.smslane.com//vendorsms/pushsms.aspx",
"http://localhost:70/SI/contact.php?m=1",
$data);
//**************************************APICODE*****************************************
$query="insert into tbl_interview(name,email,mobile,date,time,curdate,curtime) values('$name','$email','$mobile','$date','$time',curdate(),curtime())";
$check=mysql_query($query);
if($check==true)
	{
		echo "<script>alert('Interview Scheduled Successfully!');window.location.href='viewapplicants.php';</script>";
		//header("location:viewapplicants.php");
	}
	else
	{
		echo mysql_error();
	}
?>