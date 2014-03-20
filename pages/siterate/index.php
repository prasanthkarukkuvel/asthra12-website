<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><noscript><meta HTTP-EQUIV="REFRESH" content="0; url=pages/JSDisabled/"></noscript><title>Rate Our Site</title><link rel="stylesheet" type="text/css" href="styles.css"/><link rel="shortcut icon" type="text/css" href="../../images/favicon.ico"> <script type="text/javascript" src="jq.js"></script><script type="text/javascript" src="jquerylib.js"></script><script type="text/javascript" src="sliders.js"></script></head><body scrolling="no" ><?php if($_GET['code'] == "")header('Location:../index.php');if($_GET['code'] == ""){$vals='block';$orgs ='none';}elseif($_GET['code'] == "none"){$vals='block';$orgs ='none';}else{$orgs = $_GET['code'];$vals='none';}?><div class="bstyle"><div><div id="thanks-layout" style="display:<?php echo $orgs; ?>;">Thanks for your Rating !!</div><div id="ratebar"><table width="147" border="0"><tr><td width="43"><div id="bluerate">50</div></td><td width="43"><div id="greenrate">50</div></td><td width="43"><div id="orangerate">50</div></td></tr></table></div><div class="colorful-slider blue"><div class="slider-handle"></div></div><div class="colorful-slider green"><div class="slider-handle"></div></div><div class="colorful-slider orange"><div class="slider-handle"></div></div><div class="cube-area"><div class="cuboid blue"><div class="cu-top"></div><div class="cu-mid"></div><div class="cu-bottom"></div></div><div class="cuboid green"><div class="cu-top"></div><div class="cu-mid"></div><div class="cu-bottom"></div></div><div class="cuboid orange"><div class="cu-top"></div><div class="cu-mid"></div><div class="cu-bottom"></div></div><div class="perspective"></div></div><div class="clear"></div><table cellpadding="0" cellspacing="0" ><tr><td height="20">&nbsp;</td></tr><tr><td><div class="design">&nbsp;</div></td><td><p id="des">Design</p></td></tr><tr><td><div class="interface">&nbsp;</div></td><td><p id="int">Interface</p></td></tr><tr><td><div class="info">&nbsp;</div></td><td><p id="inf">Information</p></td></tr></table><table border="0" style="display:<?php echo $vals; ?>;"><tr id="avgc"><td width="150"><div id="avgrate">Average Rate :</div></td><td width="70"><div id="avgrate-value">50</div></td></tr></table><?php $doc = new DOMDocument(); $doc->load('ratelog.xml'); $name = $doc->getElementsByTagName("avgs"); $n = $name->item(0)->nodeValue; $title= $doc->getElementsByTagName("count"); $t = $title->item(0)->nodeValue; echo ' <script type="text/javascript">
	var srate = "";
	function go() {
    var newcount = '.$t.';
    newcount++;
    var newrate = '.$n.';
    var temps = parseInt(document.form1.text1.value);
    var temp = newrate + temps;
    document.form1.text1.value = temp;
    document.form1.text2.value = newcount;
    return true;
}</script><div id="avgrate-avgs" style="display:'.$orgs.'"> <script type="text/javascript">';?>
    <?php 
	
	 $docs = new DOMDocument();
    $docs->load('ratelog.xml');
    
	$names = $docs->getElementsByTagName("avgs");
	$ns = $names->item(0)->nodeValue;
	$titles= $docs->getElementsByTagName("count");
	$ts = $titles->item(0)->nodeValue;
	
	echo'
	document.write("<br>Over all rating : " + String(Math.ceil('.$ns.'/ '.$ts.')) + " %");
</script>';?></div><div style="display:<?php echo $vals; ?>;"><form name="form1" id="myForm" action="insert.php" method="post" onsubmit="return go()"><input type="text" name="text1" id="t1" value="0" border="0" readonly="readonly"/><input type="text" name="text2" id="t2" value="0" border="0" readonly="readonly"/><input type="submit" value="Submit" id="s1"/><input type="button" value="Close" id="s2" onclick="window.close();"/></form></div></div></div></body></html> 