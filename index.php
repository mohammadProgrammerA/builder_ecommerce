<?php

	include "header.php";
	include "autoLoad.php";
    
	$uriRouter=$_SERVER["REQUEST_URI"];
    $router=factoryClass :: makeObject('router' , "setUri" ,$uriRouter);
	
	$router->parseUri();
	$uriArray=$router->getUriArray();

	if(count($uriArray)==3 && $uriArray[2]==""){
		factoryClass :: makeObject("loadFile","loadFile","home");
	}
	if(count($uriArray)>=3 && $uriArray[2]!=""){
		factoryClass :: makeObject("loadFile","loadFile",$uriArray[2]);
	}

	include "footer.php";
?>