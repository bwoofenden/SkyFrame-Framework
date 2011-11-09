<?php
    Class Database {
        private $_conn;
        private $_query;
        private $_result;
        
        function __construct() {}
        
        public function connect($host, $user, $pass, $name) {
            $this->_conn = new mysqli($host, $user, $pass, $name);
        }
        
        public function prepare($query) {
            $this->_query = $query;
        }
        
        public function query() {
            if ($this->_query) {
                $this->_result = $this->_conn->query($host, $user, $pass, $name);
            }
        }
        
        public function fetch($type = 'object') {
            switch ($type) {
                case 'array':
                    $row = $this->_result->fetch_array();
                    break;
                case 'object':
                    
                default:
                    $row = $this->_result->fetch_objecy();
            }
            return $row;
        }
    }
?>