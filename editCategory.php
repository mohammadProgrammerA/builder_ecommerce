<?php   
    $uri=$_SERVER["REQUEST_URI"];
	$uriArray=explode("/",$uri);
	$categoryId=$uriArray[3];
	// $result=factoryClass :: makeObject("category","find",$categoryId);
	$category = new category();
	$result = $category -> find($categoryId);
	$row=$result ->fetch_assoc();
	
?>
<!DOCTYPE html>
<html>
	<title> form category</title>
<head>
</head>
<body>
	<form action="/router/updateCategoryFormData" method="post" >
	    <input name='idEdite' type='hidden' value='<?=$categoryId?>'/>
		<input name="title" placeholder="title" type="text" value="<?php echo $row['title'];?>"/></br></br>
		<input name="numberproduct" placeholder="numberproduct" type="text" value="<?php echo $row['numberproduct'];?>"/></br></br>
		<input name="disciription" placeholder="disciription" type="text" value="<?php echo $row['disciription'];?>"/></br></br>
	
		<button type="submit"> ثبت و ارسال </button>
	</form>
</body>
</html>