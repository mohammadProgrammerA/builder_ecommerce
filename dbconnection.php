<?php
    class dbconnection{
        public $connection;
        function __construct($server,$user,$password,$dbName){
            $this->connection=new mysqli($server,$user,$password,$dbName);
        }
        public function create($insertQuery){
           $insertResult= $this->connection->query($insertQuery);
           return $insertResult;
        }
        public function select($selectQuery){
           $selectResult= $this->connection->query($selectQuery);
           return $selectResult;
        }
        public function update($updateQuery){
           $updateResult= $this->connection->query($updateQuery);
           return $updateResult;
        }
        public function delet($deletQuery){
           $deletResult= $this->connection->query($deletQuery);
           return $deletResult;
        }

    }
    $server='localhost';
    $user='root';
    $password='';
    $dbName='ecommerce';
    $newDbconnection=new dbconnection($server,$user, $password,  $dbName);
   //  if($newDbconnection instanceof dbconnection){
   //    echo "hast";
   //  }else{
   //    echo "nist";
   //  }
?>
