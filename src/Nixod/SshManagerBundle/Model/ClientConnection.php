<?php

namespace Nixod\SshManagerBundle\Model;

class ClientConnection {

    private $socket;
    private $lastUsed;
    

    public function __construct($socket) {
        $this->socket = $socket;
        $this->lastUsed = new \DateTime();
        $this->connections = array();
    }

    public function read($length = 65536) {
        return socket_read($this->socket, $length);
    }
    
    public function write($data) {
        echo json_encode($data).PHP_EOL;
        $this->lastUsed = new \DateTime();
        socket_write($this->socket, json_encode($data).PHP_EOL);
    }
    

    public function getIdleTime() {
        
    }
}