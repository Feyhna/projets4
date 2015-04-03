<?php
/**
 * Created by PhpStorm.
 * User: Feyhna
 * Date: 23/03/2015
 * Time: 19:01
 */
namespace mmitv\BackBundle\Controller;

use mmitv\BackBundle\Entity\Video;
use mmitv\BackBundle\Form\VideoType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AddVideoController extends Controller
{
    public function addAction(Request $request)
    {

        $video = new Video();

        $form = $this->createForm(new VideoType(), $video);

        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($video);
            $em->flush();

            $request->getSession()->getFlashbag()->add('notice', 'Video ajoutée');

            return $this->redirect($this->generateUrl('mmitv_addvideo'));
        }

        return $this->render('mmitvBackBundle:AddVideo:addvideo.html.twig');


    }

    public function addformAction()
    {
        $video = new Video();

        $form = $this->createForm(new VideoType(), $video);

        return $this->render('mmitvBackBundle:AddVideo:addform.html.twig', array(
            'form' => $form->createView()
        ));

    }

    public function gestionvideoAction()
    {
        $em = $this->getDoctrine()->getManager()->getRepository('mmitvBackBundle:Video');

        $queryvideo = $em->findAll();

        return $this->render('mmitvBackBundle:AddVideo:gestionvideo.html.twig', array(
            'video' => $queryvideo
        ));
    }


}