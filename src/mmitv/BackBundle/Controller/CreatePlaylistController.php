<?php
/**
 * Created by PhpStorm.
 * User: Feyhna
 * Date: 23/03/2015
 * Time: 19:01
 */
namespace mmitv\BackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CreatePlaylistController extends Controller
{
    public function createAction(){
        return $this->render('mmitvBackBundle:CreatePlaylist:createplaylist.html.twig');
    }
}