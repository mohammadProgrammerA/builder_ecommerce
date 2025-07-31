<?php

    $uri=$_SERVER['REQUEST_URI'];
    $uriArray=explode("/",$uri);
    $idEdite=$uriArray[3];

    // $userConn=factoryClass :: makeObject("user");	
	$result=user :: find($idEdite);
	$rowUser=$result->fetch_assoc();
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user Form</title>
</head>
<body>
    </br>
    <form action="/router/updateUserFormData" method="post">
        <input type="hidden" name="idEdite" value="<?=$idEdite;?>">
        <input type="text" name="name" value="<?=$rowUser['name'];?>"></br></br>
        <input type="text" name="family"  value="<?=$rowUser['family'];?>" ></br></br>
        <input type="number" name="age"  value="<?=$rowUser['age'];?>"></br></br>
        <input type="text" name="userPassword"  value="<?=$rowUser['userpassword'];?>" ></br></br>
        <button>submit</button>                                    
    </form>
</body>
</html>