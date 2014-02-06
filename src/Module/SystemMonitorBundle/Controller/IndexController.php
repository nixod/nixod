<?php

namespace Module\SystemMonitorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IndexController extends Controller
{
    public function indexAction()
    {
        return $this->render('ModuleSystemMonitorBundle:Index:index.html.twig');
    }
}
