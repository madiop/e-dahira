<?php

namespace Edahira\DahiraBundle\Services;

use Doctrine\ORM\EntityManager;
use Edahira\DahiraBundle\Entity\Membres;
use Edahira\DahiraBundle\Entity\Categories;
use Edahira\DahiraBundle\Entity\Typeevenement;
use Edahira\DahiraBundle\Entity\Evenement;


class Cotisation extends \Twig_extension {

	protected $em;

    public function __construct(EntityManager $entityManager)
    {
        $this->em = $entityManager;
    }

    /**
     * @param \Edahira\DahiraBundle\Entity\Charges
     * @param \Edahira\DahiraBundle\Entity\Categories
     *
     * @return integer
     */
    public function getMontantCotisation(Typeevenement $type, Categories $categorie)
    {
        $montantCotis = 0;
		foreach ($type->getCotisations() as $key => $montant) {

			if($montant->getCategorie() == $categorie ){

				$montantCotis = $montant->getMontant();
			}
		}

		return $montantCotis;
    }

    /*
    Twig_SimpleFunction
     */
    public function getFunctions()
    {
    	return array(
            'getMontantCotisation' => new \Twig_Function_Method($this, 'getMontantCotisation')
        );
    }

    public function getName()
    {
    	return 'EdahiraCotisation';
    }
}