<?php 
    $uri=$_SERVER["REQUEST_URI"];
    $uriArray=explode("/",$uri);
    $idEdite=$uriArray[3];
	// $result=factoryClass :: makeObject("category","find",$idEdite);
    $category = new category();
	$result = $category -> find($idEdite);
	$row=$result->fetch_assoc();
;?>
<!DOCTYPE html>
<html>
	<title> form Single  Category</title>
<head>
</head>
<body>
    </br>
	<form action="/router/getEditeSingleCategoryData" method="post">
        <input type="hidden" name="idEdite" value="<?=$idEdite;?>"/>
		<input name="title" type="text" value="<?=$row['title'];?>"/></br></br>
		<input name="numberproduct"  type="text" value="<?=$row['numberproduct'];?>"/></br></br>
		<input name="disciription"  type="text" value="<?=$row['disciription'];?>"/></br></br>
	
		<button type="submit"> ثبت و ارسال </button>
	</form>
</body>
</html>