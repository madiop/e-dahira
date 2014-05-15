<?php

namespace Edahira\DahiraBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Edahira\DahiraBundle\Entity\Categories;
use Edahira\DahiraBundle\Form\CategoriesType;

class CategorieController extends Controller
{
    public function indexAction()
    {
		$categories = $this->get('security.context')->getToken()->getUser()->getActiveDahira()->getCategories();
						
		return $this->render('EdahiraDahiraBundle:Categorie:index.html.twig', array(
		                     'categories'   => $categories
		));
    }

    public function editerAction(Categories $categorie = null)
    {
    	$user = $this->get('security.context')->getToken()->getUser();
		if(is_null($categorie)){
			$categorie = new Categories($user->getActiveDahira());
			// $categorie->setDahira();
		}
		// var_dump($categorie);exit;

		$form = $this->createForm(new CategoriesType(), $categorie);
		
		$request = $this->get('request');

		if($request->getMethod() == 'POST'){
			$form->bind($request);
				
			if($form->isValid()){

				foreach ($user->getActiveDahira()->getCategories() as $categorieVerif) {

					if($categorieVerif->getNom() == $categorie->getNom() and $categorieVerif->getId() != $categorie->getId()){
						
						$this->get('session')->getFlashBag()->add('warning','flash.categorie.existe');
						
						return $this->render('EdahiraDahiraBundle:Categorie:editer.html.twig', array(
							'form'=>$form->createView(),
							'categorie' => $categorie
						));
					}
				}

				$em = $this->getDoctrine()
				           ->getManager();

				$em->persist($categorie);
				if(is_null($categorie->getId())){
					$em->flush();
					$this->get('session')->getFlashBag()->add('success','flash.categorie.added');
				}
				else{
					$em->flush();
					$this->get('session')->getFlashBag()->add('success','flash.categorie.edited');
				}

				return $this->redirect($this->generateUrl('categorie_index'));
			}
		}
		/* 
			*/
		return $this->render('EdahiraDahiraBundle:Categorie:editer.html.twig',
			array('form'=>$form->createView(),
				  'categorie' => $categorie));
    }

    public function supprimerAction(Categories $categorie)
    {
    	if($this->get('request')->getMethod() == 'POST'){
    		
	    	$em = $this->getDoctrine()
	    	           ->getManager();

			$em->remove($categorie);
			$em->flush();

			$this->get('session')->getFlashBag()->add('success', 'flash.categorie.deleted');
			
			return $this->redirect($this->generateUrl('categorie_index'));
		}
    	return $this->render('EdahiraDahiraBundle:Categorie:supprimer.html.twig', array('categorie' => $categorie));
    }

}
