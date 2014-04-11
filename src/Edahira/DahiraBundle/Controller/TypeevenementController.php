<?php

namespace Edahira\DahiraBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Edahira\DahiraBundle\Entity\Typeevenement;
use Edahira\DahiraBundle\Form\TypeevenementType;

class TypeevenementController extends Controller
{

    public function indexAction($page)
    {
        if($page < 1){
            throw $this->createNotFoundException('Page inexistente (page = '.$page.')');
            $page = 1;
        }
        $typeevenements = $this->getDoctrine()
                            ->getManager()
                            ->getRepository('EdahiraDahiraBundle:Typeevenement')
                            ->getTypeevenements(3, $page);
        
        return $this->render('EdahiraDahiraBundle:Typeevenement:index.html.twig', array(
                             'types'      => $typeevenements,
                             'page'       => $page,
                             'nombrePage' => ceil(count($typeevenements)/3)
        ));
    }

    public function editerAction(Typeevenement $type=null)
    {
        if(is_null($type)){
            $type = new Typeevenement();
        }

        $form = $this->createForm(new TypeevenementType(), $type);
        
        $request = $this->get('request');

        if($request->getMethod() == 'POST'){
            $form->bind($request);
                
            if($form->isValid()){
                $em = $this->getDoctrine()
                           ->getManager();
                 
                $em->persist($type);
                $em->flush();

                $this->get('session')->getFlashBag()->add('info','Type d\'évènement bien enregistré');
                return $this->redirect($this->generateUrl('typeevenement_index'));
            }
        }
        
        return $this->render('EdahiraDahiraBundle:Typeevenement:editer.html.twig',array('form'=>$form->createView(), 'id'=> $type->getId()));
    }

    public function supprimerAction(Typeevenement $type)
    {
        
        $em = $this->getDoctrine()->getManager();
        $em->remove($type);
        $em->flush();
        $this->get('session')->getFlashBag()->add('info', 'Type d\evenement  supprimé avec succès');
        // Puis on redirige vers l'accueil
        return $this->redirect($this->generateUrl('typecaisse_index'));
    }

    public function detailsAction()
    {
    }

}