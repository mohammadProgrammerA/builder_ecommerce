<?php 
    // include "menu.php";
    include "dbconnection.php";
    $uri=$_SERVER["REQUEST_URI"];
    $uriArray=explode("/",$uri);
    $idDelet=$uriArray[3];
    //$deletQ="DELETE  FROM category WHERE id=".$idDelet;
    //$result=$newDbconnection->delet($deletQ);
	$result=factoryClass :: makeObject("category","delete",$idDelet);
	//$result=$categoryConn->delete($idDelet);
    if($result){
        echo "deleted";
    }
    if(!$result){
        echo "not deleted";
    }
?>