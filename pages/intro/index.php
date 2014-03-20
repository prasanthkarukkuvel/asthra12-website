<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')){ ob_start("ob_gzhandler"); }else ob_start(); ?>
<?php $fp = fopen("introlog.txt","r"); $count = fread($fp, 1024); fclose($fp); $count++; $fp = fopen("introlog.txt","w"); fwrite($fp, $count); fclose($fp);?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<noscript>
<meta HTTP-EQUIV="REFRESH" content="0; url=../JSDisabled/">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="google-site-verification" content="cZkbe9MggnwaIt8f6PKzkxEqr-i54k4Uz-CETeWka6Y" />
</noscript>
<title>Welcome to Asthra 12</title>
<link rel="shortcut icon" type="text/css" href="../../images/favicon.ico">
<script type="text/javascript" language="javascript" src="../../Scripts/jquery.js"></script><script type="text/javascript" language="javascript" src="../../Scripts/jquery.min.js"></script><script type="text/javascript" language="javascript" src="../../Scripts/jquery-ui.js"></script><script type="text/javascript" language="javascript" src="../../Scripts/jquery.jplayer.min.js"></script>
<style>
html {
	cursor:wait;
	-webkit-user-select:none;
	-moz-user-select:none;
	-o-user-select:none;
}
body {
	background:#000;
	color:#666;
	font:'Verdana', Geneva, sans-serif 14px;
	overflow:hidden;
	margin:0;
	padding:0;
}
.se {
	background:transparent;
	width:600px;
	height:400px;
	display:none;
}
</style>
</head><body>
<?php session_start();$_SESSION['intro']=1;$_SESSION['video']=1;?>
<script type="text/javascript">$(document).ready(function(){$(document).bind("contextmenu",function(e){return false;});});$(window).load(function(){window.setTimeout(function(){one();window.setTimeout(function(){two();window.setTimeout(function(){three();window.setTimeout(function(){four();}, 2500);}, 2000);}, 2000);}, 0);});function one(){$('#s').show("puff",{}, 1500).hide("scale", {},500);}function two(){$('#s1').show("puff",{}, 1500).hide("scale", {},500);}function three(){$('#s2').show("puff",{}, 1500).hide("scale", {},500);}function four(){window.location = '../../'}</script>

<table align="center" border="0" style="margin-top:100px;">
  <tr>
    <td><div  align="center" id="s" class="se"><img src="init_video/images/1.jpg" width="600" height="400" alt="Logo" /></div>
      <div  align="center" id="s1" class="se" ><img src="init_video/images/2.jpg" width="600" height="400" alt="Logo" /></div>
      <div  align="center" id="s2" class="se"><img src="init_video/images/3.jpg" width="600" height="400" alt="Logo" /></div></td>
  </tr>
</table>
<div id="jpId"></div>
<div style="left:0; position:fixed; text-align:center; bottom:3px; width:100%;font-size:12px; font-family:Verdana, Geneva, sans-serif" >Copyright &copy; Asthra 2012</div>
</body>
</html>
<?php ob_flush(); ?>