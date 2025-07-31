<?php
	//include "dbconnection.php";
	// include "menu.php";
	//$title=$_POST['title'];
	//$numberProduct=$_POST["numberproduct"];
	//$disciription=$_POST['disciription'];
	//$idUpdate=$_POST['idUpdate'];

	//$updateQ="UPDATE category SET title='$title',numberproduct='$numberProduct',discription='$disciription' WHERE id=".$idUpdate;
	//$result=$newDbconnection->update($updateQ);
	$result=factoryClass :: makeObject("category","update",$_POST);
	//$result=$categoryConn->updateCategory($_POST);
	if($result){
		echo "ok updated category";
	}
	if(!$result){
		echo "no updated category";
	}
?>
