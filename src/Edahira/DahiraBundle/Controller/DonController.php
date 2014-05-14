<?php

namespace Edahira\DahiraBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Edahira\DahiraBundle\Entity\Dons;
use Edahira\DahiraBundle\Form\DonsType;

class DonController extends Controller
{
    public function indexAction($type, $idType)
    {
        $dahira = $this->get('security.context')->getToken()->getUser()->getActiveDahira();

        if($type == 1){
            // Evenement
            $object = $this->getDoctrine()
                           ->getManager()
                           ->getRepository('EdahiraDahiraBundle:Evenement')
                           ->find($idType);
        }
        elseif ($type == 2) {
            // Charge
            $object = $this->getDoctrine()
                           ->getManager()
                           ->getRepository('EdahiraDahiraBundle:Charges')
                           ->find($idType);
        }

        if($object->getDahira()->getId() != $dahira->getId()){
            // Alors l'objet n'appartien pas o dahira actif
            $lastUrl = $this->get('session')->get('last_route')['name'];
            $this->get('session')->getFlashBag()->add('error', 'text.object.out!');
            return $this->redirect($this->generateUrl($lastUrl));
        }
        
        $dons = $object->getDons();

        return $this->render('EdahiraDahiraBundle:Don:index.html.twig', array(
            'dons'   => $dons,
            'type'   => $type,
            'object' => $object
        ));
    }

    public function editerAction($type, $idType, Dons $don = null)
    {
        $dahira = $this->get('security.context')->getToken()->getUser()->getActiveDahira();
        
        if(is_null($don)){
            $don = new Dons();

            if($type == '1'){
                // Evenement
                $object = $this->getDoctrine()
                               ->getManager()
                               ->getRepository('EdahiraDahiraBundle:Evenement')
                               ->find($idType);

                $don->setEvenement($object);
            }
            elseif ($type == '2') {
                // Charge
                $object = $this->getDoctrine()
                               ->getManager()
                               ->getRepository('EdahiraDahiraBundle:Charges')
                               ->find($idType);

                $don->setCharges($object);
            }
        }
        else{
            $object = is_null($don->getEvenement()) ? $don->getCharges() : $don->getEvenement(); 
        }
        // var_dump($don);

        if($object->getDahira()->getId() != $dahira->getId()){
            // Alors l'objet n'appartien pas o dahira actif
            $lastUrl = $this->get('session')->get('last_route')['name'];
            $this->get('session')->getFlashBag()->add('error', 'text.object.out!');
            return $this->redirect($this->generateUrl($lastUrl));
        }

        $form = $this->createForm(new DonsType($dahira->getId()), $don);
        
        $request = $this->get('request');

        if($request->getMethod() == 'POST'){
        // if($request->isXmlHttpRequest()){
            $form->bind($request);
                
            if($form->isValid()){                

                $em = $this->getDoctrine()
                           ->getManager();
                
                $em->persist($don);
                if(is_null($don->getId())){
                    $em->flush();
                    $this->get('session')->getFlashBag()->add('success','flash.don.add');
                }
                else{
                    $em->flush();
                    $this->get('session')->getFlashBag()->add('success','flash.don.edited');
                }

                if($type == 1){
                    return $this->redirect($this->generateUrl('cotisation_etat', array('id' => $idType)));
                }
                else{
                    return $this->redirect($this->generateUrl('charges_index', array('id' => $idType)));   
                }
            }
        }
        

        return $this->render('EdahiraDahiraBundle:Don:editer.html.twig', array(
                'form'   => $form->createView(), 
                'don'    => $don,
                'object' => $object,
                'type'   => $type
        ));

    }

    public function supprimerAction($type, $idType, Dons $don = null)
    {
        if($this->get('request')->getMethod() == 'POST'){
            $em = $this->getDoctrine()->getManager();
            $em->remove($don);
            $em->flush();

            $this->get('session')->getFlashBag()->add('success', 'flash.don.deleted');
            
            if($type == 1){ 
                return $this->redirect($this->generateUrl('cotisation_etat', array('id' => $idType)));
            }
            elseif($type == 2){
                return $this->redirect($this->generateUrl('charges_etat', array('id' => $idType)));
            }
        }
        else{
            if($type == 1){ 
                return $this->render('EdahiraDahiraBundle:Don:supprimer.html.twig', array(
                    'don' => $don,
                    'id'  => $idType
                ));
            }
            elseif($type == 2){   
                return $this->render('EdahiraDahiraBundle:Don:supprimer.html.twig', array(
                    'don' => $don,
                    'id'  => $idType
                ));
            }
        }
    }
}
