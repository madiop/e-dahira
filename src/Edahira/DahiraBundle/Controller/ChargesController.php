<?php

namespace Edahira\DahiraBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Edahira\DahiraBundle\Entity\Charges;
use Edahira\DahiraBundle\Entity\Categories;
use Edahira\DahiraBundle\Entity\MontantCharges;
use Edahira\DahiraBundle\Form\ChargesType;

class ChargesController extends Controller
{
	public function indexAction()
    {
    	$charges = $this->get('security.context')->getToken()->getUser()->getActiveDahira()->getCharges();
	    
		return $this->render('EdahiraDahiraBundle:Charges:index.html.twig', array(
		                     'charges'    => $charges
		));
    }

    public function editerAction(Charges $charge = null)
    {
    	$user = $this->get('security.context')->getToken()->getUser();

    	if(count($user->getActiveDahira()->getCaisses()) < 1){

            $url = $this->generateUrl("caisse_editer");
            $this->get('session')->getFlashBag()->add('info','action.caisse.create');
            return $this->render('EdahiraDahiraBundle:Charges:editer.html.twig');
        }
        elseif (count($user->getActiveDahira()->getCategories()) < 1) {

            $url = $this->generateUrl("categorie_editer");
            $this->get('session')->getFlashBag()->add('info','action.categorie.create');
            return $this->render('EdahiraDahiraBundle:Charges:editer.html.twig');
        }

        /*
         * Le bloc suivant permet d'assurer que les cotisationsde toutes les categories
         * du dahira sont ajoutées à la charge
         */
    	if(is_null($charge)){
			$charge = new Charges($user->getActiveDahira());
			
		}
		$cats = $catsVerif = array();
		foreach ($charge->getMontants() as $montantCh) {
			$catsVerif[] = $montantCh->getCategorie()->getId();
		}
		foreach ($user->getActiveDahira()->getCategories() as $categorie) {
			if(! in_array($categorie->getId(), $catsVerif)){
				$montantCharge = new MontantCharges();
				$montantCharge->setCategorie($categorie);
				$charge->addMontant($montantCharge);

			}
			$cats[] = $categorie->getId();
    	}
    	/*  fin de la verification */


    	$form = $this->createForm(new ChargesType($user->getActiveDahira()->getId()), $charge);


		$request = $this->get('request');

		if($request->getMethod() == 'POST'){
			$form->bind($request);
			$new = false;

			if($form->isValid()){
				$em = $this->getDoctrine()
				           ->getManager();
				if(is_null($charge->getId())){
					$new = true;

					$newId = $this->getDoctrine()
							       ->getManager()
				     		       ->getRepository('EdahiraDahiraBundle:Charges')
					    	       ->findLast()+1;

	                $charge->setId($newId);
	            }

				if($charge->getEcheance() < new \DateTime()){
					
					$this->get('session')->getFlashBag()->add('warning','flash.date.old');
					
					return $this->render('EdahiraDahiraBundle:Charges:editer.html.twig',array(
							'form'=>$form->createView(), 
							'charge'=> $charge
					));
				}

                foreach ($charge->getMontants() as $key => $montantCh) {
					$montantCh->setCharge($charge);
				}

				$em->persist($charge);
				if($new){
					$em->flush();
					$this->get('session')->getFlashBag()->add('success','flash.charge.added');
				}
				else{
					$em->flush();
					$this->get('session')->getFlashBag()->add('success','flash.charge.edited');
				}
				return $this->redirect($this->generateUrl('charges_index'));
			}
		}
		
		return $this->render('EdahiraDahiraBundle:Charges:editer.html.twig',array(
			'form'=>$form->createView(), 
			'charge'=> $charge
		));
    }

    public function changeretatAction(Charges $charge, $etat)
    {
    	$charge->setEtat($etat);

        $em = $this->getDoctrine()
		           ->getManager();
				 
		$em->persist($charge);
		$em->flush();
		if($etat)
		    $this->get('session')->getFlashBag()->add('success', 'flash.caisse.ferme');
	    else
	    	$this->get('session')->getFlashBag()->add('success', 'flash.caisse.ouvert');
		return $this->redirect( $this->generateUrl('charges_index'));
    }


    public function detailsAction(Charges $charge)
    {
    	$membres = $this->get('security.context')->getToken()->getUser()->getActiveDahira()->getMembres();
        
        return $this->render('EdahiraDahiraBundle:Charges:details.html.twig',array(
            'charge' => $charge,
            'membres' => $membres
        ));
    }

    public function supprimerAction(Charges $charge)
    {
        if($this->get('request')->getMethod() == 'POST'){

	    	$em = $this->getDoctrine()->getManager();
	    	foreach ($charge->getMontants() as $key => $montantCh) {
			    $em->remove($montantCh);
			}
			foreach ($charge->getVersements() as $key => $versement) {
			    $em->remove($versement);
			}

			$em->remove($charge);
			$em->flush();
			$this->get('session')->getFlashBag()->add('success', 'flash.charge.supprimer');
			
			return $this->redirect($this->generateUrl('charges_index'));
		}
    	return $this->render('EdahiraDahiraBundle:Charges:supprimer.html.twig', array('charge' => $charge));
    }
}