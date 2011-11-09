<?php
    Class loader {
        private static $_libs = array();
        private static $_helps = array();
        
        static function library($library, $class = TRUE, $return = TRUE) {
            $library = ucfirst($library);
            if ($return !== TRUE) {
                if ($class !== TRUE) {
                    require(BASE . 'libraries' . DS . $library . EXT);
                } else {
                    require(BASE . 'libraries' . DS . $library . EXT);
                    self::$_libs[$library] = new $library();
                }
            } else {
                return new $library();
            }
        }
        
        static function helper($helper, $class = TRUE, $return = TRUE) {
            if ($return !== TRUE) {
                if ($class !== TRUE) {
                    require(BASE . 'helpers' . DS . $helper . EXT);
                } else {
                    require(BASE . 'helpers' . DS . $helper . EXT);
                    self::$_helps[$helper] = new $helper();
                }
            }
        }
    }
?>