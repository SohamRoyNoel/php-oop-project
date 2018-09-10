<?php
 // if we forget to add class in init.php this gonna create a fetal error, so its better to use AUTOLOAD in a run

/*
 * OLD MAY BE DEPRECATED
     * function __autoload($class){
        $class = strtolower($class);
        $the_path = "includes/{$class}.php";

        if (file_exists($the_path)){
            require_once ($the_path);
        } else {
            die();
        }
    }
*/

function AutoLoader($class){
    $class = strtolower($class);
    $the_path = "includes/{$class}.php";

    if (file_exists($the_path)){
        require_once ($the_path);
    } else {
        die();
    }
}

spl_autoload_register('AutoLoader');