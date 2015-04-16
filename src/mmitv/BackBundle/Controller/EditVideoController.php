<?php
namespace mmitv\BackBundle\Controller;

use mmitv\BackBundle\Entity\Video;
use mmitv\BackBundle\Entity\YoutubeVid;
use mmitv\BackBundle\Form\VideoType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class EditVideoController extends Controller
{
    public function updateAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $video = $em->getRepository('mmitvBackBundle:Video')->find($id);

        if(!$video){
            throw $this->createNotFoundException('
                Pas de video trouvée pour cet id :'.$id);
        }

        $form = $this->createFormBuilder($video)
            ->add('videoType', 'text')
            ->add('videoHref', 'text')
            ->add('videoNom', 'text')
            ->add('videoPlateforme', 'choice', array(
                    'choices'=>array('youtube'=> 'Youtube', 'dailymotion'=>'Dailymotion')
                ))
            ->add('videoAjout', 'date', array(
                    'data' => new \DateTime('now')
                ))
            ->add('save', 'submit')
            ->getForm();

        $form->handleRequest($request);

        if($form->isValid()){
            $em->flush();

            return $this->redirect($this->generateUrl('mmitv_addvideo'));
        }

        return $this->render('mmitvBackBundle:EditVideo:updatevideo.html.twig', array(
            'form' => $form->createView()
        ));
    }

    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $video = $em->getRepository('mmitvBackBundle:Video')->find($id);

        $idlink = $video->getVideoHref();

        $youtubevid = $em->getRepository('mmitvBackBundle:YoutubeVid')->findOneBy(array('idlink'   =>  $idlink));

        $em->remove($youtubevid);
        $em->flush();

        $em->remove($video);
        $em->flush();

        return $this->redirect($this->generateUrl('mmitv_addvideo'));

    }





}