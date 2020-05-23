<?php
?>
<html>
<head>
<link href="css/empleave.css" type="text/css" rel="stylesheet"/>
</head>
<body>
<div id="outer">
<div id="header">
<div id="logo"></div>
Apply for leave
</div>
<div id="main">
<form action="empleavecode.php" method="post">
<table></br>
</br>
</br></br></br></br>
<tr><td>Leave from:</td><td><input type="date" name="lfrom"/></td></tr>
<tr><td>Leave till:</td><td><input type="date" name="lto"/></td></tr>
<tr><td>Reason:</td><td><textarea name="reason" style="width:250px;height:80px;resize:none;"></textarea></td></tr>
<tr><td></td><td><input type="submit" value="apply for leave" style="background-color:lightgreen;width:150px;"></td></tr>
</table>
</form>
</div>
</div>
</body>
</html>