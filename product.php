<?php
   
    $product=factoryClass::makeObject("product");
	$allProduct = $product ::all();

	$uriRouter = $_SERVER["REQUEST_URI"];
	$uriArr = explode("/", $uriRouter);


	if($uriArr[count($uriArr) -2] == "page"){

		$num_rows = $allProduct -> num_rows;
		$allProduct = product :: select()->with(["categoryid"]) ->pageInit($uriArr[4]) ->get();
		for($i = 0 ; $i < $num_rows/5; $i ++){
	
	?>

		<a href="http://localhost/router/product/page/<?=$i+1;?>">
               <button ><?=$i+1 ; ?></button>
        </a>

	<?php

		}
	}

	// die();

	// $allProduct =product::select(["id","nameproduct","price","color","caption","exist","categoryid"]) -> with(["categoryid"]) ->get();
	// $allProduct =product::select() -> with(["categoryid"]) ->get();

	foreach($allProduct as $product){

		// $catResult=factoryClass::makeObject("category");
		// $category = category::find($product['categoryid']);
		
		
		// $rowCategory=$category->fetch_assoc();
?>

	<div style="width:1000px;height:72px;background-color:yellow;margin-top:20px;margin-left:250px;">
	     <div style="width:72px;height:60px;background-color:white;float:left;margin-top:6px;margin-left:15px;">
		 	<?php echo $product['nameproduct'];?>
		 </div>
	     <div style="width:72px;height:60px;background-color:white;float:left;margin-top:6px;margin-left:15px;">
		 	<?php echo $product['caption'];?>
		 </div>
	     <div style="width:72px;height:60px;background-color:white;float:left;margin-top:6px;margin-left:15px;">
		 	<?php echo $product['price'];?>
		 </div>
	     <div style="width:72px;height:60px;background-color:white;float:left;margin-top:6px;margin-left:15px;">
		 	<?php echo $product['color'];?>
		 </div>
	     <div style="width:72px;height:60px;background-color:white;float:left;margin-top:6px;margin-left:15px;">
		 	<?php echo $product['exist'];?>
		 </div>

		 <div style="width:72px;height:60px;background-color:white;float:left;margin-top:6px;margin-left:15px;">
		 	<?php echo $product['cat_data'];?>
		 </div>
	     
	    
		 
		    <a href="http://localhost/router/editProduct/<?php echo $product['id'];?>"><div style="width:72px;height:30px;background-color:skyblue;float:left;margin-top:20px;margin-left:15px;">edite</div></a>
		 
		    <a href="http://localhost/router/deletProduct/<?php echo $product['id'];?>"><div style="width:72px;height:30px;background-color:red;float:left;margin-top:20px;margin-left:15px;">delet</div></a>

		    <a href="http://localhost/router/showProduct/<?php echo $product['id'];?>"><div style="width:72px;height:30px;background-color:gray;float:left;margin-top:20px;margin-left:15px;">show</div></a>
	</div>

<?php
	}

?>

<?php  /*در تگ a href توجه شود در دابل کوتیشن آن*/  ?>


<br><br>
<form action="/router/sortProduct/page_result/1" method="POST">
     <input type="text" name ="az" placeHolder ="شروع محدودیت نمایش از">
     <input type="text" name ="ta" placeHolder="  نمایش تا">
     <button>فیلتر نمایش</button>
</form>