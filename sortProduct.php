<?php
	$uriRouter = $_SERVER["REQUEST_URI"];
	$uriArr = explode("/", $uriRouter);

	if($_POST){
          
		if($_POST["az"] < $_POST["ta"]){
			$allProduct = product:: sort_product_max($_POST["az"],$_POST["ta"]);
		}
		
		if($_POST["ta"] < $_POST["az"]){
			$allProduct = product:: sort_product_min($_POST["az"],$_POST["ta"]);
		}
          
    }

	if($uriArr[3] == "page_result"){

		if($_POST){
			$az = $_POST["az"];
			$ta = $_POST["ta"];
			
		}else{
			$az = $uriArr[5];
			$ta = $uriArr[6];
		
		}

		$numberRow = ($ta - $az) ;
		$count = abs($numberRow);
		

		for($i = 0;$i<$count/ 5;$i++){
			
			
	?>

		<a href="http://localhost/router/sortProduct/page_result/<?=$i+1;?>/<?=$az?>/<?=$ta?>">
            <button><?=$i+1;?></button>
        </a>

	<?php

		}

		if(isset($uriArr[5])){
			
			if($uriArr[5] < $uriArr[6]){
				$allProduct = product:: sort_product_max($uriArr[5] , $uriArr[6]);
			}
			if($uriArr[5] > $uriArr[6]){
				$allProduct = product:: sort_product_min($uriArr[5] , $uriArr[6]);
			}

		}
		
		$start = ($uriArr[4] - 1 ) * 5;
		$end = $uriArr[4] * 5;
		
		for($i = $start ; $i <$end ;$i++){
			if($i < count($allProduct)){
 
				$category = category::find($allProduct[$i]['categoryid']);
		$rowCategory=$category->fetch_assoc();
	?>


	<div style="width:1000px;height:72px;background-color:yellow;margin-top:20px;margin-left:250px;">
	     <div style="width:72px;height:60px;background-color:white;float:left;margin-top:6px;margin-left:15px;">
		 	<?php echo $allProduct[$i]['nameproduct'];?>
		 </div>
	     <div style="width:72px;height:60px;background-color:white;float:left;margin-top:6px;margin-left:15px;">
		 	<?php echo $allProduct[$i]['caption'];?>
		 </div>
	     <div style="width:72px;height:60px;background-color:white;float:left;margin-top:6px;margin-left:15px;">
		 	<?php echo $allProduct[$i]['price'];?>
		 </div>
	     <div style="width:72px;height:60px;background-color:white;float:left;margin-top:6px;margin-left:15px;">
		 	<?php echo $allProduct[$i]['color'];?>
		 </div>
	     <div style="width:72px;height:60px;background-color:white;float:left;margin-top:6px;margin-left:15px;">
		 	<?php echo $allProduct[$i]['exist'];?>
		 </div>
	     <div style="width:72px;height:60px;background-color:white;float:left;margin-top:6px;margin-left:15px;">
		 	<?php echo $rowCategory['title'];?>
		 </div>

		   <a href="http://localhost/router/editProduct/<?php echo $allProduct[$i]['id'];?>"><div style="width:72px;height:30px;background-color:skyblue;float:left;margin-top:20px;margin-left:15px;">edite</div></a>
		 
		    <a href="http://localhost/router/deletProduct/<?php echo $allProduct[$i]['id'];?>"><div style="width:72px;height:30px;background-color:red;float:left;margin-top:20px;margin-left:15px;">delet</div></a>

		    <a href="http://localhost/router/showProduct/<?php echo $allProduct[$i]['id'];?>"><div style="width:72px;height:30px;background-color:gray;float:left;margin-top:20px;margin-left:15px;">show</div></a>



	</div> 
			
	<?php
		}


	}
}

?>

<br><br>
<form action="/router/sortProduct/page_result/1" method="POST">
     <input type="text" name ="az" placeHolder ="شروع محدودیت نمایش از">
     <input type="text" name ="ta" placeHolder="  نمایش تا">
     <button>فیلتر نمایش</button>
</form>
