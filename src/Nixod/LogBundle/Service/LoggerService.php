<?php
namespace Nixod\LogBundle\Service;

class LoggerService {
    
    protected $logger;
    
    public function __construct($logger) {
        $this->logger = $logger;
    }
}