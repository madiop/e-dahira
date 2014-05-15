<?php

namespace Edahira\DahiraBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Edahira\DahiraBundle\Entity\Depenses;
use Edahira\DahiraBundle\Form\DepensesType;

class DepensesController extends Controller
{
    public function indexAction()
    {
	    $depenses = $this->get('security.context')->getToken()->getUser()->getActiveDahira()->getDepenses();

		return $this->render('EdahiraDahiraBundle:Depenses:index.html.twig', array(
		                     'depenses'   => $depenses/*,
		                     'page'       => $page,
		                     'nombrePage' => ceil(count($depenses)/10)*/
		));
    }


    public function editerAction(Depenses $depense = null)
    {
    	$user = $this->get('security.context')->getToken()->getUser();

    	if(count($user->getActiveDahira()->getCaisses()) < 1){

            $this->get('session')->getFlashBag()->add('info','action.caisse.create');
            return $this->render('EdahiraDahiraBundle:Depenses:editer.html.twig');
        }
    	if(is_null($depense)){
			$depense = new Depenses($user->getActiveDahira());
		}
		$form = $this->createForm(new DepensesType($user->getActiveDahira()->getId()), $depense);
		
		$request = $this->get('request');


		if($request->getMethod() == 'POST'){
			$form->bind($request);
				
			if($form->isValid()){

				$em = $this->getDoctrine()
				           ->getManager();

                $caisseServ = $this->container->get('edahira_dahira.caisse');
				$fond = $caisseServ->getFond($depense->getCaisse());

				if($fond < $depense->getMontant()){
					$this->get('session')->getFlashBag()->add('warning', 'flash.balance.insuffisante');
					$this->get('session')->getFlashBag()->add('warning', 'caisse.balance '.$fond);
					return $this->render('EdahiraDahiraBundle:Depenses:editer.html.twig', array(
						'form'=>$form->createView(), 
						'depense'=> $depense
			            ));
				}
				if($depense->getDate() < new \DateTime()){
					
					$this->get('session')->getFlashBag()->add('warning','flash.date.old');
					
					return $this->render('EdahiraDahiraBundle:Depenses:editer.html.twig',
						array('form'=>$form->createView(), 'depense'=> $depense
					));
				}

				$em->persist($depense);

				if(is_null($depense->getId())){
					$em->flush();
					$this->get('session')->getFlashBag()->add('success','flash.depense.added');
                }
                else{
                	$em->flush();
					$this->get('session')->getFlashBag()->add('success','flash.depense.edit');
                }

				return $this->redirect($this->generateUrl('depenses_index'));
			}
		}
		
		return $this->render('EdahiraDahiraBundle:Depenses:editer.html.twig',array(
			'form'=>$form->createView(), 
			'depense'=> $depense
		));
    }

    public function supprimerAction(Depenses $depense)
    {		
		if($this->get('request')->getMethod() == 'POST'){
			$em = $this->getDoctrine()->getManager();
			$em->remove($depense);
			$em->flush();

			$this->get('session')->getFlashBag()->add('success', 'flash.depense.deleted');
			
			return $this->redirect($this->generateUrl('depenses_index'));
		}
    	return $this->render('EdahiraDahiraBundle:Depenses:supprimer.html.twig', array('depense' => $depense));
    }
}