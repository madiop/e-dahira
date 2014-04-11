<?php

namespace Edahira\DahiraBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Edahira\DahiraBundle\Entity\Membres;
use Edahira\DahiraBundle\Entity\Cotisations;
use Edahira\DahiraBundle\Form\MembresType;

class MembreController extends Controller
{
    public function indexAction($page)
    {
	    if($page < 1){
			throw $this->createNotFoundException('Page inexistente (page = '.$page.')');
			$page = 1;
		}
		$membres = $this->getDoctrine()
						->getManager()
						->getRepository('EdahiraDahiraBundle:Membres')
						->getMembres(10, $page);

		return $this->render('EdahiraDahiraBundle:Membre:index.html.twig', array(
		                     'membres'   => $membres,
		                     'page'       => $page,
		                     'nombrePage' => ceil(count($membres)/10)
		));
    }
	
    public function editerAction(Membres $membre = null)
    {
		if(is_null($membre)){
			$membre = new Membres();
			$new = true;
		}
		$form = $this->createForm(new MembresType(), $membre);
		
		$request = $this->get('request');

		if($request->getMethod() == 'POST'){
			$form->bind($request);
				
			if($form->isValid()){
				$em = $this->getDoctrine()
				           ->getManager();
				 
				$em->persist($membre);
				$em->flush();
				// echo $membre->getId();exit;
				if($new){

					// echo 'Not exist '.$membre->getId();
					$events = $this->getDoctrine()
								   ->getManager()
								   ->getRepository('EdahiraDahiraBundle:Evenement')
								   ->findAll();

					foreach ($events as $key => $event) {
						
						$cotisation = new Cotisations();
						$cotisation->setEvenement($event);
						$cotisation->setMembre($membre);
						$cotisation->setEtat(false);
						$cotisation->setMontant($event->getTypeevenement()->getCotisation());
			            $em->persist($cotisation);

					}
                    $em->flush();
				}
				
				$this->get('session')->getFlashBag()->add('info','Membre bien enregistré');
				return $this->redirect($this->generateUrl('membre_index'));
			}
		}
		/* 
			*/
		return $this->render('EdahiraDahiraBundle:Membre:editer.html.twig',array('form'=>$form->createView(), 'id'=> $membre->getId()));
    }

    public function afficherAction()
    {
    }

    public function supprimerAction(Membres $membre)
    {
		
		$em = $this->getDoctrine()->getManager();
		$em->remove($membre);
		$em->flush();
		$this->get('session')->getFlashBag()->add('info', 'Membre supprimé avec succès');
		
		return $this->redirect($this->generateUrl('membre_index'));
    }
}