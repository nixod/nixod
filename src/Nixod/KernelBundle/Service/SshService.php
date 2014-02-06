<?php

namespace Nixod\KernelBundle\Service;

class SshService {

    protected $connections;
    
    public function __construct() {
        $this->connections = array();
    }
    public function exec($connectionId, $command) {
        $stream = $this->connections[$connectionId];
        $output = null;
        exec($command, $output);
        return $output;
    }

    /**
     * returns a connection ID
     * @param type $host
     * @param type $port
     * @param type $username
     * @param type $password
     */
    public function connect($host, $username, $password) {
        $ssh = new \Net_SSH2($host);
        if (!$ssh->login($username, $password)) {
            exit('Login Failed');
        }
        
        return $ssh;
    }
    
    public function getConnection($connectionId) {
        return $this->connections[$connectionId];
    }

}