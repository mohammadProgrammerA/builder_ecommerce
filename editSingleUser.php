<?php 
    //include "dbconnection.php";
    $uri=$_SERVER["REQUEST_URI"];
    $uriArray=explode("/",$uri);
    $idEdite=$uriArray[3];
    //$selectQ="SELECT * FROM user WHERE id = " . $idEdite;
    //$result=$newDbconnection->select($selectQ);
    //$row=$result->fetch_assoc();
	// $userConn=factoryClass :: makeObject("user");
	$result=user :: find($idEdite);
	$row=$result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

	<form action="/router/getEditeSingleUserData" method="post" name="formSingle">
        <input type="hidden" name="idEdite" value="<?=$idEdite;?>"/>
		<input name="name" type="text" value="<?=$row['name'];?>"/></br></br>
		<input name="family"  type="text" value="<?=$row['family'];?>"/></br></br>
		<input name="age"  type="number" value="<?=$row['age'];?>"/></br></br>
		<input name="userPassword"  type="text" value="<?=$row['userpassword'];?>"/></br></br>
	
		<button type="submit" onclick="submitEditeUser(event)"> ثبت و ارسال </button>

	</form>
    <div style="width:313px;height:313px;background-color:skyblue;" id="table"></div>

    <script src="submitEditeUser.js"></script>
</body>
</html>