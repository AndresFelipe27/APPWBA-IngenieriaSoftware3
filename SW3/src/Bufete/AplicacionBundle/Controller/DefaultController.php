<?php

namespace Bufete\AplicacionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Bufete\AplicacionBundle\Entity\ProcesoJudicial;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('BufeteAplicacionBundle:Default:index.html.twig', array('name' => $name));
    }
    
        public function actualizarAction()
    {
            
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('BufeteAplicacionBundle:ProcesoJudicial')->findAll();

        return $this->render('BufeteAplicacionBundle:Default:actualizar.html.twig', array('entities' => $entities));
    }
    
    
        public function ActualizarEstadoAction(Request $request)
    {
        
        $id=$request->request->get('id');
        $estado=$request->request->get('estado');
        $em = $this->getDoctrine()->getManager();

        $proceso = $em->getRepository('BufeteAplicacionBundle:ProcesoJudicial')->find($id);

        if (!$proceso) {
            throw $this->createNotFoundException('no se encontro el proceso');
        }
   
            
        $proceso->setEstado($estado);
        //Persistimos en el objeto

        $em->persist($proceso);
        //Insertarmos en la base de datos
        $em->flush();

        
            return $this->redirect($this->generateUrl('admin'));
    }
    
}
