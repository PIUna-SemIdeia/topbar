<?php
spl_autoload_register(function($class_name){
    
    $fileName = $class_name.DIRECTORY_SEPARATOR.".php"; 
    
    if(file_exists($fileName)){
       require_once($fileName);
    }
});
 
?>