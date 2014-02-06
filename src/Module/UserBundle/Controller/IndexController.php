<?php

namespace Module\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IndexController extends Controller
{
    public function indexAction()
    {
        return $this->render('ModuleUserBundle:Index:index.html.twig');
    }
}
