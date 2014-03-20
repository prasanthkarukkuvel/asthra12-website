<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')){ ob_start("ob_gzhandler"); }else ob_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>The Requested Page Not Found-Asthra</title>
<link rel="shortcut icon" type="text/css" href="../../images/favicon.ico">
<script type="text/javascript" src="../../Scripts/jquery.js"></script>
<style type="text/css">
body {
	background:#000;
	margin:0;
	padding:0;
	height:600px;
	font-family:Verdana, Geneva, sans-serif;
}
#open {
	display:none;
}
#link {
	display:none;
}
.page {
	background:url(layout.jpg);
	width:1024px;
	height:650px;
}
.cont {
	background:url(content.png);
	width:1024px;
	height:650px;
}
a {
	font-family:Verdana, Geneva, sans-serif;
	font-size:24px;
	color:#FC0;
	text-shadow:#000 1px 1px;
	-webkit-transition: all 0.5s ease-in-out;
	-moz-transition: all 0.5s ease-in-out;
	-o-transition: all 0.5s ease-in-out;
}
a img {
	border:none;
	margin:0px;
}
a:link {
	text-decoration:none;
	color:#FC0;
}
a:visited {
	text-decoration:none;
	color:#FC0;
}
a:active {
	text-decoration:none;
	color:#666;
}
a:hover {
	color: #FFF;
	text-decoration:underline;
	text-shadow:#000 2px 2px;
}
</style>
</head>
<body>
<script type="text/javascript">
$(window).load( function(){$("#open").fadeIn();$("#link").delay(1000).fadeIn(); });
</script>
<div id="open">
  <table width="1024" border="0" cellspacing="0" cellpadding="0" align="center" class="page">
    <tr>
      <td height="650" align="center" class="cont"><div id="link" style="margin-top:425px;"> <a href="../">Return Home</a> </div></td>
    </tr>
  </table>
</div>
<div style="left:0; position:fixed; text-align:center; bottom:3px; width:100%;font-size:12px; color:#999;" >Copyright &copy; Asthra 2012</div>
</div>
</body>
</html>
<?php ob_flush(); ?>