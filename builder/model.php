<?php
    
    class model extends mainDb implements interfaceBuilder {
    
        protected $type ; 
        protected $query ;
        protected $sub_query ;

        public static function select(array $fields=["*"]){
            
            $select_field='';
            $number = 0;

            for($i = 0 ; $i <count($fields) ; $i ++){
                $number ++;
                $select_field .= $fields[$i];
                if($number < count($fields)){
                    $select_field .= "," ;
                }
            }

            $className = static :: class;
            $model=factoryClass :: makeObject($className);
            $table = static :: $table;
            
            $model -> query = "SELECT $select_field ";

            $model -> type = "select";
            return $model;
        }

        protected function from(){
            $table = static :: $table;
            $from = "  FROM {$table} ";
            $this -> from = $from;
             
        }
        

        public function with($fields){
            $query =  $this -> query;
            $table = static :: $table;
            $subQuerys = [];
           
            for($i = 0 ;$i < count($fields);$i++){
                $table_name = $this -> relateTo[$fields[$i]] [0];
                $field_name = $this -> relateTo[$fields[$i]] [1];
                $alias = $this -> relateTo[$fields[$i]] ["alias"][0];
                $field_alias = $this -> relateTo[$fields[$i]] ["alias"][1];
              
                $select =  $table_name::select([$field_alias]);
         
                $model = $model = factoryClass :: makeObject($table_name);
                $where = $model -> where(  $table_name  ."." . $field_name ,$table .".".$fields[$i] ,"=") ;
                
                $query = $model -> render();
                $subQuerys [] = "($query ) {$alias}";
            }
           
            $subQuery ="";
            $number=0;
            for($j = 0 ;$j < count($subQuerys);$j++){
                $number ++;
                $subQuery .=$subQuerys [$j];
                if($number < count($subQuerys)){
                    $subQuery .=",";
                }
            }
            $this -> sub_query = " ,$subQuery  "; 

            return $this;
        }

       
    
        public static function all(){

            $className = static::class;
           
            $model = factoryClass :: makeObject($className);
            $table = static :: $table;
            $query = " SELECT * ";
            $model -> type ="select";
            $model -> query = $query;
            // return $model;
            return $model -> get();
            // return $model -> connection->query($query);

        }



        public static function find($id){

            $className = static::class;
            $table = static :: $table;
            $model=factoryClass :: makeObject($className);
            $findQ="SELECT * FROM {$table} WHERE id=".$id;
            return $model->connection->query($findQ);

        }


        public static function delete($id){

            $className = static::class;
            $model=factoryClass :: makeObject($className);
            $table = static :: $table;
            $deleteQ="DELETE FROM {$table} WHERE id=".$id;
            
            return $model->connection->query($deleteQ);

        }

        public static function create($data){
            
            $fileds = "(";
            $field_data = "(";
            $number = 0;
            foreach($data as $field => $data_filed){
                $number ++;
                $fileds .= $field;
                $field_data .= "'".$data_filed . "'";

                if($number < count($data)){
                        $fileds .= "," ;
                        $field_data .= "," ;
                }
            }
            $fileds .= ")";
            $field_data .= ")";
            $table = static :: $table;
            $className = static::class;
            $model=factoryClass :: makeObject($className);
            
            $insertQuery="INSERT INTO {$table}  $fileds VALUES $field_data";
            
            return $model->connection->query($insertQuery); 
        }
        
        public static function update($data){
            $idEdite=$data['idEdite'];
            $field_data = "";
            $number = 0;
            foreach($data as $field => $data_filed){
                $number ++;
                if($field != "idEdite"){
                    
                    $field_data  .= $field  .'=' . "'" . $data_filed ."'". "  ";
                    
                    if($number < count($data)){
                        $field_data .= "," ;
                    }
                }
            }
            
            $table = static :: $table;
            $updateQuery="UPDATE {$table} SET $field_data WHERE id=".$idEdite;
            $className = static::class;
            $model = factoryClass :: makeObject($className);
           
            return $model->connection->query($updateQuery);

        }

        public function where($field, $data, $jabr = '='){

            if (!in_array($this->type, ['select', 'update', 'delete'])) {
                throw new Exception("not where");
            }

            $this->where[] = "$field $jabr $data";
          
            return $this;

        }

        public function limit($offset,$limit){
            if (!in_array($this->type, ['select'])) {
                throw new Exception("not limit");
            }

            $this->limit = " LIMIT " . $offset . ", " . $limit;
            
            return $this;
        }

        public function pageInit($number){

            // $className = static::class;
            // $model = factoryClass :: makeObject($className);
            // $table = static :: $table;
            
            $limit = ($number -1) * 5 ;
            $query = " LIMIT $limit , 5 ";
            $this -> limit = $query;
            return $this;
            // return $model->connection->query($query);
            
        } 


        public function render(){
            $query = $this -> query;
           
            if (!empty($this->pageInit)) {
                $query .= $this->pageInit;
            }
            if($this -> type =="select"){
                $this -> from();
            }
            
            if(!empty($this->sub_query)){
                $query .= $this->sub_query;
            }
            
            if(!empty($this->from)){
                
                $query .= $this->from;
             
            }
            if (!empty($this->where)) {
                $query .= " WHERE " . implode(' AND ', $this -> where);
            }

            if (isset($this ->limit)) {
                $query .= $this->limit;
            }
            return $query;
          
        }
        



        public function get(){
         
            $query = $this -> render();
            var_dump($query);
            echo "<br>";
            // $className = static::class;
            return $this->connection->query($query);
        }




























        public static function sort($data){
            self::select();
            $className = static::class;
            $model = factoryClass :: makeObject($className);
            if($data["az"] < $data ["ta"] ){
                // $model -> limit($data["az"] -1 , $data ["ta"] - $data["az"] +1);
                for($i = $data["az"];$i<=$data["ta"];$i++){
                
                    $model -> limit($i -1 , 1 );
                    $sortData[] = $model -> get()->fetch_assoc();
                   
                }
                return $sortData;
            }

            if($data["ta"] < $data ["az"] ){
                $sortData=[];
                

                for($i = $data["az"];$i>=$data["ta"];$i--){
                    $model -> limit($i -1 , 1 );
                    $sortData[] = $model -> get() ->fetch_assoc();
                }
               
                return $sortData;
            }
        }



            }
?>