<?php

namespace Edahira\DahiraBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Edahira\DahiraBundle\Entity\Versements;
use Edahira\DahiraBundle\Entity\Membres;
use Edahira\DahiraBundle\Entity\Categories;
use Edahira\DahiraBundle\Entity\Charges;
use Edahira\DahiraBundle\Form\VersementsType;

class VersementController extends Controller
{
    public function indexAction()
    {
        $user = $this->get('security.context')->getToken()->getUser();

        $versements = $this->getDoctrine()
                        ->getManager()
                        ->getRepository('EdahiraDahiraBundle:Versements')
                        ->getVersements($user->getActiveDahira()->getId());
        // var_dump($versements);exit;

        return $this->render('EdahiraDahiraBundle:Versement:index.html.twig', array(
                             'versements'   => $versements/*,
                             'page'       => $page,
                             'nombrePage' => ceil(count($versements)/10)*/
        ));
    }

    public function editerAction(Versements $versement = null)
    {
        $user = $this->get('security.context')->getToken()->getUser();

        if(count($user->getActiveDahira()->getCharges()) < 1){

            $url = $this->generateUrl("charges_editer");
            $this->get('session')->getFlashBag()->add('html','action.charges.create');
            $this->get('session')->getFlashBag()->add('url',$url);
            return $this->render('EdahiraDahiraBundle:Versement:editer.html.twig');
        }
        elseif (count($user->getActiveDahira()->getMembres()) < 1) {

            $url = $this->generateUrl("membre_editer");
            $this->get('session')->getFlashBag()->add('html','action.membre.create');
            $this->get('session')->getFlashBag()->add('url',$url);
            return $this->render('EdahiraDahiraBundle:Versement:editer.html.twig');
        }

        if(is_null($versement)){
            $versement = new Versements();
        }

        $form = $this->createForm(new VersementsType($user->getActiveDahira()->getId()), $versement);

        $request = $this->get('request');

        if($request->getMethod() == 'POST'){
            $form->bind($request);
                
            if($form->isValid()){
                $em = $this->getDoctrine()
                           ->getManager();
                           
                /*
                 * Recuperation du service de gestion des charges
                 *
                 */
                $chargeServ = $this->container->get('edahira_dahira.charge');

                $verse = $chargeServ->getBalanceMembre($versement->getCharge(), $versement->getMembre());
                $mntCharge = $chargeServ->getMontantCharge($versement->getCharge(), $versement->getMembre()->getCategorie());

                $restant = $mntCharge - $verse;

                if($versement->getMontant() > $restant){
                    $this->get('session')->getFlashBag()->add('info',$versement->getMembre()->getAffichage().' a déjà versé '.$verse.' sur '.$mntCharge.' il lui reste seulement '.$restant);
                    return $this->render('EdahiraDahiraBundle:Versement:editer.html.twig', array(
                        'form'=>$form->createView(), 
                        'versement'=> $versement));
                }

                /*if($versement->getDate() < new \DateTime()){
                    
                    $this->get('session')->getFlashBag()->add('warning','flash.date.old');
                    
                    return $this->render('EdahiraDahiraBundle:Versement:editer.html.twig', array(
                        'form'=>$form->createView(), 
                        'versement'=> $versement
                    ));
                }*/

                $em->persist($versement);

                if(is_null($versement->getId())){
                    $em->flush();
                    $this->get('session')->getFlashBag()->add('success','flash.versement.added');
                }
                else{
                    $em->flush();
                    $this->get('session')->getFlashBag()->add('success','flash.versement.edited');
                }

                $return_path = $this->get('session')->get('last_route');
                if($this->get('session')->get('last_route') == 'etats_chargemembre'){
                    return $this->redirect($this->generateUrl('etats_chargemembre'));
                }
                else{
                    if($versement->getStay())
                        return $this->redirect($this->generateUrl('versement_editer'));
                    else
                        return $this->redirect($this->generateUrl('versement_index'));
                }
            }
        }
        // $session = ;
        if($this->get('session')->get('last_route') == 'etats_chargemembre'){
            // $form->getFormBuilder()->remove('stay');
            return $this->render('EdahiraDahiraBundle:Versement:formVersement.html.twig', array(
                'form'=>$form->createView(), 
                'versement'=> $versement));
        }
        else{
            return $this->render('EdahiraDahiraBundle:Versement:editer.html.twig', array(
                'form'=>$form->createView(), 
                'versement'=> $versement));
        }
    }

    public function supprimerAction(Versements $versement)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($versement);
        $em->flush();
        $this->get('session')->getFlashBag()->add('info','Versement supprimé avec succès');
        
        return $this->redirect($this->generateUrl('versement_index'));
    }
}