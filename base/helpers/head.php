<?php
    function css($css, $path = 'css') {
        $dir = SOURCE . $path . DS . $css;
        $dir = str_replace("\\", '/', $dir);
        return("<link rel=\"stylesheet\" href=\"/" . $dir . "\" />\n");
    }
    
    function js($js, $path = 'js') {
        return("<script type=\"text/javascript\" src=\"" . SOURCE . $path . DS . $js . "\" />\n");
    }
?>