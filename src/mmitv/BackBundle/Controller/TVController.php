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

class TVController extends Controller
{
    public function indexAction(){

        return $this->render('mmitvBackBundle:TV:index.html.twig');
    }

    public function edtAction(){

        return $this->render('mmitvBackBundle:TV:edt.html.twig');
    }

    public function infoAction(){

        $em = $this->getDoctrine()->getManager()->getRepository('mmitvBackBundle:Infos');

        $infos = $em->findAll();

        return $this->render('mmitvBackBundle:TV:info.html.twig', array(
            'infos' => $infos
        ));
    }

    public function bugAction(){

        return $this->render('mmitvBackBundle:TV:bug.html.twig');
    }
}