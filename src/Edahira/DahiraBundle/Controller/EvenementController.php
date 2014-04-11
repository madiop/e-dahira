<?php

namespace Edahira\DahiraBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Edahira\DahiraBundle\Entity\Evenement;
use Edahira\DahiraBundle\Form\EvenementType;

class EvenementController extends Controller
{
    public function indexAction($page)
    {
		if($page < 1){
			throw $this->createNotFoundException('Page inexistente (page = '.$page.')');
			$page = 1;
		}

		$evenements = $this->getDoctrine()
						->getManager()
						->getRepository('EdahiraDahiraBundle:Evenement')
						->getEvenements(10, $page);
		return $this->render('EdahiraDahiraBundle:Evenement:index.html.twig', array(
		                     'evenements'   => $evenements,
		                     'page'       => $page,
		                     'nombrePage' => ceil(count($evenements)/10)
		));
    }

    public function editerAction(Evenement $evenement = null)
    {
    	
		if(is_null($evenement)){
			$evenement = new Evenement();
		}
		
		$type = $this->getDoctrine()
                        ->getManager()
                        ->getRepository('EdahiraDahiraBundle:Typeevenement')
                        ->findByNom('Dahira');
        $evenement->setTypeevenement($type[0]);

		$form = $this->createForm(new EvenementType(), $evenement);
		
		$request = $this->get('request');

		if($request->getMethod() == 'POST'){
			$form->bind($request);
				
			if($form->isValid()){
				$em = $this->getDoctrine()
				           ->getManager();
				
                $em->persist($evenement);
                $em->flush();

				$this->get('session')->getFlashBag()->add('info','Evènement bien enregistré');
				return $this->redirect($this->generateUrl('cotisation_dahira', array('id' => $evenement->getId())));
			}
		}

		return $this->render('EdahiraDahiraBundle:Evenement:editer.html.twig',
			array('form'=>$form->createView(), 'id'=> $evenement->getId()));
    }

    public function supprimerAction($id)
    {
		if(is_null($id)){
			$evenement = new Evenement();
		    $evenement->setNom('Dahira');
		}
		else{
			$evenement = $this->getDoctrine()
				   		      ->getManager()
						      ->getRepository('EdahiraDahiraBundle:Evenement')
						      ->find($id);
		}
		
		$em = $this->getDoctrine()
				   ->getManager();

        $em->persist($evenement);
        $em->remove($evenement);
        $em->flush();

		$this->get('session')->getFlashBag()->add('info','Evènement supprimé succès');
		return $this->redirect($this->generateUrl('event_index'));

    }
}