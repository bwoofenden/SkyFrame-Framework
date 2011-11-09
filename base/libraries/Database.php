<?php
    Class Database {
        private $_conn;
        private $_query;
        private $_result;
        
        function __construct($host, $user, $pass, $name) {
            $this->_conn = new mysqli($host, $user, $pass, $name);
        }
        
        function prepare($query) {
            $this->_query = $query;
        }
        
        function query() {
            if (isset ($this->_query)) {
                $this->_result = $this->_conn->query($this->_query);
            }
        }
        
        function fetch($type = 'array') {
            switch ($type) {
                case 'array':
                    $row = $this->_result->fetch_array();
                    break;
                case 'object':
                    $row = $this->_result->fetch_object();
                    break;
                default:
                    $row = $this->_result->fetch_array();
                    break;
            }
            return $row;
        }
    }
?>