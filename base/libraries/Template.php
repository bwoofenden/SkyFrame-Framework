<?php
    Class Template {
        private $_render = FALSE;
        private $_data = array();
        
        function __construct($template = NULL) {
            if (!is_null($template)) {
                $header = APP . 'templates' . DS . 'includes' . DS . 'header' . EXT;
                $body = APP . 'templates' . DS . $template . EXT;
                $footer = APP . 'templates' . DS . 'includes' . DS . 'footer' . EXT;
            
                $this->_render[] = $header;
                $this->_render[] = $body;
                $this->_render[] = $footer;
            }
        }
        
        function _assign($variable, $value) {
            $this->_data[$variable] = $value;
        }
        
        function _render($direct_output = TRUE) {
            if ($direct_output !== TRUE) {
                ob_start();
            }
            
            $data = $this->_data;
            foreach ($this->_render as $file) {
                include($file);
            }
            
            if ($direct_output !== TRUE) {
                ob_get_clean();
            }
        }
    }
?>