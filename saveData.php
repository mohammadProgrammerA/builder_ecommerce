<?php
    class saveData{
        public static $data;

        public static function setData($data){
            // self::$data = "";
            self ::$data = $data;
        }
        public static function getData(){
            // die();
            return self :: $data;
        }
    }
?>