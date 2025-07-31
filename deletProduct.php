<?php 
	// include "menu.php";
	//include "dbconnection.php";
	 
	$uri=$_SERVER['REQUEST_URI'];
	$uriArray=explode("/",$uri);
	$deletId=$uriArray[3];
	//$productConn=new product();
	$result = factoryClass :: makeObject(new product,"delete",$deletId);
	//$result=$productConn->delete($deletId);
	// $deletQuery="DELETE FROM product WHERE id=".$deletId;
	// $result=$newDbconnection->delet($deletQuery);
	if($result){
		echo "deleted";
	}
	if(!$result){
		echo "no deleted";
	}
	//include "product.php";
?>