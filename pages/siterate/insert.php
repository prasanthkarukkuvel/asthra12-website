<?php
   
	ob_start();
	?><?php
	//header('Location:index.php?code=block');?><?php
	$xmldoc = new DOMDocument();
    $xmldoc->load('ratelog.xml');
    $newAct1 = $_POST['text1'];
	$newAct2 = $_POST['text2'];
	if($newAct1!="" && $newAct2!="")
	{
   	$root = $xmldoc->firstChild;
	$newavg=$root->getElementsByTagName("avgs")->item(0);
	$n = $newavg->nodeValue;
	$temp=$newAct1-$n;
	if($temp<=100)
	{
    $root->removeChild($newavg);
    $newavgs=$root->getElementsByTagName("count")->item(0);
    $root->removeChild($newavgs);
	$newElement1 = $xmldoc->createElement('avgs');
	$newElement2 = $xmldoc->createElement('count');
	$root->appendChild($newElement1);
	$root->appendChild($newElement2);
	$newText1 = $xmldoc->createTextNode($newAct1);
	$newText2 = $xmldoc->createTextNode($newAct2);
	$newElement1->appendChild($newText1);
	$newElement2->appendChild($newText2);
	$xmldoc->save('ratelog.xml');
	}
	
	}
?><?php ob_end_flush();?>

