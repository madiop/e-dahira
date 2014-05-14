<?php

namespace Edahira\DahiraBundle\Services;

use Doctrine\ORM\EntityManager;
use Edahira\DahiraBundle\Entity\Membres;
use Edahira\DahiraBundle\Entity\Categories;
use Edahira\DahiraBundle\Entity\Charges;

class Charge extends \Twig_extension {

    /**
     * @var \Doctrine\ORM\EntityManager
     * 
     */
	protected $em;

    /**
     * Constructor
     * @param \Doctrine\ORM\EntityManager
     */
    public function __construct(EntityManager $entityManager)
    {
        $this->em = $entityManager;
    }

    /**
     * @param \Edahira\DahiraBundle\Entity\Charges
     * @param \Edahira\DahiraBundle\Entity\Membres
     *
     * @return integer
     */
	public function getBalanceMembre(Charges $charge, Membres $membre)
    {
    	$versements = $this->em
						   ->getRepository('EdahiraDahiraBundle:Versements')
						   ->getVersementMembre($charge->getId(), $membre->getId());
        $balance = 0;
        foreach ($versements as $key => $versement) {
        	$balance += $versement->getMontant();
        }

    	return $balance;
    }

    /**
     * @param \Edahira\DahiraBundle\Entity\Charges
     * @param \Edahira\DahiraBundle\Entity\Categories
     *
     * @return integer
     */
    public function getMontantCharge(Charges $charge, Categories $categorie)
    {
        $montantCharge = 0;$i = 1;
		foreach ($charge->getMontants() as $key => $montant) {

			if($montant->getCategorie()->getId() == $categorie->getId() ){

				$montantCharge = $montant->getMontant();
                break;
			}
            $i++;
		}

		return $montantCharge;
    }


    /**
     * @param \Edahira\DahiraBundle\Entity\Charges
     *
     * @return integer
     */
    public function getDonCharge(Charges $charge)
    {
        $soldeDon = 0;
        foreach ($charge->getDons() as $don) {

            $soldeDon += $don->getMontant();
        }

        return $soldeDon;
    }

    /**
     * @param \Edahira\DahiraBundle\Entity\Charges
     *
     * @return integer
     */
    public function getSoldeCharge(Charges $charge)
    {
        $solde = 0;
        foreach ($charge->getVersements() as $key => $versement) {

            $solde += $versement->getMontant();
        }

        return $solde + $this->getDonCharge($charge);
    }


    /*
    Twig_SimpleFunction
     */
    public function getFunctions()
    {
    	return array(
            'getBalanceMembre' => new \Twig_Function_Method($this, 'getBalanceMembre'),
            'getMontantCharge' => new \Twig_Function_Method($this, 'getMontantCharge'),
            'getSoldeCharge' => new \Twig_Function_Method($this, 'getSoldeCharge'),
            'getDonCharge' => new \Twig_Function_Method($this, 'getDonCharge') 
        );
    }

    public function getName()
    {
    	return 'EdahiraCharge';
    }
}