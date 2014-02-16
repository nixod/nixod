<?php

namespace Nixod\SshManagerBundle\Service;

use Nixod\SshManagerBundle\Model\ClientConnection;
use Nixod\SshManagerBundle\Exception\ConnectionException;
use Nixod\BaseBundle\Exception\NixodException;
use Nixod\SshManagerBundle\Model\RequestMessageFactory;
use Nixod\SshManagerBundle\Model\RequestMessage;
use Nixod\SshManagerBundle\Service\SshService;

class SshManagerService {

    private $clients;
    private $maxConnections;
    private $idleTimeout;
    private $sshService;
    private $connections;

    public function __construct(SshService $sshService) {
        $this->sshService = $sshService;
        $this->clients = array();
    }

    public function handle(ClientConnection $client) {
        $response = array('response' => 1);
        try {
            $this->clients[] = $client;
        } catch (NixodException $nixodException) {
            $response = $nixodException->toArray();
        }
        $client->write($response);
    }

    public function process() {
        foreach ($this->clients as $key => $client) {
            if (!$data = $client->read()) {
                continue;
            }
            try {
                $requestMessage = RequestMessageFactory::createRequestMessage($data);
                $response = $this->processRequest($requestMessage);
            } catch (NixodException $nixodException) {
                $response = $nixodException->toArray();
            }
            $client->write($response);
            //unset($this->clients[$key]);
        }
    }

    public function processRequest(RequestMessage $requestMessage) {
        switch ($requestMessage->getCommand()) {
            case RequestMessage::COMMAND_CONNECT_PASSWORD:
                $connection = $this->sshService->connect($requestMessage->getParameter('host'), $requestMessage->getParameter('username'), $requestMessage->getParameter('password'));
                $connectionId = md5(uniqid('connection' . $requestMessage->getParameter('host'), true));
                $this->addConnection($connectionId, $connection);
                return $connectionId;
                break;
            case RequestMessage::COMMAND_EXEC:
                if (!$connection = $this->getConnection($requestMessage->getParameter('connection'))) {
                    throw new ConnectionException("Invalid connection");
                }
                return $connection->exec($requestMessage->getParameter('command'));
                break;
        }
    }

    public function getMaxCconnections() {
        return $this->maxConnections;
    }

    public function setMaxConnections($maxConnections) {
        $this->maxConnections = $maxConnections;
        return $this;
    }

    public function getIdleTimeout() {
        return $this->idleTimeout;
    }

    public function setIdleTimeout($idleTimeout) {
        $this->idleTimeout = $idleTimeout;
        return $this;
    }

    public function addConnection($connectionId, $connection) {
        $this->connections[$connectionId] = $connection;
    }

    public function getConnection($connectionId) {
        if (empty($this->connections[$connectionId])) {
            return null;
        }
        return $this->connections[$connectionId];
    }

}