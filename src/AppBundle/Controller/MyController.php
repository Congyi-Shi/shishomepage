<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;


class MyController extends  Controller
{
    /**
     * @Route("/index", name="myhomepage") 
     */
    public function MypageAction(){
        return $this->render('default/homepage.html.twig');
    }
    
}