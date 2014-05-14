<?php

namespace Edahira\DahiraBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dons
 */
class Dons
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
     * @var string
     */
    private $donnateur;

    /**
     * @var string
     */
    private $montant;
    
    /**
     * @var \Edahira\DahiraBundle\Entity\Evenement
     */
    private $evenement;

    /**
     * @var \Edahira\DahiraBundle\Entity\Charges
     */
    private $charges;

    /**
     * Constructor
     *
     * @return \Edahira\DahiraBundle\Entity\Dons $dahira
     */
    public function __construct()
    {
        $this->date = new \DateTime();

        return $this;
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
     * Set donnateur
     *
     * @param string $donnateur
     * @return Dons
     */
    public function setDonnateur($donnateur)
    {
        $this->donnateur = $donnateur;

        return $this;
    }

    /**
     * Get donnateur
     *
     * @return string 
     */
    public function getDonnateur()
    {
        return $this->donnateur;
    }

    /**
     * Set montant
     *
     * @param string $montant
     * @return Dons
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return string 
     */
    public function getMontant()
    {
        return $this->montant;
    }


    /**
     * Set evenement
     *
     * @param \Edahira\DahiraBundle\Entity\Evenement $evenement
     * @return Dons
     */
    public function setEvenement(\Edahira\DahiraBundle\Entity\Evenement $evenement = null)
    {
        $this->evenement = $evenement;

        return $this;
    }

    /**
     * Get evenement
     *
     * @return \Edahira\DahiraBundle\Entity\Evenement 
     */
    public function getEvenement()
    {
        return $this->evenement;
    }

    /**
     * Set charges
     *
     * @param \Edahira\DahiraBundle\Entity\Charges $charges
     * @return Dons
     */
    public function setCharges(\Edahira\DahiraBundle\Entity\Charges $charges = null)
    {
        $this->charges = $charges;

        return $this;
    }

    /**
     * Get charges
     *
     * @return \Edahira\DahiraBundle\Entity\Charges 
     */
    public function getCharges()
    {
        return $this->charges;
    }


    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Dons
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
}
