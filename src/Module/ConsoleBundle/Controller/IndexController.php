<?php

namespace Module\ConsoleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class IndexController extends Controller
{
    public function indexAction()
    {
        $html =  $this->renderView('ModuleConsoleBundle:Index:index.html.twig');
        return new JsonResponse(array('module'=>'console', 'html'=>$html));
    }
}
