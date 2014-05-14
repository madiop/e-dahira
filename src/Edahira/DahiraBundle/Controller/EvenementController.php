<?php

namespace Edahira\DahiraBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Edahira\DahiraBundle\Entity\Evenement;
use Edahira\DahiraBundle\Form\EvenementType;

class EvenementController extends Controller
{
    public function indexAction()
    {
		$evenements = $this->get('security.context')->getToken()->getUser()->getActiveDahira()->getEvenement();

		return $this->render('EdahiraDahiraBundle:Evenement:index.html.twig', 
			array('evenements' => $evenements
		));
    }

    public function editerAction(Evenement $evenement = null)
    {
    	$user = $this->get('security.context')->getToken()->getUser();

    	if(count($user->getActiveDahira()->getTypeevenement()) < 1){
    		$url = $this->generateUrl("typeevenement_editer");
			$this->get('session')->getFlashBag()->add('html','action.type.create');
            $this->get('session')->getFlashBag()->add('url',$url);
			return $this->render('EdahiraDahiraBundle:Evenement:editer.html.twig');
		}
    	
		if(is_null($evenement)){
			$evenement = new Evenement($user->getActiveDahira());
		}
		
		$type = $this->getDoctrine()
                        ->getManager()
                        ->getRepository('EdahiraDahiraBundle:Typeevenement')
                        ->findByNom('Dahira');
        // $evenement->setTypeevenement($type[0]);

		$form = $this->createForm(new EvenementType($user->getActiveDahira()->getId()), $evenement);
		
		$request = $this->get('request');

		if($request->getMethod() == 'POST'){
			$form->bind($request);
				
			if($form->isValid()){

				foreach ($user->getActiveDahira()->getEvenement() as $eventVerif) {
					if($evenement->getId() != $eventVerif->getId() and $evenement->getDate() == $eventVerif->getDate() and $evenement->getTypeevenement() == $eventVerif->getTypeevenement()){
						
						$this->get('session')->getFlashBag()->add('warning','flash.event.exist');
						return $this->render('EdahiraDahiraBundle:Evenement:editer.html.twig',
							array('form'=>$form->createView(), 'id'=> $evenement->getId()
						));
					}
				}
				/*
				if($evenement->getDate() < new \DateTime()){
					
					$this->get('session')->getFlashBag()->add('warning','flash.date.old');
					
					return $this->render('EdahiraDahiraBundle:Evenement:editer.html.twig',
						array('form'=>$form->createView(), 'evenement'=> $evenement
					));
				}*/

				$em = $this->getDoctrine()
				           ->getManager();

	            $em->persist($evenement);
				
				if(is_null($evenement->getId())){
	                $em->flush();

					$this->get('session')->getFlashBag()->add('success','flash.event.added');
					return $this->redirect($this->generateUrl('cotisation_dahira', array('id' => $evenement->getId())));
				}
				else{
	                $em->flush();

					$this->get('session')->getFlashBag()->add('success','flash.event.edited');
					return $this->redirect($this->generateUrl('event_index', array('id' => $evenement->getId())));
				}
			}
		}

		return $this->render('EdahiraDahiraBundle:Evenement:editer.html.twig', array(
			'form'=>$form->createView(), 
			'evenement'=> $evenement
		));
    }

    public function supprimerAction(Evenement $evenement)
    {
		if($this->get('request')->getMethod() == 'POST'){
    		
			$em = $this->getDoctrine()
					   ->getManager();

	        $em->persist($evenement);
	        $em->remove($evenement);
	        $em->flush();

			$this->get('session')->getFlashBag()->add('info','Evènement supprimé succès');
			return $this->redirect($this->generateUrl('event_index'));
		}
    	return $this->render('EdahiraDahiraBundle:Evenement:supprimer.html.twig', array('event' => $evenement));
    }
}