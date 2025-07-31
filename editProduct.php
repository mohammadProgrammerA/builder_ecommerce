<?php
	$uri=$_SERVER['REQUEST_URI'];
	$uriArray=explode("/",$uri);
	$editeId=$uriArray[3];
	$resultUpdate=factoryClass :: makeObject("product");
	$product = $resultUpdate -> find($editeId);
	$rowEdite=$product->fetch_assoc();
	// echo $editeId;
?>
   
	<form action="/router/updateProductFormData" method="POST" name="myForm">
	    <input name="idEdite" type="hidden" value="<?php echo $editeId;?>">
		<input name="nameproduct" placeholder="nameproduct" type="text" value="<?php echo $rowEdite['nameproduct']; ?>"/></br></br>
		<input name="caption" placeholder="caption" type="text" value="<?php echo $rowEdite['caption'] ;?>"/></br></br>
		<input name="price" placeholder="price" type="text" value="<?php echo $rowEdite['price']; ?>"/></br></br>
		<input name="color" placeholder="color" type="text" value="<?php echo $rowEdite['color'];?>"/></br></br>	
	    exist : <input name="exist" type="checkbox" <?php if($rowEdite['exist']=="on"){echo "checked";}?> /></br></br>
		<select name="categoryId">
		<?php
			
			$resultSelect = factoryClass :: makeObject("category","all");
			while($row=$resultSelect->fetch_assoc()){
				
		?>
		
			<option value="<?php echo $row['id'];?>" <?php if($rowEdite['categoryid']==$row['id']){echo "selected";}?>> 
				<?php echo $row['title'];?>
			</option>
			
		<?php
			}
		?>
		</select></br></br>
		<button type="submit" onclick="submitForm(event)"> ثبت و ارسال </button>
	</form>
