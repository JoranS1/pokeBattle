<?php
// an autoload function so that I only have to require one file

spl_autoload_register(function($className){
    $file = $className . '.php';
    if(file_exists($file)){
        include $file;
    }
});