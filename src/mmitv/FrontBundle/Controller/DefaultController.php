<?php

namespace mmitv\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('mmitvFrontBundle:Default:index.html.twig', array('name' => $name));
    }
}
