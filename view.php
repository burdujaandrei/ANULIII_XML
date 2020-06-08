<?php

$params=array('id'=>$_GET['id']);
$xslDoc=new DOMDocument();
$xslDoc->load("view.xsl");

$xmlDoc=new DOMDocument();
$xmlDoc->load("work.xml");

$proc=new XSLTProcessor();
$proc->importStylesheet($xslDoc);
foreach ($params as $key => $value) {
	$proc->setParameter('',$key,$value);
}

echo $proc->transformToXml($xmlDoc);

?>