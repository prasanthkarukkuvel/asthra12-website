<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome to Asthra 12</title>
<link rel="shortcut icon" type="text/css" href="images/favicon.ico">
</head>

<body>
<?php
session_start();
if(isset($_SESSION['video'])&&($_SESSION['video']==1))
{
	header('Location:../../');
}
else
header('Location:../');
?>
<a href="../../">Skip Intro</a>
<div style="left:0; position:fixed; text-align:center; bottom:3px; width:100%;font-size:12px; font-family:Verdana, Geneva, sans-serif" >Copyright &copy; Asthra 2012</div>
</body>
</html>