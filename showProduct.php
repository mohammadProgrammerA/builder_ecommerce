<?php
   
    $uri=$_SERVER['REQUEST_URI'];
    $uriArray=explode("/",$uri);
    $uriProduct=$uriArray[3];
	$result = factoryClass :: makeObject("product");
    $product = $result ->find($uriProduct);
    $rowProduct=$product->fetch_assoc();
    
	$resultCategory = factoryClass :: makeObject("category");
    $category = $resultCategory -> find($rowProduct['categoryid']);
    $rowCategory=$category->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show product by id = <?=$uriProduct;?></title>
</head>
<body>
    </br>
    <div style="width:720px;height:72px;background-color:yellow;">
   

        <div style="width:100px;height:50px;background-color:skyblue;float:left;margin-top:7px;margin-left:10px;">
            <span style='float:left;margin-top:10px;margin-left:30px;'><?=$rowProduct['nameproduct'];?></span>
        </div>
        <div style="width:100px;height:50px;background-color:skyblue;float:left;margin-top:7px;margin-left:10px;">
            <span style='float:left;margin-top:10px;margin-left:30px;'><?=$rowProduct['price'];?></span>
        </div>
        <div style="width:100px;height:50px;background-color:skyblue;float:left;margin-top:7px;margin-left:10px;">
            <span style='float:left;margin-top:10px;margin-left:30px;'><?=$rowProduct['color'];?></span>
        </div>
        <div style="width:100px;height:50px;background-color:skyblue;float:left;margin-top:7px;margin-left:10px;">
            <span style='float:left;margin-top:10px;margin-left:30px;'><?=$rowProduct['exist'];?></span>
        </div>
        <?php
            //  $categoryConn=new categoryConnection();
            //  $resultCategory=$categoryConn->find($rowProduct['categoryid']);
            //  var_dump($resultCategory);
            //  $rowCategory=$resultcategory->fetch_assoc();
            //  var_dump($rowCategory);
        ?>
        <div style="width:100px;height:50px;background-color:skyblue;float:left;margin-top:7px;margin-left:10px;">
            <span style='float:left;margin-top:10px;margin-left:30px;'><?=$rowCategory['title'];?></span>
        </div>

        <a href="http://localhost/router/editShowProduct/<?php echo $rowProduct['id'];?>"><div style="width:72px;height:30px;background-color:skyblue;float:left;margin-top:20px;margin-left:10px;">edite</div></a>
		 
         <a href="http://localhost/router/deletShowProduct/<?php echo $rowProduct['id'];?>"><div style="width:72px;height:30px;background-color:red;float:left;margin-top:20px;margin-left:10px;">delet</div></a>   
    </div> 
</body>
</html>