<?php

namespace Bufete\AplicacionBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Bufete\AplicacionBundle\Entity\Noticia;
use Bufete\AplicacionBundle\Form\NoticiaType;

/**
 * Noticia controller.
 *
 */
class NoticiaController extends Controller
{

    /**
     * Lists all Noticia entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('BufeteAplicacionBundle:Noticia')->findAll();

        return $this->render('BufeteAplicacionBundle:Noticia:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Noticia entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Noticia();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('noticia_show', array('id' => $entity->getId())));
        }

        return $this->render('BufeteAplicacionBundle:Noticia:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Noticia entity.
     *
     * @param Noticia $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Noticia $entity)
    {
        $form = $this->createForm(new NoticiaType(), $entity, array(
            'action' => $this->generateUrl('noticia_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Noticia entity.
     *
     */
    public function newAction()
    {
        $entity = new Noticia();
        $form   = $this->createCreateForm($entity);

        return $this->render('BufeteAplicacionBundle:Noticia:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Noticia entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BufeteAplicacionBundle:Noticia')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Noticia entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BufeteAplicacionBundle:Noticia:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Noticia entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BufeteAplicacionBundle:Noticia')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Noticia entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BufeteAplicacionBundle:Noticia:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Noticia entity.
    *
    * @param Noticia $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Noticia $entity)
    {
        $form = $this->createForm(new NoticiaType(), $entity, array(
            'action' => $this->generateUrl('noticia_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Noticia entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BufeteAplicacionBundle:Noticia')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Noticia entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('noticia_edit', array('id' => $id)));
        }

        return $this->render('BufeteAplicacionBundle:Noticia:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Noticia entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('BufeteAplicacionBundle:Noticia')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Noticia entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('noticia'));
    }

    /**
     * Creates a form to delete a Noticia entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('noticia_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
