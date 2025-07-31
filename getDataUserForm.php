<?php
  
	$userConn=factoryClass :: makeObject("user");
	$result=$userConn->create($_POST);
	
    if($result){echo "👍";}
    if(!$result){echo "👎";}
    
?>