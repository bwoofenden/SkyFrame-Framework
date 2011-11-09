<?php
    Class Controller {
        function __construct() {
            
        }
        
        function __global() {
            global $Registry;
            
            $this->_title = 'SkyFrame :: ';
            $this->_db = $Registry->getObject('db');
        }
    }
?>