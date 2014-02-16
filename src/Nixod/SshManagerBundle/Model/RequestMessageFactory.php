<?php
namespace Nixod\SshManagerBundle\Model;

use Nixod\SshManagerBundle\Exception\BadRequestException;
use Nixod\SshManagerBundle\Model\RequestMessage;

class RequestMessageFactory {
    
    private $commands = array('connect', 'exec');
    
    public static function createRequestMessage($data) {
        $request= trim($data);
        $request = json_decode($request, true);
        if (!$request) {
            throw new BadRequestException('provided data is not valid', 0, $data);
        }
        if(empty($request['command'])) {
            throw new BadRequestException('[command] is not prvided', 0, $data);
        }
        if(empty($request['parameters'])) {
            throw new BadRequestException('[parameters] is not prvided', 0, $data);
        }
        $requestMessage = new RequestMessage();
        switch($request['command']) {
            case RequestMessage::COMMAND_CONNECT_PASSWORD:
                if(empty($request['parameters']['host'])) {
                    throw new BadRequestException('[parameters][host] is not prvided', 0, $data);
                }
                if(empty($request['parameters']['username'])) {
                    throw new BadRequestException('[parameters][username] is not prvided', 0, $data);
                }
                if(empty($request['parameters']['password'])) {
                    throw new BadRequestException('[parameters][password] is not prvided', 0, $data);
                }
                break;
            case RequestMessage::COMMAND_EXEC:
                if(empty($request['parameters']['connection'])) {
                    throw new BadRequestException('[parameters][connection] is not prvided', 0, $data);
                }
                if(empty($request['parameters']['command'])) {
                    throw new BadRequestException('[parameters][command] is not prvided', 0, $data);
                }
                break;
            default:
                throw new BadRequestException(sprintf('command %s is not supported', $request['command']));
        }
        
        $requestMessage->setCommand($request['command'])->setParameters($request['parameters']);
        
        return $requestMessage;
    }
}