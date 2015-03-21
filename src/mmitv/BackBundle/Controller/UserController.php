<?php
/**
 * Created by PhpStorm.
 * User: Feyhna
 * Date: 20/03/2015
 * Time: 22:26
 */

namespace mmitv\BackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    public function indexAction()
    {
        return $this->render('mmitvBackBundle:User:index.html.twig');
    }
}