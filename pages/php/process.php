<?php 

header('Location:../');

	$xmldoc = new DOMDocument();
    $xmldoc->load('../../xml/feedback.xml');
    $newAct1 = $_POST['feedname'];
	$newAct2 = $_POST['feedemail'];
	$newAct3 = $_POST['feedcomment'];
	if($newAct1!="" && $newAct2!="" && $newAct3!="")
	{
   	$root = $xmldoc->firstChild;
	$newElement1 = $xmldoc->createElement('name');
	$newElement2 = $xmldoc->createElement('email');
	$newElement3 = $xmldoc->createElement('comment');
	$root->appendChild($newElement1);
	$root->appendChild($newElement2);
	$root->appendChild($newElement3);
	$newText1 = $xmldoc->createTextNode($newAct1);
	$newText2 = $xmldoc->createTextNode($newAct2);
	$newText3 = $xmldoc->createTextNode($newAct3);
	$newElement1->appendChild($newText1);
	$newElement2->appendChild($newText2);
	$newElement3->appendChild($newText3);
	$xmldoc->save('../../xml/feedback.xml');
	
	}



?>