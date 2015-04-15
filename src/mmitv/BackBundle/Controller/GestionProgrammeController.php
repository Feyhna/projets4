<?php
/**
 * Created by PhpStorm.
 * User: baptistelambert
 * Date: 15/04/15
 * Time: 10:05
 */
namespace mmitv\BackBundle\Controller;

use mmitv\BackBundle\Entity\Programme;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use mmitv\BackBundle\Form\ProgrammeType;

class GestionProgrammeController extends Controller
{
    public function indexAction(Request $request)
    {
        $queryprogramme = $this->getDoctrine()->getManager()->getRepository('mmitvBackBundle:Programme');
        $programmes = $queryprogramme->findAll();

        foreach($programmes as $programme){
            $programme->getPlaylist();
        }


        $newprogramme = new Programme();
        $form = $this->createForm(new ProgrammeType(), $newprogramme);

        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($newprogramme);
            $em->flush();

            return $this->redirect($this->generateUrl('mmitv_indexprogramme'));
        }

        return $this->render('mmitvBackBundle:GestionProgramme:index.html.twig', array(
            'programmes' => $programmes,
            'form' => $form->createView()
        ));

    }

    public function removeProgrammeAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $removeprogramme = $em->getRepository('mmitvBackBundle:Programme')->find($id);

        $em->remove($removeprogramme);
        $em->flush();

        return $this->redirect($this->generateUrl('mmitv_indexprogramme'));
    }

    public function updateProgrammeAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $programmes = $em->getRepository('mmitvBackBundle:Programme')->find($id);
        $playlists = $em->getRepository('mmitvBackBundle:Playlist')->findAll();

        $programmes->getPlaylist();

        return $this->render('mmitvBackBundle:GestionProgramme:update.html.twig', array(
           'programmes'=>$programmes,
            'playlists'=>$playlists
        ));


    }

    public function removePlaylistProgrammeAction($programme_id,$playlist_id)
    {
        $em = $this->getDoctrine()->getManager();

        $programme = $em->getRepository('mmitvBackBundle:Programme')->find($programme_id);
        $playlist = $em->getRepository('mmitvBackBundle:Playlist')->find($playlist_id);

        $programme->removePlaylist($playlist);
        $playlist->removeProgramme($programme);
        $em->flush();

        return $this->redirect($this->generateUrl('mmitv_updateprogramme', array(
            'id' => $programme_id
        )));
    }

    public function addPlaylistProgrammeAction($programme_id,$playlist_id)
    {
        $em = $this->getDoctrine()->getManager();

        $programme = $em->getRepository('mmitvBackBundle:Programme')->find($programme_id);
        $playlist = $em->getRepository('mmitvBackBundle:Playlist')->find($playlist_id);

        $programme->addPlaylist($playlist);
        $playlist->addProgramme($programme);
        $em->flush();

        return $this->redirect($this->generateUrl('mmitv_updateprogramme', array(
            'id' => $programme_id
        )));
    }


}
