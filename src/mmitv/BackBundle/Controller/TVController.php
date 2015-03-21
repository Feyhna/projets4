<?php
/**
 * Created by PhpStorm.
 * User: Feyhna
 * Date: 21/03/2015
 * Time: 13:47
 */

namespace mmitv\BackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TVController extends Controller
{
    public function indexAction(){

        return $this->render('mmitvBackBundle:TV:index.html.twig');
    }

}