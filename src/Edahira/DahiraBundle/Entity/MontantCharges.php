<?php

namespace Edahira\DahiraBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MontantCharges
 */
class MontantCharges
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $montant;

    /**
     * @var \Edahira\DahiraBundle\Entity\Charges
     */
    private $charge;

    /**
     * @var \Edahira\DahiraBundle\Entity\Categories
     */
    private $categorie;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set montant
     *
     * @param integer $montant
     * @return MontantCharges
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return integer 
     */
    public function getMontant()
    {
        return $this->montant;
    }


    /**
     * Set charge
     *
     * @param \Edahira\DahiraBundle\Entity\Charges $charge
     * @return MontantCharges
     */
    public function setCharge(\Edahira\DahiraBundle\Entity\Charges $charge)
    {
        $this->charge = $charge;

        return $this;
    }

    /**
     * Get charge
     *
     * @return \Edahira\DahiraBundle\Entity\Charges 
     */
    public function getCharge()
    {
        return $this->charge;
    }

    /**
     * Set categorie
     *
     * @param \Edahira\DahiraBundle\Entity\Categories $categorie
     * @return MontantCharges
     */
    public function setCategorie(\Edahira\DahiraBundle\Entity\Categories $categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return \Edahira\DahiraBundle\Entity\Categories 
     */
    public function getCategorie()
    {
        return $this->categorie;
    }
}
