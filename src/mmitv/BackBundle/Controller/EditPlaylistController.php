<?php
/**
 * Created by PhpStorm.
 * User: Feyhna
 * Date: 23/03/2015
 * Time: 19:09
 */
namespace mmitv\BackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EditPlaylistController extends Controller
{
    public function editAction(){
        return $this->render('mmitvBackBundle:EditPlaylist:editplaylist.html.twig');
    }
}