<?php
    $uri=$_SERVER["REQUEST_URI"];
    $array=explode("/",$uri);
    $idShow=$array[3];
    $resultUpdate=factoryClass :: makeObject("product");
	$product = $resultUpdate -> find($idShow);
    $rowProduct=$product->fetch_assoc();
?>

    <form action="/router/getDataShowProduct" method="post">
        <input type="hidden" name="idEdite" value="<?=$idShow;?>"/>
        <input type="text" name="nameproduct" value="<?=$rowProduct['nameproduct'];?>"/></br></br>
        <input type="text" name="price" value="<?=$rowProduct["price"];?>"/></br></br>
        <input type="text" name="color" value="<?=$rowProduct["color"];?>"/></br></br>
        <input type="text" name="caption" value="<?=$rowProduct['caption'];?>"/></br></br>
        <input type="checkbox" name="exist" <?php if($rowProduct['exist']=="on"){echo "checked";}?>/></br></br>
        <select name="categoryId">
            <?php
			   $resultCat = factoryClass :: makeObject("category","all");
                while($rowCategory=$resultCat->fetch_assoc()){
            ?>
            <option value="<?=$rowCategory['id'];?>" <?php if($rowProduct['categoryid']==$rowCategory['id']){echo "selected";}?> ><?=$rowCategory['title'];?></option>
            <?php
                }
            ?>
        </select>
        <button type="submit">save</button>
    </form>
