<!DOCTYPE html>
<html>
<head>
    <title> 
        <?php 
            $uri=$_SERVER["REQUEST_URI"];
            $uriArr=explode("/",$uri);
            if($uriArr[2] == ""){
                echo "home";
            }
            echo $uriArr[2];
        ?>
    </title>
</head>
<body>
    
<?php
    include "menu.php";
?>