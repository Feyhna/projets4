<?php
/**
 * Created by PhpStorm.
 * User: Feyhna
 * Date: 21/03/2015
 * Time: 13:47
 */

namespace mmitv\BackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use mmitv\BackBundle\Entity\Infos;
use mmitv\BackBundle\Entity\Programme;
use mmitv\BackBundle\Entity\Playlist;
use mmitv\BackBundle\Entity\Video;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use mmitv\BackBundle\Entity\YoutubeVid;
use \DateTime;

class TVController extends Controller
{
    public function indexAction(){

        return $this->render('mmitvBackBundle:TV:index.html.twig');
    }

    public function videosAction(){


        return $this->render('mmitvBackBundle:TV:videos.html.twig');
    }

    public function videosJsonAction(){

        $videos = $this->getDoctrine()
            ->getRepository('mmitvBackBundle:YoutubeVid')
            ->findAll();

        $encoders = array(new JsonEncoder());
        $normalizers = array(new GetSetMethodNormalizer());
        $serializer = new Serializer($normalizers, $encoders);

        $response = new Response($serializer->serialize($videos, "json"));
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }

    public function edtAction(){

        return $this->render('mmitvBackBundle:TV:edt.html.twig');
    }

    public function infoAction(){

        $infos = $this->getDoctrine()
            ->getManager()
            ->getRepository('mmitvBackBundle:Infos')
            ->findAll();

        return $this->render('mmitvBackBundle:TV:info.html.twig'
        );
    }

    public function infosJsonAction(){
        $infos = $this->getDoctrine()
            ->getManager()
            ->getRepository('mmitvBackBundle:Infos')
            ->findAll();

        $encoders = array(new JsonEncoder());
        $normalizers = array(new GetSetMethodNormalizer());
        $serializer = new Serializer($normalizers, $encoders);

        $response = new Response($serializer->serialize($infos, "json"));
        $response->headers->set('Content-Type', 'application/json');

        return $response;

    }

}