<?php

namespace Bufete\AplicacionBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Bufete\AplicacionBundle\Entity\Abogado;
use Bufete\AplicacionBundle\Entity\ProcesoJudicial;
use Bufete\AplicacionBundle\Form\ProcesoJudicialType;

/**
 * ProcesoJudicial controller.
 *
 */
class ProcesoJudicialController extends Controller
{

    /**
     * Lists all ProcesoJudicial entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('BufeteAplicacionBundle:ProcesoJudicial')->findAll();
        

     //   $query = "SELECT p.descripcion, p.estado,p.fechaIn, p.fechaVencimiento, p.titulo, p.prioridad,
      //           p.id idProceso, a.id idAbogado, a.nombre nombreAbogado , a.apellido apellidoAbogado,
        //         c.nombre nombreCliente, c.apellido apellidoCliente  FROM procesojudicial p, abogado a, 
          //       cliente c WHERE p.abogado_id =a.id and  p.cliente_id = c.id";
 
       
        return $this->render('BufeteAplicacionBundle:ProcesoJudicial:index.html.twig', array(
            'entities' => $entities, 
 
        ));
    }
    /**
     * Creates a new ProcesoJudicial entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new ProcesoJudicial();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('procesojudicial_show', array('id' => $entity->getId())));
        }

        return $this->render('BufeteAplicacionBundle:ProcesoJudicial:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a ProcesoJudicial entity.
     *
     * @param ProcesoJudicial $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(ProcesoJudicial $entity)
    {
        $form = $this->createForm(new ProcesoJudicialType(), $entity, array(
            'action' => $this->generateUrl('procesojudicial_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new ProcesoJudicial entity.
     *
     */
    public function newAction()
    {
        $entity = new ProcesoJudicial();
        $form   = $this->createCreateForm($entity);

        return $this->render('BufeteAplicacionBundle:ProcesoJudicial:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ProcesoJudicial entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BufeteAplicacionBundle:ProcesoJudicial')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ProcesoJudicial entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BufeteAplicacionBundle:ProcesoJudicial:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ProcesoJudicial entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BufeteAplicacionBundle:ProcesoJudicial')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ProcesoJudicial entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BufeteAplicacionBundle:ProcesoJudicial:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a ProcesoJudicial entity.
    *
    * @param ProcesoJudicial $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(ProcesoJudicial $entity)
    {
        $form = $this->createForm(new ProcesoJudicialType(), $entity, array(
            'action' => $this->generateUrl('procesojudicial_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing ProcesoJudicial entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BufeteAplicacionBundle:ProcesoJudicial')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ProcesoJudicial entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('procesojudicial_edit', array('id' => $id)));
        }

        return $this->render('BufeteAplicacionBundle:ProcesoJudicial:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a ProcesoJudicial entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('BufeteAplicacionBundle:ProcesoJudicial')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find ProcesoJudicial entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('procesojudicial'));
    }

    /**
     * Creates a form to delete a ProcesoJudicial entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('procesojudicial_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
