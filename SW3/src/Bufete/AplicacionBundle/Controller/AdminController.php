<?php

namespace Bufete\AplicacionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AdminController extends Controller
{
    public function indexAction()
    {
        //$name ="hola";
        return $this->render('BufeteAplicacionBundle::Default/admin.html.twig', array());
        //return new Response('hola');
    }
    
    public function notificarAction($id,$notificar)
    {
        
        
        
        return new Response('Mensaje enviado');
    }
}
