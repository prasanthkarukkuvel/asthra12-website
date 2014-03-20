<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')){ ob_start("ob_gzhandler"); }else ob_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>You are using Internet Explorer - Asthra</title>
<link rel="shortcut icon" type="text/css" href="../../images/favicon.ico">
<style type="text/css">
a img {
	border:none;
	outline:none;
}
a img {
	border:none;
	margin:0px;
}
a {  }
a:link {
	text-decoration:none;
	color:#C9C9C9;
}
a:visited {
	text-decoration:none;
	color:#C9C9C9;
}
a:active {
	text-decoration:none;
	color:#C9C9C9;
}
a:hover { color:#09F; }
a:hover, a:active { outline: 0; }
body {
	background:#000;
	margin:0;
	padding:0;
	height:600px;
	overflow:hidden;
	font-family:Verdana, Geneva, sans-serif;
	font-size:14px;
	color:#666;
}
.page {
	background:url(layout.jpg) no-repeat;
	width:500px;
	height:350px;
	margin-top:25px;
}
.cont {
	background:url(content.png);
	width:500px;
	height:280px;
}
div.button {
	background:transparent url(download.png) no-repeat center;
	width:150px;
	height:35px;
	float:left;
	margin-left:12px;
	cursor:pointer;
}
div.button:hover { background:transparent url(download.png) no-repeat top; }
div.button:active { background:transparent url(download.png) no-repeat bottom; }
div.download {
	background:transparent url(buttons.jpg) no-repeat center;
	width:250px;
	height:100px;
	cursor:pointer;
	opacity: 0.8;
	margin-top:10px;
}
div.download:hover { opacity: 1; }
div.download:active { opacity: 0.5; }
</style>
</head>
<body>
<?php 

if (isset($_SERVER['HTTP_USER_AGENT']) && (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false)){}else header('Location:../');
session_start();

$_SESSION['ieerror']=1;
?>
<?php $fp = fopen("ieerror.txt","r"); $count = fread($fp, 1024); fclose($fp); $count++;$fp = fopen("ieerror.txt","w"); fwrite($fp, $count); fclose($fp);echo "<!-- Logfiles Modified -->";?>
<script type="text/javascript">function openChorme(){window.open('http://www.google.com/chrome/','Chorme');}function openMozilla(){window.open('http://www.mozilla.org/en-US/firefox/new/','Firefox');}function openSafari(){window.open('http://www.apple.com/safari/download/','Safari');}</script>
<table width="1024" border="0" cellspacing="0" cellpadding="0" class="page" align="center">
  <tr>
    <td class="cont">&nbsp;</td>
  </tr>
  <tr>
    <td align="center" width="500" ><div class="button" onclick="openChorme()">&nbsp;</div>
      <div class="button" onclick="openMozilla()">&nbsp;</div>
      <div class="button" onclick="openSafari()">&nbsp;</div></td>
  </tr>
</table>
<table width="1024" border="0" cellspacing="0" cellpadding="0"  align="center">
  
  <tr>
    <td align="center" style="color:#0CF;font-size:20px;"><a href="../" target="_self">Skip this</a>
      </td>
  </tr>
</table>
<div style="left:0;text-align:right; position:fixed; bottom:15px; width:100%;font-size:12px;" ><a href="http://www.w3.org/html/logo/"> <img src="http://www.w3.org/html/logo/badge/html5-badge-h-css3-graphics-multimedia-performance-semantics.png" width="261" height="64" alt="HTML5 Powered with CSS3 / Styling, Graphics, 3D &amp; Effects, Multimedia, Performance &amp; Integration, and Semantics" title="HTML5 Powered with CSS3, Graphics, 3D &amp; Effects, Multimedia, Performance &amp; Integration, and Semantics only in Chorme,Mozilla and Safari"> </a></div>
</div>
<div style="left:0; position:fixed; text-align:center; bottom:3px; width:100%;font-size:12px;" >Copyright &copy; Asthra 2012</div>
</body>
</html>
<?php ob_flush(); ?>