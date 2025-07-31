<?php
    $uri=$_SERVER["REQUEST_URI"];
    $uriArray=explode("/",$uri);
    $idShow=$uriArray[3];
	// $result=factoryClass :: makeObject("category","find",$idShow);
	$category = new category();
	$result = $category -> find($idShow);
	$row=$result->fetch_assoc();
?>
<div style="width:720px;height:72px;background-color:yellow;margin-top:10px;">
		<div style="width:100px;height:50px;background-color:red;margin-left:10px;float:left;">
			<span> <?=$row['title'];?><span>
		</div>
		<div style="width:100px;height:50px;background-color:red;margin-left:10px;float:left;">
			<span> <?=$row['numberproduct'];?><span>
		</div>
		<div style="width:100px;height:50px;background-color:red;margin-left:10px;float:left;">
			<span> <?=$row['disciription'];?><span>
		</div>

        <a href="http://localhost/router/editSingleCategory/<?=$row["id"];?>">
		<div style="width:100px;height:50px;background-color:#8FBC8F;margin-left:10px;float:left;">
			<span style="backgroun-color:skyblue;"> edit <span>
		</div>
	    </a>
		<a href="http://localhost/router/deletSingleCategory/<?=$row["id"];?>">
		<div style="width:100px;height:50px;background-color:skyblue;margin-left:10px;float:left;">
			<span style="backgroun-color:skyblue;color:green;"> delet <span>
		</div>
	    </a>
</div>