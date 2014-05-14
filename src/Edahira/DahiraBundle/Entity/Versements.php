<?php

namespace Edahira\DahiraBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Versements
 */
class Versements
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var integer
     */
    private $montant;
    
    /**
     * @var \Edahira\DahiraBundle\Entity\Charges
     */
    private $charge;

    /**
     * @var \Edahira\DahiraBundle\Entity\Membres
     */
    private $membre;

    /**
     * @var Boolean
     */
    private $stay;

    /**
     * Constructor.
     *
     * @return void
     */
    public function __construct()
    {
        $this->date = new \DateTime();
    }

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
     * Set date
     *
     * @param \DateTime $date
     * @return Versements
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set montant
     *
     * @param integer $montant
     * @return Versements
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
     * @return Versements
     */
    public function setCharge(\Edahira\DahiraBundle\Entity\Charges $charge = null)
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
     * Set membre
     *
     * @param \Edahira\DahiraBundle\Entity\Membres $membre
     * @return Versements
     */
    public function setMembre(\Edahira\DahiraBundle\Entity\Membres $membre = null)
    {
        $this->membre = $membre;

        return $this;
    }

    /**
     * Get membre
     *
     * @return \Edahira\DahiraBundle\Entity\Membres 
     */
    public function getMembre()
    {
        return $this->membre;
    }

    /**
     * Set membre
     *
     * @param boolean
     * @return Versements
     */
    public function setStay($stay)
    {
        $this->stay = $stay;

        return $this;
    }

    /**
     * Get membre
     *
     * @return boolean 
     */
    public function getStay()
    {
        return $this->stay;
    }
}
