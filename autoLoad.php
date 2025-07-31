<?php
    class autoLoad{
        public function myFunction($class){

            $className = $class . ".php";
            if($class == "product" || $class=="category" || $class == "mainDb" ||$class=="user" ||$class =="footer"){
                $className = "model/" .  $className;
            }

            if($class == "mainFuncs"){
                $className="interface/interfaceModel/".$className;
            }
             if($class == "factoryClass"){
                $className="factory/".$className;
             }
             if($class == "classFactory"){
                $className="interface/interfaceFactory/".$className;
                
             }
			 if($class == "primary"){
                $className="interface/interfacePrimary/".$className;
			 }
			 if($class == "loadFileInterface"){
                $className="interface/interfaceLoadFile/".$className;
			 }
			 if($class == "routerInteface"){
                $className="interface/interfaceRouter/".$className;
			 }
			 if($class == "categoryInterface"){
                $className="interface/interfaceCategory/".$className;
			 }
			 if($class == "productInterface"){
                $className="interface/interfaceProduct/".$className;
			 }
            
            if($class == "userInterface"){
                $className="interface/interfaceUser/".$className;
			}

            if($class=="footerInterface"){
                $className="interface/interfaceFooter/".$className;
            }

            
            if($class=="footerConnection"){
                $className="model/".$className;
            }

            if($class=="model"){
                $className="builder/".$className;
            }

            if($class=="interfaceBuilder"){
                $className="interface/interfaceBuilder/".$className;
            }
           
            if(file_exists($className)){
                include "$className";
            }else{
                die("Class ** $class ** Not found </br>");
            }
        }
    }
    $autoLoad=new autoLoad();
    spl_autoload_register([$autoLoad , 'myFunction']);
    
?>