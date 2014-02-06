<?php

namespace Module\ConsoleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class ConsoleController extends Controller
{
    public function executeAction($command)
    {
        $sshService = $this->get('nixod_kernel.ssh');
        return new JsonResponse($this->formatOutput($sshService->exec($command)));
    }
    
    private function formatOutput($output) {
        $output = implode("\n", $output);
        return $output;
    }
}
