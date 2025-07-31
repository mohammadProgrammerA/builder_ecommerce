<?php
	$uri=$_SERVER['REQUEST_URI'];
	$uriArray=explode('/',$uri);
	$deletId=$uriArray[3];
	
	$result = factoryClass :: makeObject("category","delete",$deletId);

	if($result){
		echo "deleted";
	}
	if(!$result){
		echo "not deleted";
	}
?>