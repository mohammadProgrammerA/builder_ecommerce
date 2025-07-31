<?php
	//include "dbconnection.php";
	// include "menu.php";
	//$title=$_POST['title'];
	//$numberProduct=$_POST["numberproduct"];
	//$disciription=$_POST['disciription'];
	
	//$insertQuery="INSERT INTO category (title,numberproduct,discription) VALUES ('$title','$numberProduct','$disciription')";
	//$result=$newDbconnection->create($insertQuery);
	$result = factoryClass :: makeObject("category","create",$_POST);
	//$result=$categoryConn->insertCategory($_POST); 
	if($result){
		echo "ok create category";
	}
	if(!$result){
		echo "no create category";
	}
?>
