<?php

namespace Edahira\DahiraBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Edahira\DahiraBundle\Entity\Typeevenement;
use Edahira\DahiraBundle\Entity\MontantCotisations;
use Edahira\DahiraBundle\Form\TypeevenementType;

class TypeevenementController extends Controller
{

    public function indexAction()
    {
        $typeevenements = $this->get('security.context')->getToken()->getUser()->getActiveDahira()->getTypeevenement();

        return $this->render('EdahiraDahiraBundle:Typeevenement:index.html.twig', array(
                             'types'      => $typeevenements
        ));
    }

    public function editerAction(Typeevenement $type=null)
    {
        $user = $this->get('security.context')->getToken()->getUser();

        if(count($user->getActiveDahira()->getCaisses()) < 1){

            $url = $this->generateUrl("caisse_editer");
            $this->get('session')->getFlashBag()->add('html','action.caisse.create');
            $this->get('session')->getFlashBag()->add('url',$url);
            return $this->render('EdahiraDahiraBundle:Typeevenement:editer.html.twig');
        }
        elseif (count($user->getActiveDahira()->getCategories()) < 1) {

            $url = $this->generateUrl("categorie_editer");
            $this->get('session')->getFlashBag()->add('html','action.categorie.create');
            $this->get('session')->getFlashBag()->add('url',$url);
            return $this->render('EdahiraDahiraBundle:Typeevenement:editer.html.twig');
        }

        if(is_null($type)){
            $type = new Typeevenement($user->getActiveDahira());

            $categories = $user->getActiveDahira()->getCategories();

            foreach ($categories as $categorie) {
                // echo $categorie->getNom();
                $montantCotisation = new MontantCotisations();
                $montantCotisation->setCategorie($categorie);
                $type->addCotisation($montantCotisation);
            }
        }

        $form = $this->createForm(new TypeevenementType($user->getActiveDahira()->getId()), $type);
        
        $request = $this->get('request');

        if($request->getMethod() == 'POST'){
            $form->bind($request);
                
            if($form->isValid()){
                $em = $this->getDoctrine()
                           ->getManager();

                if(is_null($type->getId())){

                    $newId = $this->getDoctrine()
                                   ->getManager()
                                   ->getRepository('EdahiraDahiraBundle:Typeevenement')
                                   ->findLast()->getId()+1;
                    $type->setId($newId);
                }

                foreach ($user->getActiveDahira()->getTypeevenement() as $typeVerif) {

                    if($typeVerif->getNom() == $type->getNom() and $typeVerif->getId() != $type->getId()){
                        
                        $this->get('session')->getFlashBag()->add('warning','flash.type.existe');
                        
                        return $this->render('EdahiraDahiraBundle:Typeevenement:editer.html.twig', array(
                            'form'=>$form->createView(),
                            'type' => $type
                        ));
                    }
                }

                foreach ($type->getCotisations() as $key => $montantCot) {
                    $montantCot->setTypeevenement($type);
                }
                 
                $em->persist($type);
                $em->flush();

                $this->get('session')->getFlashBag()->add('success','flash.type.edited');
                return $this->redirect($this->generateUrl('typeevenement_index'));
            }
        }
        
        return $this->render('EdahiraDahiraBundle:Typeevenement:editer.html.twig',array(
            'form'=>$form->createView(), 
            'type' => $type
        ));
    }

    public function supprimerAction(Typeevenement $type)
    {
        if($this->get('request')->getMethod() == 'POST'){
            $em = $this->getDoctrine()->getManager();
            $em->remove($type);
            $em->flush();
            $this->get('session')->getFlashBag()->add('success', 'flash.type.deleted');
            // Puis on redirige vers l'accueil
            return $this->redirect($this->generateUrl('typeevenement_index'));
        }
        return $this->render('EdahiraDahiraBundle:Typeevenement:supprimer.html.twig', array('type' => $type));
    }

    public function detailsAction()
    {
    }
}