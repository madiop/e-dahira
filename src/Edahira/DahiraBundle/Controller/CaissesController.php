<?php

namespace Edahira\DahiraBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Edahira\DahiraBundle\Entity\Caisses;
use Edahira\DahiraBundle\Form\CaissesType;

class CaissesController extends Controller
{
    public function indexAction($page)
    {
		if($page < 1){
			throw $this->createNotFoundException('Page inexistente (page = '.$page.')');
			$page = 1;
		}

		$caisses = $this->getDoctrine()
						->getManager()
						->getRepository('EdahiraDahiraBundle:Caisses')
						->getCaisses(10, $page);
						
		return $this->render('EdahiraDahiraBundle:Caisses:index.html.twig', array(
		                     'caisses'   => $caisses,
		                     'page'       => $page,
		                     'nombrePage' => ceil(count($caisses)/10)
		));
    }
	
    public function editerAction(Caisses $caisse = null)
    {
		if(is_null($caisse)){
			$caisse = new Caisses();
		}

		$form = $this->createForm(new CaissesType(), $caisse);
		
		$request = $this->get('request');

		if($request->getMethod() == 'POST'){
			$form->bind($request);
				
			if($form->isValid()){
				$em = $this->getDoctrine()
				           ->getManager();
				 
				$em->persist($caisse);
				$em->flush();

				$this->get('session')->getFlashBag()->add('info','Caisse bien enregistr�');
				return $this->redirect($this->generateUrl('caisse_index'));
			}
		}
		/* 
			*/
		return $this->render('EdahiraDahiraBundle:Caisses:editer.html.twig',
			array('form'=>$form->createView(), 'id'=> $caisse->getId()));
    }

    public function afficherAction()
    {
    }

    public function supprimerAction(Caisses $caisse)
    {
    	$em = $this->getDoctrine()->getManager();
		$em->remove($caisse);
		$em->flush();
		$this->get('session')->getFlashBag()->add('info', 'Caisse supprim�e avec succ�s');
		
		return $this->redirect($this->generateUrl('caisse_index'));
    }

    public function changeretatAction(Caisses $caisse, $etat)
    {
    	$caisse->setEtat($etat);

        $em = $this->getDoctrine()
		           ->getManager();
				 
		$em->persist($caisse);
		$em->flush();
		if($etat)
		    $this->get('session')->getFlashBag()->add('info', 'Caisse ferm� avec succ�s');
	    else
	    	$this->get('session')->getFlashBag()->add('info', 'Caisse ouvert avec succ�s');
		return $this->redirect( $this->generateUrl('caisse_index'));
    }
}