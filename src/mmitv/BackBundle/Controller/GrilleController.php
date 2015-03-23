<?php
/**
 * Created by PhpStorm.
 * User: Feyhna
 * Date: 23/03/2015
 * Time: 19:02
 */
namespace mmitv\BackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GrilleController extends Controller
{
    public function grilleAction(){
        return $this->render('mmitvBackBundle:Grille:grille.html.twig');
    }
}