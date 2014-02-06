<?php
namespace Module\BaseBundle\Exception;

class ModuleException extends \Exception{
    
    public function __construct($message = 'Module Exception', $code = 0, $previous = null) {
        parent::__construct($message, $code, $previous);
    }

}