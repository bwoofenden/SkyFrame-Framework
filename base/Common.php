<?php
    function __autoload($className) {
        $class = ucfirst($className);
        $file = BASE . 'libraries' . DS . $class . EXT;
        if (file_exists($file)) {
            require_once($file);
        } else {
            exit("Class '$class' was not found in '$file'");
        }
    }
?>