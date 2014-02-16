<?php

namespace Nixod\SshManagerBundle\Model;

class RequestMessage {

    const COMMAND_CONNECT_PASSWORD = 1;
    const COMMAND_EXEC = 20;

    private $command;
    private $parameters;

    public function getCommand() {
        return $this->command;
    }

    public function setCommand($command) {
        $this->command = $command;
        return $this;
    }

    public function getParameters() {
        return $this->parameters;
    }

    public function getParameter($parameterName) {
        if (empty($this->parameters[$parameterName])) {
            return null;
        }
        return $this->parameters[$parameterName];
    }

    public function setParameters($parameters) {
        $this->parameters = $parameters;
        return $this;
    }

}