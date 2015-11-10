<?php

namespace Bufete\AplicacionBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Bufete\AplicacionBundle\Entity\Abogado;
use Bufete\AplicacionBundle\Form\AbogadoType;

/**
 * Abogado controller.
 *
 */
class AbogadoController extends Controller
{

    /**
     * Lists all Abogado entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('BufeteAplicacionBundle:Abogado')->findAll();

        return $this->render('BufeteAplicacionBundle:Abogado:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Abogado entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Abogado();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('abogado_show', array('id' => $entity->getId())));
        }

        return $this->render('BufeteAplicacionBundle:Abogado:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Abogado entity.
     *
     * @param Abogado $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Abogado $entity)
    {
        $form = $this->createForm(new AbogadoType(), $entity, array(
            'action' => $this->generateUrl('abogado_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Abogado entity.
     *
     */
    public function newAction()
    {
        $entity = new Abogado();
        $form   = $this->createCreateForm($entity);

        return $this->render('BufeteAplicacionBundle:Abogado:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Abogado entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BufeteAplicacionBundle:Abogado')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Abogado entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BufeteAplicacionBundle:Abogado:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Abogado entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BufeteAplicacionBundle:Abogado')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Abogado entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BufeteAplicacionBundle:Abogado:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Abogado entity.
    *
    * @param Abogado $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Abogado $entity)
    {
        $form = $this->createForm(new AbogadoType(), $entity, array(
            'action' => $this->generateUrl('abogado_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Abogado entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BufeteAplicacionBundle:Abogado')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Abogado entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('abogado_edit', array('id' => $id)));
        }

        return $this->render('BufeteAplicacionBundle:Abogado:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Abogado entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('BufeteAplicacionBundle:Abogado')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Abogado entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('abogado'));
    }

    /**
     * Creates a form to delete a Abogado entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('abogado_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
