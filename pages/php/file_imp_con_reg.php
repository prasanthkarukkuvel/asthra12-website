<?php

// http

// load
session_start();

if (isset($_SESSION['intro']))
	{
	if (isset($_SERVER['HTTP_USER_AGENT']) && (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false))
		if (isset($_SESSION['ieerror']))
		$_SESSION['ieerror'] = 2;
		else
		header('Location:../ieError/');
	  else
		{
		$_SESSION['ieerror'] = 3;
		$_SESSION['start'] = true;
		$_SESSION['user'] = "1";
		$_SESSION['siterate'] = "0";
		}
	}
 //else header('Location:../intro/');

//log control 

// titles
function getTitle($ps)
	{
	$doc = new DOMDocument();
	$doc->load('xml/contents.xml');
	$page = $doc->getElementsByTagName($ps);
	foreach($page as $mp)
		{
		$title = $mp->getElementsByTagName("title");
		$t = $title->item(0)->nodeValue;
		return $t;
		}
	}

function menu_tabs()
	{
	$str1 = '<ul class="group" id="example-one" ><li class="current_page_item_one"><a class="c3" href="#">Home</a></li><li><a href="theme.php">Theme</a></li><li><a href="events.php#1">Events</a></li><li><a href="asthra.php">Asthra</a></li><li><a href="schedule.php">Schedule</a></li><li><a href="gallery.php">Gallery</a></li><li><a href="contact.php">Contact</a></li><li><a href="pages/Maps/">Site Map</a></li></ul>';
	$str2 = '<ul class="group" id="example-two" ><li class="current_page_item_two"><a class="c3" href="#">Home</a></li><li><a href="theme.php">Theme</a></li><li><a href="events.php#1">Events</a></li><li><a href="asthra.php">Asthra</a></li><li><a href="schedule.php">Schedule</a></li><li><a href="gallery.php">Gallery</a></li><li><a href="contact.php">Contact</a></li><li><a href="pages/Maps/">Site Map</a></li></ul>';
	if (isset($_SERVER['HTTP_USER_AGENT']) && (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false)) return $str1;
	  else return $str2;
	}

function sponsors_details()
	{
	$doc = new DOMDocument();
	$doc->load('xml/sponsors.xml');
	$infos = $doc->getElementsByTagName("images");
	foreach($infos as $i)
		{
		$name = $i->getElementsByTagName("name");
		$n = $name->item(0)->nodeValue;
		$title = $i->getElementsByTagName("title");
		$t = $title->item(0)->nodeValue;
		echo '<div> <a id="spons" href="#"><img src="images/sponsors/' . $n . '" width="150" height="150" alt="' . $t . '" /></a> </div>';
		}
	}

function get_text($spage, $scontent)
	{
	$doc = new DOMDocument();
	$doc->load('xml/contents.xml');
	$page = $doc->getElementsByTagName($spage);
	foreach($page as $mp)
		{
		$con = $mp->getElementsByTagName($scontent);
		$c = $con->item(0)->nodeValue;
		return $c;
		}
	}
function get_rate()
	{
	$doc = new DOMDocument();
	$doc->load('pages/siterate/ratelog.xml');
	$vals = $doc->getElementsByTagName("main");
	foreach($vals as $cn)
		{
		$avgt = $cn->getElementsByTagName("avgs");
		$cavg = $avgt->item(0)->nodeValue;
		$cont = $cn->getElementsByTagName("count");
		$ccon = $cont->item(0)->nodeValue;
		}
	echo ceil($cavg/$ccon)." %";
	}
function isIE()
	{
		if (isset($_SERVER['HTTP_USER_AGENT']) && (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false))
		
			return true;
			else
			return false;
		
	}
function isChrome()
	{
		if (isset($_SERVER['HTTP_USER_AGENT']) && (strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome') !== false))
		
			return true;
			else
			return false;
		
	}
function isSafari()
	{
		if(isset($_SERVER['HTTP_USER_AGENT']) && (strpos($_SERVER['HTTP_USER_AGENT'], 'Safari') !== false))
		
			return true;
			else
			return false;
		
	}
function getComments()
	{
		if(isIE())
		echo '<p style="font-size:17px;color:#222;">Comments not Visible in IE</p>';
		else
		echo '<iframe id="fid" src="https://www.facebook.com/plugins/comments.php?api_key=211995925480008&channel_url=https%3A%2F%2Fs-static.ak.fbcdn.net%2Fconnect%2Fxd_proxy.php%3Fversion%3D3%23cb%3Dfb4b31a34%26origin%3Dfile%253A%252F%252F%252Ff13139c748%26relation%3Dparent.parent%26transport%3Dpostmessage&href=http%3A%2F%2Fwww.itasthra.com&locale=en_US&numposts=2&sdk=joey&width=500&view=recent_comments" width="500" height="500" frameborder="0" style="background:#fff;padding:10px;height:500px; overflow-x:hidden;" scrolling="yes" align="middle"></iframe>';
		
	}
?>