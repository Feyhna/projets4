<?php
/**
 * Created by PhpStorm.
 * User: Feyhna
 * Date: 23/03/2015
 * Time: 19:09
 */
namespace mmitv\BackBundle\Controller;

use mmitv\BackBundle\Entity\Playlist;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use mmitv\BackBundle\Form\PlaylistType;


class EditPlaylistController extends Controller
{
    public function editAction(Request $request)
    {

        $queryplaylists = $this->getDoctrine()->getManager()->getRepository('mmitvBackBundle:Playlist');
        $playlists = $queryplaylists->findAll();

        foreach ($playlists as $playlist) {
            $playlist->getVideo();
        }

        $newplaylist = new Playlist();
        $form = $this->createForm(new PlaylistType(), $newplaylist);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($newplaylist);
            $em->flush();

            return $this->redirect($this->generateUrl('mmitv_editplaylist'));
        }


        return $this->render('mmitvBackBundle:EditPlaylist:editplaylist.html.twig', array(
            'playlists' => $playlists,
            'form' => $form->createView()
        ));
    }

    public function removePlaylistAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $removeplaylist = $em->getRepository('mmitvBackBundle:Playlist')->find($id);

        $em->remove($removeplaylist);
        $em->flush();

        return $this->redirect($this->generateUrl('mmitv_editplaylist'));
    }

    public function updatePlaylistAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $playlist = $em->getRepository('mmitvBackBundle:Playlist')->findOneById($id);
        $videos = $em->getRepository('mmitvBackBundle:Video')->findAll();

        $playlist->getVideo();


        return $this->render('mmitvBackBundle:EditPlaylist:updateplaylist.html.twig', array(
            'playlist' => $playlist,
            'videos' => $videos
        ));
    }

    public function removeVideoPlaylistAction($playlist_id, $video_id)
    {
        $em = $this->getDoctrine()->getManager();

        $playlist = $em->getRepository('mmitvBackBundle:Playlist')->find($playlist_id);

        $video = $em->getRepository('mmitvBackBundle:Video')->find($video_id);


        $playlist->removeVideo($video);
        $video->removePlaylist($playlist);

        $em->flush();

        return $this->redirect($this->generateUrl('mmitv_updateplaylist', array(
            'id' => $playlist_id
        )));
    }

    public function addVideoPlaylistAction($playlist_id, $video_id)
    {
        $em = $this->getDoctrine()->getManager();

        $playlist = $em->getRepository('mmitvBackBundle:Playlist')->find($playlist_id);

        $video = $em->getRepository('mmitvBackBundle:Video')->find($video_id);

        dump($video);
        dump($playlist);

        $playlist->addVideo($video);
        $video->addPlaylist($playlist);

        $em->flush();

        return $this->redirect($this->generateUrl('mmitv_updateplaylist', array(
            'id' => $playlist_id
        )));

    }


}