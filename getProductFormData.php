<?php

	$productConn=factoryClass :: makeObject("product");
	$resultInsert=$productConn->create($_POST);
	
	if($resultInsert){
		echo "ثبت شد";
	}
	if(!$resultInsert){
		echo " ثبت نشد";
	}
	
?>