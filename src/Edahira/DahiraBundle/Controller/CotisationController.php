<?php

namespace Edahira\DahiraBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Edahira\DahiraBundle\Entity\Evenement;
use Edahira\DahiraBundle\Form\EvenementType;
use Edahira\DahiraBundle\Entity\Cotisations;
use Edahira\DahiraBundle\Form\CotisationsType;

class CotisationController extends Controller
{
    public function dahiraAction(Evenement $event){

    	$user = $this->get('security.context')->getToken()->getUser();

		$em = $this->getDoctrine()
				   ->getManager();
        		
    	/*$membres = $this->getDoctrine()
						->getManager()
						->getRepository('EdahiraDahiraBundle:Membres')
						->findAll();*/

		$membres = $user->getActiveDahira()->getMembres();
		
        $cotisationServ = $this->container->get('edahira_dahira.cotisation');
		
		foreach ($membres as $key => $membre) {
			$cotis = $cotisationServ->getMontantCotisation($event->getTypeevenement(), $membre->getCategorie());

			$cotisation = new Cotisations();
			$cotisation->setEvenement($event);
			$cotisation->setMembre($membre);
			$cotisation->setEtat(false);
			$cotisation->setMontant($cotis);

            $em->persist($cotisation);

		}

        $em->flush();
        return $this->redirect($this->generateUrl('cotisation_editer',array('id' => $event->getId())));
    }

    public function editerAction(Evenement $event){

    	$cotisations = $event->getCotisations();

		$request = $this->get('request');

    	$formBuilder = $this->createFormBuilder();
    	//$membres = array();
    	$cotisationServ = $this->container->get('edahira_dahira.cotisation');

    	foreach ($cotisations as $cotisation) {
    		$cotis = $cotisationServ->getMontantCotisation($event->getTypeevenement(), $cotisation->getMembre()->getCategorie());

    		if($cotisation->getEtat()){
	    		$formBuilder->add($cotisation->getMembre()->getId(), 'checkbox', array(
	    			'label'    => $cotisation->getMembre()->getAffichage()." ($cotis)",
	    			'required' => false,
	    			'attr'     => array('checked'   => 'checked')
	    		));
	    	}
	    	else{
	    		$formBuilder->add($cotisation->getMembre()->getId(), 'checkbox', array(
	    			'label'    => $cotisation->getMembre()->getAffichage()." ($cotis)",
	    			'required' => false
	    		));
	    	}
    	}

    	$form = $formBuilder->getForm();

		if($request->getMethod() == 'POST'){
			$form->bind($request);

			$em = $this->getDoctrine()
				       ->getManager();

			$values = $form->getData();
			// $type = $form['type']->getData();
            // var_dump($values);

			foreach ($cotisations as $cotisation) {

				$cotisation->setEtat($values[$cotisation->getMembre()->getId()]);
                $em->persist($cotisation);
	    		$em->flush($cotisation);
	    	}
	    	
			return $this->redirect($this->generateUrl('cotisation_etat',array('id' => $event->getId())));
		}

		return $this->render('EdahiraDahiraBundle:Cotisation:editer.html.twig',array(
			'form'         => $form->createView(),
			'event'        => $event
		));
    }

    public function etatAction(Evenement $event){

    	$cotisations = $event->getCotisations();

		return $this->render('EdahiraDahiraBundle:Cotisation:etat.html.twig',array(
			'event'        => $event
		));
    }
}