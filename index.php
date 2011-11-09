<?php
    session_start();
    
    define('DS', DIRECTORY_SEPARATOR);
    define('BASE', 'base' . DS);
    define('APP', 'application' . DS);
    define('EXT', '.php');
    
    require(BASE . 'Common' . EXT);
    require(BASE . 'libraries' . DS . 'Registry' . EXT);
    $Registry = Object_Registry::singleton();
    $Registry->storeObject('tpl', new Template());
    $Registry->storeObject('router', new Router());
    $Router = $Registry->getObject('router');
?>