<?php
    session_start();
    
    define('DS', DIRECTORY_SEPARATOR);
    define('BASE', 'base' . DS);
    define('APP', 'application' . DS);
    define('EXT', '.php');
    
    require(BASE . 'Common' . EXT);
    require(BASE . 'libraries' . DS . 'Registry' . EXT);
    $Registry = Object_Registry::singleton();
    $Registry->storeObject('tpl', new Template('general'));
    
    $Master = $Registry->getObject('tpl');
    $Master->_assign('title', 'Welcome');
    $Master->_assign('content', 'Hello World!');
    $Master->_render();
?>