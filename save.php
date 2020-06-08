<?php

$msg="";

if(isset($_POST['insert']))
{
	$target="";
	if(isset($_FILES['image']))
	{
		$target .="images/".md5(uniqid(time())).basename($_FILES['image']['name']);
		if(move_uploaded_file($_FILES['image']['tmp_name'], $target))
		{
			header('Location:index.php');
		}
		else{
			$msg="Please try again!";
		}
	}
	$id=$_POST['id'];
	$xml=simplexml_load_file('work.xml');
	$date=$xml->addChild('date');
	$date->addChild('id',$id);
	$image=$date->addChild('image');
	$image->addChild('src',$target);
	$image->addChild('alt','potofolio');
	$date->addChild('view','view.php?id='.$id);
	$date->addChild('edit','edit.php?id='.$id);
	$date->addChild('delete','delete.php?id='.$id);
	$date->addChild('confirm','return confirm("Are you sure you want to delete this image?")');
	$date->addChild('back','index.php');

	file_put_contents('work.xml', $xml->asXML());
	
}

?>