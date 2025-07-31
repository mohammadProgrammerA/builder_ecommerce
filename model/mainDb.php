<?php
   
    class mainDb implements mainFuncs{
        protected  $connection;

        protected static $table;

        private $serverName="localhost";
        private $userName="root";
        private $password="";
        private $dbName="ecommerce";
        
        function __construct(){
            
                $this->connection=new mysqli($this->serverName,$this->userName,$this->password,$this->dbName);
            
        }
        
    }
?>