<?php

namespace CabBundle\Controller;

use CabBundle\Entity\Community;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use CabBundle\Entity\Trip;

/**
 * Community controller.
 *
 */
class CommunityController extends Controller
{
    /**
     * Lists all community entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $communities = $em->getRepository('CabBundle:Community')->findAll();
        $trips = $em->getRepository('CabBundle:Trip')->findAll();

        return $this->render('community/index.html.twig', array(
            'communities' => $communities,
            'trips' => $trips,
        ));
    }

    /**
     * Lists all community entities.
     *
     */
    public function myIndexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $communities = $em->getRepository('CabBundle:Community')->findAll();

        return $this->render('community/myIndex.html.twig', array(
            'communities' => $communities,
        ));
    }

    /**
     * Creates a new community entity.
     *
     */
    public function newAction(Request $request)
    {
        $community = new Community();
        $form = $this->createForm('CabBundle\Form\CommunityType', $community);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($community);
            $em->flush();

            return $this->redirectToRoute('community_index');
        }

        return $this->render('community/new.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a community entity.
     *
     */
    public function showAction(Community $community)
    {
        $deleteForm = $this->createDeleteForm($community);

        return $this->render('community/show.html.twig', array(
            'community' => $community,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing community entity.
     *
     */
    public function editAction(Request $request, Community $community)
    {
        $deleteForm = $this->createDeleteForm($community);
        $editForm = $this->createForm('CabBundle\Form\CommunityType', $community);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('community_edit', array('id' => $community->getId()));
        }

        return $this->render('community/edit.html.twig', array(
            'community' => $community,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a community entity.
     *
     */
    public function deleteAction($id)
    {
       $em = $this->getDoctrine()->getManager();
       $community = $em->getRepository('CabBundle:Community')->FindOneBy(array('id' => $community));

            $em->remove($community);
            $em->flush();


        return $this->redirectToRoute('community_index');
    }

    /**
     * Creates a form to delete a community entity.
     *
     * @param Community $community The community entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    /*private function createDeleteForm(Community $community)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('community_delete', array('id' => $community->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }*/
}

