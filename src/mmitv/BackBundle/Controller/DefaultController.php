<?php

namespace mmitv\BackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\UserBundle\Controller\SecurityController;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('mmitvBackBundle:Default:index.html.twig');
    }
}
