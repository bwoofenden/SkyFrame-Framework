<?php
    /**
     * Magic Autoloader function - 
     * loads missing files that are requested
     */
    function __autoload($className) {
        $class = ucfirst($className);
        $file = BASE . 'libraries' . DS . $class . EXT;
        if (file_exists($file)) {
            require_once($file);
        } else {
            exit("Class '$class' was not found in '$file'");
        }
    }
    
    /* defined variables below */
    if (!defined('APP'))
        define('APP', 'application'.DS);
?>