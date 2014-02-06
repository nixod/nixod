<?php

namespace Module\ExplorerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IndexController extends Controller
{
    public function indexAction()
    {
        return $this->render('ModuleExplorerBundle:Index:index.html.twig');
    }
}
