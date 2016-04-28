<?php

namespace Rv\SearsBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Rv\SearsBundle\Entity\Form;
use Rv\SearsBundle\Form\FormType;


/**
 * Form controller.
 *
 * @Route("/appointments")
 */
class FormController extends Controller
{

    /**
     * Lists all Form entities.
     *
     * @Route("/thanks", name="thanks")
     * @Method("GET")
     * @Template()
     */
    public function thanksAction()
    {
     

        return array();
    }





    /**
     * Lists all Form entities.
     *
     * @Route("/", name="appointments")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('RvSearsBundle:Form')->findAll();

        return array(
            'entities' => $entities,
        );
    }


    /**
     * Creates a new Form entity.
     *
     * @Route("/create", name="appointments_create")
     * @Method("POST")
     * @Template("RvSearsBundle:Form:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Form();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('thanks'));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Form entity.
     *
     * @param Form $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Form $entity)
    {
        $form = $this->createForm(new FormType(), $entity, array(
            'action' => $this->generateUrl('appointments_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Form entity.
     *
     * @Route("/new", name="appointments_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Form();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Form entity.
     *
     * @Route("/{id}", name="appointments_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RvSearsBundle:Form')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Form entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Form entity.
     *
     * @Route("/{id}/edit", name="appointments_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RvSearsBundle:Form')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Form entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a Form entity.
    *
    * @param Form $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Form $entity)
    {
        $form = $this->createForm(new FormType(), $entity, array(
            'action' => $this->generateUrl('appointments_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Form entity.
     *
     * @Route("/{id}", name="appointments_update")
     * @Method("PUT")
     * @Template("RvSearsBundle:Form:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RvSearsBundle:Form')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Form entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('appointments_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Form entity.
     *
     * @Route("/{id}", name="appointments_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('RvSearsBundle:Form')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Form entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('appointments'));
    }

    /**
     * Creates a form to delete a Form entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('appointments_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}