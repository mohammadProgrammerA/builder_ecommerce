<?php
      
    class footer extends model  { 
        protected static $table="footer";
        public $numRows;
     
        // public function insertOrUpdate($data){
        //     $name=$data["name"];
        //     $family=$data["family"];
        //     $number=$data["number"];
        //     $discriptionCopyright=$data["discriptionCopyright"];
            
        //     $select=$this->all();
          
           
        //     if($this->numRows ==0){
        //         $insertQ="INSERT INTO footer (name,family,number,discriptioncopyright) VALUE (' $name',' $family',' $number',' $discriptionCopyright')";
        //         return $this->connection->query($insertQ);
        //     }
        //     if($this->numRows !=0){
        //         $updateQ="UPDATE footer SET name='$name' , family=' $family' , number='$number' ,discriptioncopyright=' $discriptionCopyright' ";
        //         return $this->connection->query($updateQ);
        //     }
        // }
    }
?>