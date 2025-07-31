<?php 
    $uri=$_SERVER["REQUEST_URI"];
    $uriArray=explode("/",$uri);
    $idDelet=$uriArray[3];
	$userConn=factoryClass :: makeObject("user");
	$result=$userConn->delete($idDelet);
    if($result){
        echo "deleted";
    }
    if(!$result){
        echo "not deleted";
    }
?>