<?php

namespace Module\CronBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IndexController extends Controller
{
    public function indexAction()
    {
        return $this->render('ModuleCronBundle:Index:index.html.twig');
    }
}
