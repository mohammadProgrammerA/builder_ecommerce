<?php
	$result=factoryClass :: makeObject("category" ,"update",$_POST);
	if($result){
		echo "updated";
	}
	if(!$result){
		echo "not updated";
	}
?>