<?php
/**
 * Created by PhpStorm.
 * User: Feyhna
 * Date: 21/03/2015
 * Time: 17:43
 */
namespace mmitv\BackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GestionUtilisateurController extends Controller
{
    public function afficheUserAction(){
        return $this->render('mmitvBackBundle:GestionUtlisateur:gestionuser.html.twig');
    }
}