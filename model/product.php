<?php
    
    class product extends model {

        protected static $table="product";

        protected $relateTo=["categoryid"=>["category","id","alias" => ["cat_data","title"]]];

        public static function sort_product_max($az,$ta){

            self::select();
            $className = static::class;

            $model = factoryClass :: makeObject($className);
            $model -> limit($az, $ta);
            $all_product = $model -> get();
             
            $product_rows = [];
            $sort_product = [];
                                                                                                                        
            while($product = $all_product -> fetch_assoc()){
                $product_rows [] = $product;
            }
            
            for($i = count($product_rows) - 1  ; $i >= 0 ; $i --){
                
                $min_price = $product_rows[array_keys($product_rows)[0]]["price"];

                $key = array_keys($product_rows)[0];

                foreach($product_rows as $k => $product){
                    
                    if($min_price > $product["price"]){
                        $min_price = $product["price"];
                        $key = $k;
                    }
                    
                }
                $sort_product[] = $product_rows[$key];
                unset($product_rows[$key]);
            }

            return $sort_product;

        }


        public static function sort_product_min($az,$ta){

        self::select();
        $className = static::class;

        $model = factoryClass :: makeObject($className);
        $model -> limit($ta,$az);

        $all_product = $model -> get();

        $product_rows = [];
        while($product = $all_product -> fetch_assoc()){
            $product_rows [] = $product;
        }
        
        for($i=0;$i < count($product_rows) -1;$i++){
            
            for($j=0;$j < count($product_rows) -1 - $i  ;$j++){
                if($product_rows[$j]['price'] <= $product_rows[$j+1]['price']){
                    $x = $product_rows[$j];
                    $product_rows[$j] = $product_rows[$j+1] ;
                    $product_rows[$j+1] = $x;
                }
            }
        }
        
        return $product_rows;
            // self::select();
            // $className = static::class;
            // $model = factoryClass :: makeObject($className);
            // $model -> limit($ta,$az);
            // $all_product = $model -> get();

            // $product_rows = [];
            // $sort_product = [];

            // while($product = $all_product -> fetch_assoc()){
            //     $product_rows [] = $product;
            // }


            // for($i = count($product_rows) - 1  ; $i >= 0 ; $i --){
            //     $max_price = $product_rows[array_keys($product_rows)[0]]["price"] ;
            //     $key = array_keys($product_rows)[0];

            //     foreach($product_rows as $k => $product){
            //         if($max_price < $product["price"]){
            //             $max_price = $product["price"];
            //             $key = $k;
            //         }
            //     }

            //     $sort_product[] = $product_rows[$key];
            //     unset($product_rows[$key]);
            // }
            
            // return $sort_product;

            
        }


    }
	
    
?>