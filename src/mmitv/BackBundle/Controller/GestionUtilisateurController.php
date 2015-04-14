<?php
/**
 * Created by PhpStorm.
 * User: Feyhna
 * Date: 21/03/2015
 * Time: 17:43
 */
namespace mmitv\BackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Core\User\UserInterface;
use mmitv\BackBundle\Entity\User;
use FOS\UserBundle\Form\Type\ProfileFormType;
use Symfony\Component\HttpFoundation\Request;
use FOS\UserBundle\Model\UserManagerInterface;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class GestionUtilisateurController extends Controller
{
    public function indexAction(){

        $userManager = $this->get('fos_user.user_manager');
        $users = $userManager->findUsers();


        return $this->render('mmitvBackBundle:GestionUtilisateur:index.html.twig',
            array(
                'users' => $users
            ));
    }

    public function promoteAction($id, Request $request){

        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('mmitvBackBundle:User')->find($id);

        if (null === $user){
            throw new NotFoundHttpException( 'L\'utilisateur '.$id.' n\'a pas été trouvé.');
        }

        $form = $this->createFormBuilder()->getForm();

        if ($form->handleRequest($request)->isValid()) {
            $role = array('ROLE_REDACTEUR');
            $user->setRoles($role);
            $this->get('fos_user.user_manager')->updateUser($user, false);

            $this->getDoctrine()->getManager()->flush();
            return $this->render('mmitvBackBundle:GestionUtilisateur:validation.html.twig');
        }

        return $this->render('mmitvBackBundle:GestionUtilisateur:promote.html.twig', array(
            'user'  =>  $user,
            'form'  =>  $form->createView()
        ));
    }

    public function downgradeAction($id, Request $request){

        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('mmitvBackBundle:User')->find($id);

        if (null === $user){
            throw new NotFoundHttpException( 'L\'utilisateur '.$id.' n\'a pas été trouvé.');
        }
        $form = $this->createFormBuilder()->getForm();

        if ($form->handleRequest($request)->isValid()) {
            $role = array('ROLE_USER');
            $user->setRoles($role);
            $this->get('fos_user.user_manager')->updateUser($user, false);

            $this->getDoctrine()->getManager()->flush();
            return $this->render('mmitvBackBundle:GestionUtilisateur:validation.html.twig');
        }

        return $this->render('mmitvBackBundle:GestionUtilisateur:downgrade.html.twig', array(
            'user'  =>  $user,
            'form'  =>  $form->createView()
        ));
    }


    public function supprimerAction($id, Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('mmitvBackBundle:User')->find($id);

        if (null === $user){
            throw new NotFoundHttpException( 'L\'utilisateur '.$id.' n\'a pas été trouvé.');
        }
        $form = $this->createFormBuilder()->getForm();

        if ($form->handleRequest($request)->isValid()) {

            $username = $user->getUsername();

            $this->get('fos_user.user_manager')->deleteUser($user);

            $this->getDoctrine()->getManager()->flush();
            return $this->render('mmitvBackBundle:GestionUtilisateur:validation.html.twig');
        }

        return $this->render('mmitvBackBundle:GestionUtilisateur:supprimer.html.twig', array(
            'user'  =>  $user,
            'form'  =>  $form->createView()
        ));
    }
}