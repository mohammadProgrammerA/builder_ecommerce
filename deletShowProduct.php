<?php
    echo "😊";
    include "dbconnection.php";
    // include "menu.php";

    $uri=$_SERVER['REQUEST_URI'];
    $array=explode("/",$uri);
    $idDelet=$array[3];
    //$deletQuery="DELETE FROM product WHERE id=". $idDelet;
    //$result=$newDbconnection->delet($deletQuery);
	$result = factoryClass :: makeObject(new product,"delete",$idDelet);
	//$result = $productConn -> delete($idDelet);
    if($result){
        
        echo "👍";
    }
    if(!$result){
        echo "👎";
    }
?>