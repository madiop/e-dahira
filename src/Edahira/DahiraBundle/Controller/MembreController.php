<?php

namespace Edahira\DahiraBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Edahira\DahiraBundle\Entity\Membres;
use Edahira\DahiraBundle\Entity\Cotisations;
use Edahira\DahiraBundle\Entity\Typeevenement;
use Edahira\DahiraBundle\Form\MembresType;

class MembreController extends Controller
{
    public function indexAction()
    {
	   	$membres = $this->get('security.context')->getToken()->getUser()->getActiveDahira()->getMembres();
		
		return $this->render('EdahiraDahiraBundle:Membre:index.html.twig', array(
		                     'membres'   => $membres
		));
    }
	
    public function editerAction(Membres $membre = null)
    {
    	$user = $this->get('security.context')->getToken()->getUser();
    	
		if(count($user->getActiveDahira()->getCategories()) < 1){
			$this->get('session')->getFlashBag()->add('info','action.create.categorie');

			return $this->render('EdahiraDahiraBundle:Membre:editer.html.twig');
		}
		    	
    	$new = false;
		if(is_null($membre)){
			$membre = new Membres($user->getActiveDahira());
			$new = true;
		}

		$form = $this->createForm(new MembresType($user->getActiveDahira()->getId()), $membre);
		
		$request = $this->get('request');

		if($request->getMethod() == 'POST'){
			$form->bind($request);
				
			if($form->isValid()){
				$em = $this->getDoctrine()
				           ->getManager();
				 
				$em->persist($membre);
				$em->flush();

				if($new){

					$events = $user->getActiveDahira()->getEvenement();

					$cotisationServ = $this->container->get('edahira_dahira.cotisation');

					foreach ($events as $key => $event) {
			        	$cotis = $cotisationServ->getMontantCotisation($event->getTypeevenement(), $membre->getCategorie());

						$cotisation = new Cotisations();
						$cotisation->setEvenement($event);
						$cotisation->setMembre($membre);
						$cotisation->setEtat(false);
						$cotisation->setMontant($cotis);
			            $em->persist($cotisation);

					}
                    $em->flush();

				    $this->get('session')->getFlashBag()->add('success','flash.membre.added');
				}
				else{
					$this->get('session')->getFlashBag()->add('success','flash.membre.added');
				}

				return $this->redirect($this->generateUrl('membre_index'));
			}
		}

		return $this->render('EdahiraDahiraBundle:Membre:editer.html.twig', array(
			'form'=>$form->createView(), 
			'membre'=> $membre
		));
    }

    public function cotiserAction(Membres $membre, Typeevenement $type)
    {
        $cotisations = $this->getDoctrine()
                            ->getManager()
                            ->getRepository('EdahiraDahiraBundle:Cotisations')
                            ->getCotisationsMembreEventType($type->getId(), $membre->getId());

    	$formBuilder = $this->createFormBuilder();

    	foreach ($cotisations as $cotisation) {
    		$cotIndex = $cotisation->getMembre()->getId().'_'.$cotisation->getEvenement()->getId();
    		// var_dump($cotisation->getEvenement()->getDate()->getTimestamp());

    		// if($cotisation->getEtat()){
    			if(strtolower($cotisation->getEvenement()->getTypeevenement()->getNom()) != 'dahira' ){
		    		$formBuilder->add($cotIndex, 'checkbox', array(
		    			'label'    => date("F Y", $cotisation->getEvenement()->getDate()->getTimestamp()),
		    			'required' => false,
		    			'attr'     => $cotisation->getEtat() ? array('checked'   => 'checked') : array() 
		    		));
	    	    }
	    	    else{
		    		$formBuilder->add($cotIndex, 'checkbox', array(
		    			'label'    => $cotisation->getEvenement()->getMembre()->getAffichage(),
		    			'required' => false,
		    			'attr'     => $cotisation->getEtat() ? array('checked'   => 'checked') : array() 
		    		));
	    	    }
	    	/*}
	    	else{
	    		if(strtolower($cotisation->getEvenement()->getTypeevenement()->getNom()) != 'dahira' ){
		    		$formBuilder->add($cotIndex, 'checkbox', array(
		    			'label'    => $cotisation->getEvenement()->getTypeevenement()->getNom(),
		    			'required' => false,
		    			'attr'     => array('checked'   => 'checked')
		    		));
	    	    }
	    	    else{
		    		$formBuilder->add($cotIndex, 'checkbox', array(
		    			'label'    => $cotisation->getEvenement()->getMembre()->getAffichage(),
		    			'required' => false
		    		));
	    	    }
	    	}*/
    	}

    	$form = $formBuilder->getForm();

		$request = $this->get('request');

		if($request->getMethod() == 'POST'){
			$form->bind($request);

			$em = $this->getDoctrine()
				       ->getManager();

			$values = $form->getData();
            // var_dump($values);exit;
			foreach ($cotisations as $cotisation) {
				$cotIndex = $cotisation->getMembre()->getId().'_'.$cotisation->getEvenement()->getId();

				$cotisation->setEtat($values[$cotIndex]);
                $em->persist($cotisation);
	    		$em->flush($cotisation);
	    	}
	    	$this->get('session')->getFlashBag()->add('success', 'success.membre.cotise');
			return $this->redirect($this->generateUrl('etats_membre'));
		}
		
		if($this->get('session')->get('last_route') == 'etats_membre'){
			return $this->render('EdahiraDahiraBundle:Membre:formCotiser.html.twig',array(
				'form'       => $form->createView(),
				'membre'     => $membre,
				'type'       => $type
			));
		}
		else{
			return $this->render('EdahiraDahiraBundle:Membre:cotiser.html.twig',array(
				'form'       => $form->createView()/*,
				'membre'     => $membre,
				'type'       => $type*/
			));
		}
    }

    public function supprimerAction(Membres $membre)
    {
		if($this->get('request')->getMethod() == 'POST'){
	    	$em = $this->getDoctrine()->getManager();
			$em->remove($membre);
			$em->flush();

			$this->get('session')->getFlashBag()->add('success', 'success.membre.deleted');
			
			return $this->redirect($this->generateUrl('membre_index'));
		}
    	return $this->render('EdahiraDahiraBundle:Membre:supprimer.html.twig', array('membre' => $membre));
    }
}