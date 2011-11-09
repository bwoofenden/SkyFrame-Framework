<?php
    Abstract Class SkyFrame_Registry {
        abstract protected function get($key);
        abstract protected function set($key,$val);
    }
    
    Class Object_Registry extends SkyFrame_Registry {
        private static $instance;
        private $_objs = array();
        
        private function __construct() {}
        
        public function __clone() {}
        
        public static function singleton() {
            if (!isset (self::$instance)) {
                $obj = __CLASS__;
                self::$instance = new $obj();
            }
            return self::$instance;
        }
        
        protected function get($key) {
            if (isset ($this->_objs[$key])) {
                return $this->_objs[$key];
            }
        }
        
        protected function set($key,$val) {
            $this->_objs[$key] = $val;
        }
        
        public function getObject($key) {
            return self::singleton()->get($key);
        }
        
        public function storeObject($key, $instance) {
            return self::singleton()->set($key, $instance);
        }
    }