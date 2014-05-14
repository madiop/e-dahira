<?php

namespace Edahira\DahiraBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Edahira\DahiraBundle\Entity\Dahira;
use Edahira\UserBundle\Entity\Utilisateurs;
use Edahira\DahiraBundle\Form\DahiraType;
use Edahira\UserBundle\Form\PartagerType;

class DahiraController extends Controller
{
    public function indexAction()
    {
		$user =$this->get('security.context')->getToken()->getUser();
		
		$dahiras = $user->getDahiras();

		// var_dump($user);

		/*$qb = $this->getDoctrine()
						 ->getManager()
						 ->getRepository('EdahiraUserBundle:Utilisateurs')
						 ->getOtherUsers($user->getActiveDahira()->getId());
		var_dump($qb);
		exit;*/

		return $this->render('EdahiraDahiraBundle:Dahira:index.html.twig', array(
		                     'dahiras'    => $dahiras
		));
    }

    public function editerAction(Dahira $dahira = null)
    {
		$userManager = $this->container->get('fos_user.user_manager');
		$user =$this->get('security.context')->getToken()->getUser();
    	
    	if(is_null($dahira)){
			$dahira = new Dahira();
			$dahira->addUtilisateur($user);
			// var_dump($user);exit;
		}
		$form = $this->createForm(new DahiraType(), $dahira);
		
		$request = $this->get('request');


		if($request->getMethod() == 'POST'){
			$form->bind($request);
				
			if($form->isValid()){

				$dahirasVerif = $user->getDahiras();

				if(is_null($dahira->getId())){

					foreach ($dahirasVerif as $key => $dahiraVerif) {
						# code...
						if($dahiraVerif->getNom() == $dahira->getNom()){
							
							$this->get('session')->getFlashBag()->add('warning', 'flash.dahiaexist');
							return $this->render('EdahiraDahiraBundle:Dahira:editer.html.twig', array(
								'form'=>$form->createView(), 
								'dahira'=> $dahira
					        ));
						}
					}

					$dahira->setDatecreation(new \DateTime());
					
					$user->addDahira($dahira);	
				}

				$em = $this->getDoctrine()
				           ->getManager();
				
				$em->persist($dahira);
				if(is_null($dahira->getId())){
				    $em->flush();
				    $this->get('session')->getFlashBag()->add('success','flash.dahira.add');
				}
				else{
				    $em->flush();
				    $this->get('session')->getFlashBag()->add('success','flash.dahira.edited');
				}
								
				$userManager->updateUser($user);
				
				
				return $this->redirect($this->generateUrl('dahira_index'));
			}
		}
		
		return $this->render('EdahiraDahiraBundle:Dahira:editer.html.twig',array(
			'form'=>$form->createView(), 
			'dahira'=> $dahira
			));
    }

    public function supprimerAction(Dahira $dahira)
    {
    	if($this->get('request')->getMethod() == 'POST'){
	    	$em = $this->getDoctrine()->getManager();

	    	// Suppression des caisses
	    	foreach ($dahira->getCaisses() as $caisse) {
	    		$em->remove($caisse);
	    	}

	    	// Suppression des categories
	    	foreach ($dahira->getCategories() as $categorie) {
	    		$em->remove($categorie);
	    	}

	    	// Suppression des charges
	    	foreach ($dahira->getCharges() as $charge) {
	    		$em->remove($charge);
	    	}

	    	// Suppression des evenements
	    	foreach ($dahira->getEvenement() as $evenement) {
	    		$em->remove($evenement);
	    	}

	    	// Suppression des membres
	    	foreach ($dahira->getMembres() as $membre) {
	    		$em->remove($membre);
	    	}

	    	// Suppression des typeevenement
	    	foreach ($dahira->getTypeevenement() as $typeevenement) {
	    		$em->remove($typeevenement);
	    	}

	    	// Suppression des depenses
	    	foreach ($dahira->getDepenses() as $depense) {
	    		$em->remove($depense);
	    	}

			$em->remove($dahira);
			$em->flush();

			$this->get('session')->getFlashBag()->add('success', 'flash.dahira.deleted');
			
			return $this->redirect($this->generateUrl('dahira_index'));
		}
        return $this->render('EdahiraDahiraBundle:Dahira:supprimer.html.twig', array('dahira' => $dahira));
    }

    public function gererAction(Dahira $dahira)
    {
    	$dql = $this->getDoctrine()
						 ->getManager()
						 ->getRepository('EdahiraUserBundle:Utilisateurs')
						 ->nullActiveDahira();

        $userManager = $this->container->get('fos_user.user_manager');
		$user =$this->get('security.context')->getToken()->getUser();
        $user->setActiveDahira($dahira);
        $userManager->updateUser($user);


		$session = $this->get('session');

        $last_route = $session->get('last_route'); //, array('name' => 'index')
        
       
        if($last_route == 'dahira_index')
        	return $this->redirect($this->generateUrl('dahira_homepage'));

        return $this->redirect($this->generateUrl($last_route['name']));
    }

    public function partagerAction(Dahira $dahira){

		
		$form = $this->createForm(new PartagerType($dahira));

        $request = $this->get('request');

		if($request->getMethod() == 'POST'){
			$form->bind($request);
				
			if($form->isValid()){
				$user = $form->getData()['utilisateur'];

				$dahira = $this->getDoctrine()
						 ->getManager()
						 ->getRepository('EdahiraDahiraBundle:Dahira')
						 ->find($form->getData()['dahira']);
				
				$user->addDahira($dahira);

				/*$userManager = $this->container->get('fos_user.user_manager');
		        $user->setActiveDahira($dahira);
		        $userManager->updateUser($user);*/

				$em = $this->getDoctrine()
				           ->getManager();
				
				$em->persist($user);
				$em->flush();

				$this->get('session')->getFlashBag()->add('success', 'flash.dahira.shared');

				return $this->redirect($this->generateUrl('dahira_index'));

				/*var_dump($dahira);
				var_dump($user);*/
			}
		}
        return $this->render('EdahiraDahiraBundle:Dahira:partager.html.twig', array(
        		'dahira' => $dahira,
        		'form'   => $form->createView()
        	));
    }
}