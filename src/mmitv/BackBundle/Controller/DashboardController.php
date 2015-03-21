<?php
/**
 * Created by PhpStorm.
 * User: Feyhna
 * Date: 21/03/2015
 * Time: 15:59
 */
namespace mmitv\BackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DashboardController extends Controller
{
    public function dashboardAction(){
        return $this->render('mmitvBackBundle:Dashboard:dashboard.html.twig');
    }
}