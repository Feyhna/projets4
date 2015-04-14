<?php
/**
 * Created by PhpStorm.
 * User: Feyhna
 * Date: 14/04/2015
 * Time: 18:10
 */
namespace mmitv\BackBundle\Controller;

use mmitv\BackBundle\Entity\Infos;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use mmitv\BackBundle\Form\InfoType;
use mmitv\BackBundle\Form\EditInfoType;

class InfoController extends Controller
{
    public function indexAction(){

        $em = $this->getDoctrine()->getManager()->getRepository('mmitvBackBundle:Infos');

        $infos = $em->findAll();

        return $this->render('mmitvBackBundle:Info:index.html.twig', array(
            'infos' => $infos
        ));
    }

    public function addAction(Request $request){
        $info = new Infos();
        $form = $this->get('form.factory')->create(new InfoType(), $info);

        if($form->handleRequest($request)->isValid()) {


            $em = $this->getDoctrine()->getManager();
            $em->persist($info);
            $em->flush();

            return $this->redirect($this->generateUrl('mmitv_info'));
        }

        return $this->render('mmitvBackBundle:Info:add.html.twig', array(
            'form' => $form->createView()
        ));
    }

    public function deleteAction($id, Request $request){

        $em = $this->getDoctrine()->getManager();

        $info = $em->getRepository('mmitvBackBundle:Infos')->find($id);

        if (null === $info) {
            throw new NotFoundHttpException("L'info ".$id." n'existe pas.");
        }

        $form = $this->createFormBuilder()->getForm();

        if ($form->handleRequest($request)->isValid()) {
            $em->remove($info);
            $em->flush();

            return $this->redirect($this->generateUrl('mmitv_info'));
        }
        return $this->render('mmitvBackBundle:Info:delete.html.twig', array(
            'info' => $info,
            'form' => $form->createView()
        ));
    }

    public function editAction($id, Request $request){

        $em = $this->getDoctrine()->getManager();
        $info = $em->getRepository('mmitvBackBundle:Infos')->find($id);

        if (null === $info){
            throw new NotFoundHttpException('L\'info '.$id.'n\'a pas été trouvée.');
        }

        $form = $this->createForm(new EditInfoType(), $info);

        if($form->handleRequest($request)->isValid()){
            $em->flush();

            return $this->redirect($this->generateUrl('mmitv_info', array(
                'id'    =>  $info->getId()
            )));
        }

        return $this->render('mmitvBackBundle:Info:edit.html.twig', array(
            'form' => $form->createView(),
            'info' => $info
        ));
    }

}