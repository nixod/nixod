<?php

namespace Nixod\KernelBundle\Service;

use Symfony\Component\HttpFoundation\Session\Session;
use \Symfony\Component\DependencyInjection\Container;

class SshService {

    private $session;
    private $container;

    public function __construct(Container $container) {
        $this->container = $container;
        $this->session = new Session();
        $this->session->start();
        $this->connections = array();
    }

    public function connect($host, $username, $password) {
        $connectionId = md5($host . $username . $password);
        if ($this->session->has($connectionId)) {
            return $this->session->get($connectionId);
        }
        $socket = $this->connectSocket();
        
        $request = array(
            'command' => 1,
            'parameters' => array('host' => $host, 'username' => $username, 'password' => $password)
        );
        socket_write($socket, json_encode($request));
        $response = $this->readSocket($socket);
        $this->session->set($connectionId, $response);
        $this->session->set('connection', $connectionId);
        socket_close($socket);
        return $response;
    }
    
    public function isConnected() {
        return $this->session->has('connection');
    }
    
    public function exec($command, $connectionId = null) {
        if(!$connectionId) {
            $connectionId = $this->session->get('connection');
        }
        $connectionId = $this->session->get($connectionId);
        $socket = $this->connectSocket();
        $request = array('command' => 20, 'parameters' => array('connection' => $connectionId, 'command' => $command));
        socket_write($socket, json_encode($request));
        $response = $this->readSocket($socket);
        socket_close($socket);
        
        return $response;
    }

    private function connectSocket() {
        $socket = socket_create(AF_UNIX, SOCK_STREAM, 0);
        if (!$socket) {
            throw new \Exception(sprintf('Unable to create AF_UNIX socket, %s', socket_strerror(socket_last_error())));
        }
        $socketPath = $this->container->get('kernel')->getRootDir() . DIRECTORY_SEPARATOR . 'nixod.sock';
        if (!socket_connect($socket, $socketPath)) {
            throw new \Exception(sprintf('Unable to connect to %s", %s', $socketPath, socket_strerror(socket_last_error())));
        }
        $response = $this->readSocket($socket);
        if (!$response['response']) {
            throw new \Exception('Connection refused');
        }
        return $socket;
    }
    
    private function readSocket($socket) {
        $response = socket_read($socket, 65536);
        $response = json_decode($response, true);
        if (!$response) {
            //throw new \Exception("No answer received from server");
        }
        if (!empty($response['error'])) {
            throw new \Exception($response['error']);
        }
        return $response;
    }

}