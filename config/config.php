<?php

    session_start();

    function autoload($class){
        require_once 'classes/'.$class.'.php';
    }

    spl_autoload_register('autoload')
?>