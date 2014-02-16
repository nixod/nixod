<?php
namespace Nixod\BaseBundle\Exception;

class NixodException extends \Exception {

    public function __construct ($message = 'Nixod exception', $code = 1, $data = null) {
        parent::__construct($message, $code);
    }
    
    public function toJson() {
        return json_encode($this->toArray());
    }
    public function toArray() {
        return array('error'=>$this->getMessage(), 'code'=>$this->getCode());
    }
}