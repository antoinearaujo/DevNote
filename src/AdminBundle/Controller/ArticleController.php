<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\ORM\EntityNotFoundException;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AdminBundle\Entity\Article;
use AdminBundle\Entity\Delete;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use AdminBundle\Form\ImageType;

class ArticleController extends Controller
{
   



     public function ajoutAction(Request $request)
    {
       $form = $this->createFormBuilder(new Article())
           ->add('Name','textarea', array(
           'label' => 'Titre', 
           'attr' => array('style' => 'width: 400px;') 
           ))
           ->add('titre1', 'textarea', array(
           'label' => 'Sous-Titre 1', 
           'attr' => array('style' => 'width: 400px;')
          ))
           ->add('etape1', 'textarea', array(
           'label' => 'Etape 1', 
           'attr' => array('style' => 'width: 400px; height: 400px;')
          ))
           ->add('titre2', 'textarea', array(
           'label' => 'Sous-Titre 2', 
           'attr' => array('style' => 'width: 400px;')
          ))
           ->add('etape2', 'textarea', array(
           'label' => 'Etape 2', 
           'attr' => array('style' => 'width: 400px; height: 400px;')
          ))
           ->add('titre3', 'textarea', array(
           'label' => 'Sous-Titre 3', 
           'attr' => array('style' => 'width: 400px;')
          ))
           ->add('etape3', 'textarea', array(
           'label' => 'Etape 3', 
           'attr' => array('style' => 'width: 400px; height: 400px;')
          ))
           ->add('image',      new ImageType())
           ->add('submit','submit')
           ->getForm();

        $form->handleRequest($request);

        if ($request->isMethod('post')&& $form->isValid()){

            $em = $this->getDoctrine()->getManager();
            $em-> persist($form->getData());
            $em->flush();

            return $this->redirect($this->generateUrl('home_homepage'));
        }
      return $this->render('AdminBundle:Article:ajout.html.twig', array('form' => $form->createView()));
    }


 public function deleteArticleAction($id, Request $request)
    {
      $form = $this->createFormBuilder(new Delete())
           ->add('Name')
           ->add('raison')
           ->add('submit','submit')
           ->getForm();

        $form->handleRequest($request);
     



        if ($request->isMethod('post')&& $form->isValid()){

         $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AdminBundle:Article')->find($id);
 
            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Comment entity.');
            }
 
            $em->remove($entity);
            $em->flush();

          
        }
         return $this->render('AdminBundle:Article:deleteArticle.html.twig', array('form' => $form->createView()));
    }

}
