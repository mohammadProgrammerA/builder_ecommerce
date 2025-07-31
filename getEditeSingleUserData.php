<?php

	$userConn=factoryClass :: makeObject("user");
	$result=$userConn->update($_POST);
	if($result){
		echo "ok updated category";
	}
	if(!$result){
		echo "no updated category";
	}
?>
