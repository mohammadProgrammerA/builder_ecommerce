<?php

 	$uri=$_SERVER['REQUEST_URI'];
    $uriArray=explode("/",$uri);
	
	if($uriArray[2]=="productForm" || $uriArray[2]=="categoryForm" || $uriArray[2]=="userForm" || 
	
	$uriArray[2]=="editProduct" || 
	$uriArray[2]=="editCategory" ||
	$uriArray[2]=="editSingleCategory" ||
	$uriArray[2]=="editShowProduct" ||
	$uriArray[2]=="editSingleUser" || $uriArray[2]=="editUser"){
		
?>

<div style="width:313px;height:400px;background-color:gray;" id='table'></div>
	<script src="/router/submitForm.js"></script>    
<?php
	}
?>	

<?php
	$result=factoryClass :: makeObject("footer" ,"all");
	$row=$result->fetch_assoc();
?>
</br></br></br>
    <div style="height:95px;background-color:gray;">
	    <!-- <p style="height:72px;margin-top:10px;float:left;background-color:white; ">all rights are reserved</p> -->
		<div style="width:200px;height:72px;background-color:white;      margin-top:10px;float:left;margin-left:30px;border-radius:25px;">
		    <span style="float:left;"> name :: <?=$row['name'];?></span>
		</div>
		<div style="width:200px;height:72px;background-color:white;      margin-top:10px;float:left;margin-left:30px;border-radius:25px;">
		    <span style="float:left;">family ::  <?=$row['family'];?></span>
		</div>
		<div style="width:200px;height:72px;background-color:white;      margin-top:10px;float:left;margin-left:30px;border-radius:25px;">
		    <span style="float:left;"> number:;<?=$row['number'];?></span>
		</div>
		<div style="width:200px;height:72px;background-color:white;      margin-top:10px;float:left;margin-left:30px;border-radius:25px;">
		    <span style="float:left;"> discriptioncopyright ::<?=$row['discriptioncopyright'];?></span>
		</div>
    </div>
</body>
</html>