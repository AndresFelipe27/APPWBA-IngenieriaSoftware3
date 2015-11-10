<?php

namespace Bufete\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Bufete\AplicacionBundle\Entity\ProcesoJudicial;

class DefaultController extends Controller
{
    public function indexAction($pagina)
    {
        
        if ($pagina=="home") {
            
            return $this->render('::index.html.twig', array());
        }else if($pagina=="quien"){          
            return $this->render('BufeteMainBundle:Default:quien.html.twig', array());
        }else if ($pagina=="asesorias") {
            return $this->render('BufeteMainBundle:Default:asesoria.html.twig', array());
        }else if ($pagina=="noticias") {
            $em = $this->getDoctrine()->getManager();
            $entities = $em->getRepository('BufeteAplicacionBundle:Noticia')->findAll();

            return $this->render('BufeteMainBundle:Default:noticias.html.twig', array(
                'entities' => $entities,
            ));

        }else if ($pagina=="micaso"){
            return $this->render('BufeteMainBundle:Default:micaso.html.twig', array());
        }
        
        return $this->createNotFoundException("pagina no encontrada");
    }
    
    
    
    public function vercasoAction(Request $request)
    {
       
        $codigo=$request->request->get('codigo');
                
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BufeteAplicacionBundle:ProcesoJudicial')->findOneBycodigoConsulta($codigo);

        if (!$entity) {
            throw $this->createNotFoundException('no se encontro su caso');
        }

        

        return $this->render('BufeteMainBundle:Default:show.html.twig', array(
            'entity' => $entity ));
            
        
    }

}
