<?php

	
	$result= factoryClass :: makeObject("product","update",$_POST);
	if($result){
		echo "updated";
	}
	if(!$result){
		echo "no updated";
	}
?>