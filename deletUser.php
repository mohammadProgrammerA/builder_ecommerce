<?php 


    $uri=$_SERVER['REQUEST_URI'];
    $uriArray=explode("/",$uri);
    $idDelete=$uriArray[3];

	$userConn=factoryClass :: makeObject("user");	
	$result=$userConn->delete($idDelete);
   
    if($result){echo "👍";}
    if(!$result){echo "👎";}
?>