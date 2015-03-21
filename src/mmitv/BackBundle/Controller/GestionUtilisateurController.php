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

        $userManager = $this->get('fos_user.user_manager');
        $users = $userManager->findUsers();


        return $this->render('mmitvBackBundle:GestionUtilisateur:afficheuser.html.twig',
            array(
                'users' => $users
            ));
    }
}