<?php
    
    //import files
    include "config.php";
    include "function.php";
    
    //check Controller is available
    spl_autoload_register("autoLoadClass");
    $controller = getIndex('controller', 'homecontroller');
    $obj = new $controller;
?>
