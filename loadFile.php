<?php

	class loadFile implements loadFileInterface{ 
		public function loadFile($fileName){
			$fileName = $fileName .".php";
			if(file_exists($fileName)){
				include "$fileName";
			}
			if(!file_exists("$fileName")){
				include "404.php";
			}	
		}
	}
	
?>
