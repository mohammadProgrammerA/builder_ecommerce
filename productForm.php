<?php
	$categoryConn=factoryClass :: makeObject("category");
?>


	<form action="getProductFormData" method="post" name="myForm">
		<input name="nameproduct" placeholder="nameproduct" type="text"/></br></br>
		<input name="caption" placeholder="caption" type="text"/></br></br>
		<input name="price" placeholder="price" type="number"/></br></br>
		<input name="color" placeholder="color" type="text"/></br></br>	
	    exist : <input name="exist" placeholder="exist" type="checkbox"/></br></br>
		<select name="categoryid">
			<option value="" hidden >choose a category</option>
		<?php
		
			$result=$categoryConn->all();
			while($row=$result->fetch_assoc()){
		?>

			<option value="<?php echo $row['id'];?>"> 
				<?php echo $row['title'];?>
			</option>
			
		<?php
			}
		?>
		</select></br></br>
		<button type="submit" onclick="submitForm(event)"> ثبت و ارسال </button>

	</form>
