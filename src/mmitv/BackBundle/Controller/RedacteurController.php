<?php
/**
 * Created by PhpStorm.
 * User: Feyhna
 * Date: 20/03/2015
 * Time: 22:26
 */

namespace mmitv\BackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RedacteurController extends Controller
{
    public function indexAction()
    {
        return $this->render('mmitvBackBundle:Redacteur:index.html.twig');
    }
}