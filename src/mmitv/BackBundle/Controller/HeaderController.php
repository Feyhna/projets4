<?php
/**
 * Created by PhpStorm.
 * User: Feyhna
 * Date: 21/03/2015
 * Time: 17:56
 */
namespace mmitv\BackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MenuController extends Controller
{
    public function headerAction()
    {
        $this->render("mmitvBackBundle:Header:header.html.twig");
    }
}