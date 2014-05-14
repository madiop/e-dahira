<?php

namespace Edahira\DahiraBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Edahira\DahiraBundle\Entity\Evenement;
use Edahira\DahiraBundle\Entity\Typeevenement;
use Edahira\DahiraBundle\Entity\Membres;
use Edahira\DahiraBundle\Form\EtatcaisseType;
use Edahira\DahiraBundle\Form\EtatType;
use Edahira\DahiraBundle\Form\EtatmembreType;
use Edahira\DahiraBundle\Form\EtatchargesType;
use Edahira\DahiraBundle\Form\EtatchargemembreType;
use Doctrine\ORM\EntityRepository;

class EtatsController extends Controller
{
    public function indexAction(){
        $request = $this->get('request');
        
        $form = $this->createForm(new EtatType());
        return $this->render('EdahiraDahiraBundle:Etats:index.html.twig', array('form'=>$form->createView()));
    }

    public function caisseAction(){
        $user = $this->get('security.context')->getToken()->getUser();
        
        $form = $this->createForm(new EtatcaisseType($user->getActiveDahira()));
        
        $request = $this->get('request'); 
        
        if($request->isXmlHttpRequest()){

            $form->bind($request);
            $caisse = $form['caisse']->getData();
                                                  
            return $this->render('EdahiraDahiraBundle:Etats:ajax.caisse.html.twig',array(
                'caisse' => $caisse
            ));
        }
        else{
            return $this->render('EdahiraDahiraBundle:Etats:caisse.html.twig',array('form'=>$form->createView()));
        }
    }

    public function evenementAction(){
        $user = $this->get('security.context')->getToken()->getUser();
        // echo 'bonjour';exit;
        $request = $this->get('request'); 
        $form = $this->createForm(new EtatType($user->getActiveDahira()));

        if($request->isXmlHttpRequest()){
        // if($request->getMethod() == 'POST'){
            $form->bind($request);
           
            $type = $form['type']->getData();

            $membres = $this->getDoctrine()
                            ->getManager()
                            ->getRepository('EdahiraDahiraBundle:Membres')
                            ->findAll();

            $cotisations = array();

            foreach ($membres as $membre){

                $cot = $this->getDoctrine()
                            ->getManager()
                            ->getRepository('EdahiraDahiraBundle:Cotisations')
                            ->getCotisationsMembreEventType($type->getId(), $membre->getId());
                
                if(!empty($cot)){
                    $cotisations[] = $cot;                  
                }
            }

            $events = array();
            if(!empty($cotisations)){
                $cots = $cotisations[0];
                foreach ($cots as $cot) {
                    $events[] = $cot->getEvenement();
                }
            }

            return $this->render('EdahiraDahiraBundle:Etats:ajax.evenement.html.twig',array(
                'events'       => $events,
                'cotisations'  => $cotisations,
                'membres'      => $membres
            )); 

        }
        else{
            return $this->render('EdahiraDahiraBundle:Etats:evenement.html.twig',array('form'=>$form->createView()));
        }
    }

    public function membreAction(Membres $membre = null, Typeevenement $type = null){
        $user = $this->get('security.context')->getToken()->getUser();
        
        $request = $this->get('request'); 
        $form = $this->createForm(new EtatmembreType($user->getActiveDahira()));

        if(!is_null($membre) and !is_null($type)){
            $cotisations = $this->getDoctrine()
                                ->getManager()
                                ->getRepository('EdahiraDahiraBundle:Cotisations')
                                ->getCotisationsMembreEventType($type->getId(), $membre->getId());

            return $this->render('EdahiraDahiraBundle:Etats:membre.html.twig',array(
                'cotisations' => $cotisations,
                'membre'      => $membre,
                'type'        => $type,
                'form'        => $form->createView()
            ));

        }

        if($request->isXmlHttpRequest()){
        // if($request->getMethod() == 'POST'){

            $form->bind($request);
            $type = $form['type']->getData();
            $membre = $form['membre']->getData();

            $cotisations = $this->getDoctrine()
                                ->getManager()
                                ->getRepository('EdahiraDahiraBundle:Cotisations')
                                ->getCotisationsMembreEventType($type->getId(), $membre->getId());

            // var_dump($cotisations[0]->getMembre());exit;
            return $this->render('EdahiraDahiraBundle:Etats:ajax.membre.html.twig',array(
                'cotisations' => $cotisations,
                'membre'      => $membre,
                'type'        => $type
            ));

        }
        else{
            return $this->render('EdahiraDahiraBundle:Etats:membre.html.twig',array(
                'form'   => $form->createView(),
                'membre' => $membre,
                'type'   => $type
                ));
        }
    }

    public function chargesAction(){
        $user = $this->get('security.context')->getToken()->getUser();

        $request = $this->get('request');

        $form = $this->createForm(new EtatchargesType($user->getActiveDahira()));

        if($request->isXmlHttpRequest()){
        // if($request->getMethod() == 'POST'){
            $form->bind($request);
            $charge = $form->getData()['charge'];

            $membres = $this->getDoctrine()
                            ->getManager()
                            ->getRepository('EdahiraDahiraBundle:Membres')
                            ->findAll();
            $membres = $this->get('security.context')->getToken()->getUser()->getActiveDahira()->getMembres();
            /*var_dump($charge->getmontants());
            var_dump($membres);
            exit;*/

            // var_dump($cotisations);exit;
            return $this->render('EdahiraDahiraBundle:Etats:ajax.charges.html.twig',array(
                'charge' => $charge,
                'membres' => $membres
            ));

        }
        else{
            return $this->render('EdahiraDahiraBundle:Etats:charges.html.twig', array('form'=>$form->createView()));
        }
    }    

    public function chargemembreAction(){

        $user = $this->get('security.context')->getToken()->getUser();
        
        $request = $this->get('request');

        $form = $this->createForm(new EtatchargemembreType($user->getActiveDahira()->getId()));

        if($request->isXmlHttpRequest()){
        // if($request->getMethod() == 'POST'){
            $form->bind($request);
            $charge = $form->getData()['charge'];
            $membre = $form->getData()['membre'];
           
            $versements = $this->getDoctrine()
                               ->getManager()
                               ->getRepository('EdahiraDahiraBundle:Versements')
                               ->getVersementMembre($charge->getId(), $membre->getId());

            /*var_dump($charge->getmontants());
            var_dump($membres);
            exit;*/

            // var_dump($cotisations);exit;
            return $this->render('EdahiraDahiraBundle:Etats:ajax.chargemembre.html.twig',array(
                'charge'     => $charge,
                'versements' => $versements,
                'membre'     => $membre
            ));
        }
        else{
            return $this->render('EdahiraDahiraBundle:Etats:chargemembre.html.twig', array('form'=>$form->createView()));
        }
    }
}