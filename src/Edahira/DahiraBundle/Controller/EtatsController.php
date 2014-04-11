<?php

namespace Edahira\DahiraBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Edahira\DahiraBundle\Entity\Evenement;
use Edahira\DahiraBundle\Entity\Membres;
use Edahira\DahiraBundle\Form\EtatType;
use Doctrine\ORM\EntityRepository;


class EtatsController extends Controller
{
    
    public function indexAction()
    {
        $request = $this->get('request');
        
        $form = $this->createForm(new EtatType());
        //$form->handleRequest($request);

        if($request->getMethod() == 'POST'){
            $form->bind($request);

            // $data = $form->getData();
            $type = $form['type']->getData();
            // var_dump($type);exit;

            return $this->redirect($this->generateUrl('etats_evenement',array('id' => $type->getId())));
            // return $this->redirect($this->generateUrl('etats_evenement',array('id' => 1)));
        }
        return $this->render('EdahiraDahiraBundle:Etats:index.html.twig',array('form'=>$form->createView()));
    }

    public function evenementAction(Evenement $event = null){
        
        if(is_null($event)){
            return $this->render('EdahiraDahiraBundle:Etats:evenement.html.twig',array(
                'events'       => null,
                'cotisations'  => null,
                'membres'      => null
            )); 
        }
        

        $membres = $this->getDoctrine()->getManager()
                                        ->getRepository('EdahiraDahiraBundle:Membres')
                                        ->findAll();
        // $membres = new Membres()->find();                                        

        $tabEvent = $this->getDoctrine()->getManager()
                                        ->getRepository('EdahiraDahiraBundle:Evenement')
                                        ->getEvenementType($event->getTypeevenement()->getId());
        
        $cotisations = array();
        foreach ($membres as $membre){

            $cotisations[] = $this->getDoctrine()
                                  ->getManager()
                                  ->getRepository('EdahiraDahiraBundle:Cotisations')
                                  ->getCotisationsMembreEventType($event->getId(), $membre->getId());
        }

        $cots = $cotisations[0];
        // var_dump($cots);exit;
        $events = array();
        foreach ($cots as $cot) {
            $events[] = $cot->getEvenement();
        }

        return $this->render('EdahiraDahiraBundle:Etats:evenement.html.twig',array(
            'events'       => $events,
            'cotisations'  => $cotisations,
            'membres'      => $membres
        )); 
    }

    
    public function membreAction(Membres $membre = null, $type = 1, $page){
        
        if(is_null($membre)){
            return $this->render('EdahiraDahiraBundle:Etats:evenement.html.twig',array(
                'membre'       => null,
                'cotisations'  => null,
                'type'         => null
            )); 
        }
        /*
         * A enlever car le type est a recuperer a partir les arguments
         *
         */
        $typeEvent = $this->getDoctrine()->getManager()
                                        ->getRepository('EdahiraDahiraBundle:Typeevenement')
                                        ->find($type);
                                              
        $cotisations = $this->getDoctrine()
                            ->getManager()
                            ->getRepository('EdahiraDahiraBundle:Cotisations')
                            ->getCotisationsMembreEventType($typeEvent->getId(), $membre->getId(), $page, 10);//le premier argument est celui du type devenement (dahira, mensuualite ...)

        // var_dump($cotisations);exit;
        return $this->render('EdahiraDahiraBundle:Etats:membre.html.twig',array(
            'cotisations' => $cotisations,
            'membre'      => $membre,
            'type'        => $typeEvent,
            'page'        => $page,
            'nombrePage'  => ceil(count($cotisations)/10)
        )); 
    }

    public function typeevenementAction()
    {
    }

}
