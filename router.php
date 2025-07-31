<?php
    class router implements routerInteface{
		
        private $uri;
		private $uriArray;
		
		public function setUri($uri){
			$this->uri=$uri;
			
		}
		
		public function parseUri(){
			$array=explode("/",$this->uri);
			$this->uriArray=$array;
		}
		public function getUriArray(){
			return $this->uriArray;
		}	
    }
	
?>