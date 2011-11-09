<?php
    Class Template {
        private $_render = FALSE;
        private $_data = array();
        
        function __construct($template) {
            $file = APP . 'templates' . DS . $template . EXT;
            
            $this->_render = $file;
        }
        
        function _assign($variable, $value) {
            $this->_data[$variable] = $value;
        }
        
        function _render($direct_output = TRUE) {
            if ($direct_output !== TRUE) {
                ob_start();
            }
            
            $data = $this->_data;
            include($this->_render);
            
            if ($direct_output !== TRUE) {
                ob_get_clean();
            }
        }
    }
?>