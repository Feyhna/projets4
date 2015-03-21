<?php
/**
 * Created by PhpStorm.
 * User: Feyhna
 * Date: 20/03/2015
 * Time: 23:38
 */

namespace mmitv\BackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminController extends Controller
{
    public function indexAction()
    {
        return $this->render('mmitvBackBundle:Admin:index.html.twig');
    }
}