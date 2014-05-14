<?php

namespace Edahira\DahiraBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Edahira\DahiraBundle\Entity\Caisses;
use Edahira\DahiraBundle\Form\CaissesType;

class CaissesController extends Controller
{
    public function indexAction()
    {
		$caisses = $this->get('security.context')->getToken()->getUser()->getActiveDahira()->getCaisses();		
		
		return $this->render('EdahiraDahiraBundle:Caisses:index.html.twig', array(
		                     'caisses'   => $caisses
		));
    }
	
    public function editerAction(Caisses $caisse = null)
    {
    	$user = $this->get('security.context')->getToken()->getUser();

		if(is_null($caisse)){
			$caisse = new Caisses($user->getActiveDahira());
		}

		$form = $this->createForm(new CaissesType(), $caisse);
		
		$request = $this->get('request');

		if($request->getMethod() == 'POST'){

			$form->bind($request);
				
			if($form->isValid()){

				$caisses = $user->getActiveDahira()->getCaisses();

                foreach ($caisses as $caisseVerif){

					if($caisse->getNom() == $caisseVerif->getNom() and $caisse->getId() != $caisseVerif->getId()){

						$this->get('session')->getFlashBag()->add('warning','warning.caisse.exist');

						return $this->render('EdahiraDahiraBundle:Caisses:editer.html.twig',
							array('form'=>$form->createView(), 'id'=> $caisse->getId()
							));
					}
				}

				$em = $this->getDoctrine()
				           ->getManager();
				 
				$em->persist($caisse);
				$em->flush();

				$this->get('session')->getFlashBag()->add('success','success.caisse.edeted');
				return $this->redirect($this->generateUrl('caisse_index'));
			}
		}
		/* 
			*/
		return $this->render('EdahiraDahiraBundle:Caisses:editer.html.twig',
			array('form'=>$form->createView(), 'caisse'=> $caisse
				));
    }

    public function supprimerAction(Caisses $caisse)
    {
    	if($this->get('request')->getMethod() == 'POST'){
    		// var_dump($caisse);exit;
	    	$em = $this->getDoctrine()->getManager();
			$em->remove($caisse);
			$em->flush();
			$this->get('session')->getFlashBag()->add('success', 'action.caisse.deleted');
			
			return $this->redirect($this->generateUrl('caisse_index'));
		}
    	return $this->render('EdahiraDahiraBundle:Caisses:supprimer.html.twig', array('caisse' => $caisse));
    }

    public function changeretatAction(Caisses $caisse, $etat)
    {
    	$caisse->setEtat($etat);

        $em = $this->getDoctrine()
		           ->getManager();
				 
		$em->persist($caisse);
		$em->flush();
		if($etat)
	    	$this->get('session')->getFlashBag()->add('success', 'flash.caisse.opened');
	    else
		    $this->get('session')->getFlashBag()->add('success', 'flash.caisse.closed');
		return $this->redirect( $this->generateUrl('caisse_index'));
    }
}