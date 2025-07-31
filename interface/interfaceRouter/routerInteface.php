<?php
    interface routerInteface extends primary{
        public function parseUri();
        public function getUriArray();
    }
?>