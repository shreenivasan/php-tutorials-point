<?php

class Dbconfig
{		
    private $_connection;
    private $_config;
    
    public function __construct($type = "read", $force = false)
    {
        $this->_connect();
    }
    
    protected function _connect(){
        if ($this->_connection) {
            return;
        }
        
        
    }
}

