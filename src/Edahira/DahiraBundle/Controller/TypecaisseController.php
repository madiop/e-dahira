<?php

namespace Edahira\DahiraBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Edahira\DahiraBundle\Entity\Typecaisses;
use Edahira\DahiraBundle\Form\TypecaissesType;

class TypecaisseController extends Controller
{
    public function indexAction($page)
    {
		if($page < 1){
			throw $this->createNotFoundException('Page inexistente (page = '.$page.')');
			$page = 1;
		}
		$typecaisses = $this->getDoctrine()
							->getManager()
							->getRepository('EdahiraDahiraBundle:Typecaisses')
							->getTypecaisses(3, $page);
		//var_dump($typecaisses);exit;
		// return $this->redirect($url);
		return $this->render('EdahiraDahiraBundle:Typecaisse:index.html.twig', array(
		                     'types'      => $typecaisses,
		                     'page'       => $page,
		                     'nombrePage' => ceil(count($typecaisses)/3)
		));
    }

    public function editerAction($id)
    {
		if(is_null($id)){
			$type = new Typecaisses();
		}
		else{
			$type = $this->getDoctrine()
			->getManager()
			->getRepository('EdahiraDahiraBundle:Typecaisses')
			->find($id);
		}
		$form = $this->createForm(new TypecaissesType(), $type);
		
		$request = $this->get('request');

		if($request->getMethod() == 'POST'){
			$form->bind($request);
				
			if($form->isValid()){
				$em = $this->getDoctrine()
				           ->getManager();
				 
				$em->persist($type);
				$em->flush();

				$this->get('session')->getFlashBag()->add('info','Type de caisse bien enregistré');
				return $this->redirect($this->generateUrl('typecaisse_index'));
			}
		}
		
		return $this->render('EdahiraDahiraBundle:Typecaisse:editer.html.twig',array('form'=>$form->createView(), 'id'=> $id));
    }

    public function afficherAction()
    {
    }

    public function supprimerAction($id)
    {
		if($id < 1){
			throw $this->createNotFoundException('Type de caisse [Type.id = '.$id.'] inexistant.');
		}
		else{
			$type = $this->getDoctrine()
							->getManager()
							->getRepository('EdahiraDahiraBundle:Typecaisses')
							->find($id);
		}
		
		$em = $this->getDoctrine()->getManager();
		$em->remove($type);
		$em->flush();
		$this->get('session')->getFlashBag()->add('info', 'Type de caisse supprimé avec succès');
		// Puis on redirige vers l'accueil
		return $this->redirect($this->generateUrl('typecaisse_index'));
    }
}