<?php
/**
 * Created by PhpStorm.
 * User: Feyhna
 * Date: 23/03/2015
 * Time: 19:01
 */
namespace mmitv\BackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AddVideoController extends Controller
{
    public function addAction(){
        return $this->render('mmitvBackBundle:AddVideo:addvideo.html.twig');
    }
}