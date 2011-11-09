<?php
    Class Controller {
        function __construct() {
            loader::library('database', TRUE, FALSE);
            loader::library('template', TRUE, FALSE);
            loader::helper('head', FALSE, FALSE);
        }
        
        function __global() {}
    }
?>