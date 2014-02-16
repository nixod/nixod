<?php

namespace Module\LoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class IndexController extends Controller
{
    public function indexAction()
    {
        $html =  $this->renderView('ModuleLoginBundle:Index:index.html.twig');
        return new JsonResponse(array('module'=>'login', 'html'=>$html));
    }
    
    public function loginAction($host, $username, $password) {
        $sshService = $this->container->get('nixod_kernel.ssh');
        if($sshService->connect($host, $username, $password)) {
            return new JsonResponse(1);
        }
        return new JsonResponse(0);
    }
}
