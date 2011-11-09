<?php
    Class Template {
        private $render = FALSE;
        private $data = array();
        
        function __construct($template = NULL) {
            if (!is_null($template)) {
                $file = APP . 'templates' . DS . $template . EXT;
            
                $this->render = $file;
            }
        }
        
        function assign($variable, $value) {
            $this->data[$variable] = $value;
        }
        
        function render($direct_output = TRUE) {
            if ($direct_output !== TRUE) {
                ob_start();
            }
            
            $data = $this->data;
            include($this->render);
            
            if ($direct_output !== TRUE) {
                ob_get_clean();
            }
        }
    }
?>