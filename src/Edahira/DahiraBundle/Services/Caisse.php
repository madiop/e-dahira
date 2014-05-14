<?php

namespace Edahira\DahiraBundle\Services;

use Doctrine\ORM\EntityManager;
use Edahira\DahiraBundle\Entity\Caisses;
use Edahira\DahiraBundle\Entity\Typeevenement;

class Caisse extends \Twig_extension {

    /**
     * @var \Doctrine\ORM\EntityManager
     * 
     */
	protected $em;

    /**
     * @var \Edahira\DahiraBundle\Services\Charge
     * 
     */
    protected $charge;

    public function __construct(EntityManager $entityManager, Charge $charge)
    {
        $this->em = $entityManager;
        $this->charge = $charge;
    }

    /**
     * @param \Edahira\DahiraBundle\Entity\Caisses
     *
     * @return integer
     */
	public function getFond(Caisses $caisse)
    {
    	$fond = $caisse->getFond();

        foreach ($caisse->getTypeevenement() as $type) {
            $fond += $this->getFondTypeEvent($caisse, $type);
        }

        $fond += $this->getFondCharge($caisse);

    	return $fond - $this->getDepenses($caisse);
    }

    /**
     * @param \Edahira\DahiraBundle\Entity\Caisses
     * @param \Edahira\DahiraBundle\Entity\Typeevenement
     *
     * @return integer
     *
     */
    public function getFondTypeEvent(Caisses $caisse, Typeevenement $type)
    {
        $fondType = 0;

        foreach ($type->getEvenement() as $event){
            foreach ($event->getCotisations() as $cotis){
                if($cotis->getEtat() == 1){

                    $fondType += $cotis->getMontant();
                }
            }
            foreach ($event->getDons() as $don){
                 $fondType += $don->getMontant();
            }
        }

        return $fondType;
    }

    /**
     * @param \Edahira\DahiraBundle\Entity\Caisses
     *
     * @return integer
     *
     */
    public function getFondCharge(Caisses $caisse)
    {
        $fondCharge = 0;

        foreach ($caisse->getCharges() as $charge) {
            $fondCharge += $this->charge->getSoldeCharge($charge);
        }

        return $fondCharge;
    }

    /**
     * @param \Edahira\DahiraBundle\Entity\Caisses
     *
     * @return integer
     *
     */
    public function getDepenses(Caisses $caisse)
    {
        $depenses = 0;

        foreach ($caisse->getDepenses() as $depense) {
            $depenses += $depense->getMontant();
        }

        return $depenses;
    }

    /*
     * @return array
     *
     */
    public function getFunctions()
    {
    	return array(
            'getFond' => new \Twig_Function_Method($this, 'getFond'),
            'getFondTypeEvent' => new \Twig_Function_Method($this, 'getFondTypeEvent'),
            'getFondCharge' => new \Twig_Function_Method($this, 'getFondCharge'),
            'getDepenses' => new \Twig_Function_Method($this, 'getDepenses')            
        );
    }

    public function getName()
    {
    	return 'EdahiraCaisse';
    }
}