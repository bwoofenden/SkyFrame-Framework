<?php
    session_start();
    
    define('DS', DIRECTORY_SEPARATOR);
    define('BASE', 'base' . DS);
    define('SOURCE', 'source'.DS);
    define('EXT', '.php');
    
    require(BASE . 'libraries' . DS . 'Bootstrap' . EXT);
?>