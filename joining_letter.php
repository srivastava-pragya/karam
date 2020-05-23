<?php


?>
<html>
<head>
</head>
	<body onload="window.print();">
	<center>
	<div id="outer" style="height:600px;width:510px;border:2px solid black;">
	  <div id="header" style="height:80px;width:100%;border:1px solid black;border:none;">
	  <img src="images/logo.png" style="height:80px;width:150px;float:left;margin-left:20px;"/>
	  <h2>LETTER OF JOINING</h2>
	  	
	  </div>
	  <hr/>
		  <div id="data" style="height:500px;width:90%;margin-left:20px;text-align:left;">
		  <p style="margin-left:15px;font-size:13px;"><br><b>Ref.No:#KRM-2019-880119</b><br/>
		  <?php include("includes/timeconfig.php");
	     echo "Date-" . $set_date;
		 ?></p>
		 <p><B>Subject:</b><?php echo "Call Letter for Joining KARAM PVT LTD"; ?></p>
		 <p><b>Dear:</b><?php echo @$name; ?></p>
		 <p style='font-family:rockwell;font-size:13px;text-align:justify;'>
		 This Letter is from KARAM PVT LTD Lucknow UP is intented to Mr.<b><?php echo @$name; ?></b>.
		 KARAM Officially informs you that you have been Selected as part of KARAM Family.
		 We Are glad you that you invited to join our Company.<br/>
		 <br/>
		 This Letter is For confirmation Final Letter of JOINING will be Handed to you After Documentation & Mutual Negotiations.<br/>
		 <br/>
		 Please Do carry Along Your Documents and Other Required Paper works
		 <hr><br/>
		 <b>Regards</b><br/>
		 <b>KARAM</b>
		 </p>
		  </div>
	</div>
	</center>
	</body>
</html>