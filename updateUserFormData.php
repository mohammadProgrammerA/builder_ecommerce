<?php
    include "dbconnection.php";

    $idEdite=$_POST['idEdite'];
   
 
   $userConn=factoryClass :: makeObject("user");	
   $result=$userConn->update($_POST);
    if($result){echo "👍";}
    if(!$result){echo "👎";}
?>