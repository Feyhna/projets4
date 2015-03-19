<?php

namespace mmitv\BackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('mmitvBackBundle:Default:index.html.twig', array('name' => $name));
    }
}
