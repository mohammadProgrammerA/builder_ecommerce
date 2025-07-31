<?php
     class factoryClass implements classFactory{
        protected static $instance = [];
        public static function makeObject($className ,$funcName1=false,$input=false){
            $object = new $className;
            if($input && $funcName1){
                $object->$funcName1($input);
                return $object;
            }

            if($funcName1){
                return $object->$funcName1();
            }

            
            if(!isset(self::$instance[$className])){
                self::$instance[$className]=new $className;
            }
            
            return self::$instance[$className];
            
        }
    }
?>