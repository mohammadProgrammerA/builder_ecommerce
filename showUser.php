<?php
    include "dbconnection.php";
    $uri=$_SERVER["REQUEST_URI"];
    $uriArray=explode("/",$uri);
    $idShow=$uriArray[3];

	$userConn=factoryClass :: makeObject("user");
	$result=$userConn->find($idShow);
	$row=$result->fetch_assoc();
?>
<div style="width:1000px;height:72px;background-color:yellow;margin-top:10px;">
		<div style="width:100px;height:50px;background-color:red;margin-left:10px;float:left;">
			<span> <?=$row['name'];?><span>
		</div>
		<div style="width:100px;height:50px;background-color:red;margin-left:10px;float:left;">
			<span> <?=$row['family'];?><span>
		</div>
		<div style="width:100px;height:50px;background-color:red;margin-left:10px;float:left;">
			<span> <?=$row['age'];?><span>
		</div>
		<div style="width:100px;height:50px;background-color:red;margin-left:10px;float:left;">
			<span> <?=$row['userpassword'];?><span>
		</div>

        <a href="http://localhost/router/editSingleUser/<?=$row["id"];?>">
		<div style="width:100px;height:50px;background-color:#8FBC8F;margin-left:10px;float:left;">
			<span style="backgroun-color:skyblue;"> edit <span>
		</div>
	    </a>
		<a href="http://localhost/router/deletSingleUser/<?=$row["id"];?>">
		<div style="width:100px;height:50px;background-color:skyblue;margin-left:10px;float:left;">
			<span style="backgroun-color:skyblue;color:green;"> delet <span>
		</div>
	    </a>
</div>