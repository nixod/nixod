<?php

namespace Nixod\SshManagerBundle\Service;

class SshService {

    
    public function __construct() {
    }
    
    public function exec($connection, $command) {
       
        return $connection->exec($command);
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
    
}