<?php

namespace Edahira\DahiraBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Depenses
 */
class Depenses
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
     * @var string
     */
    private $objet;
    
    /**
     * @var \Edahira\DahiraBundle\Entity\Dahira
     */
    private $dahira;

    /**
     * Constructor
     *
     * @param \Edahira\DahiraBundle\Entity\Dahira $dahira
     */
    public function __construct(\Edahira\DahiraBundle\Entity\Dahira $dahira)
    {
        $this->date = new \DateTime();
        $this->dahira = $dahira;
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
     * @return Depenses
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
     * @return Depenses
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
     * @var \Edahira\DahiraBundle\Entity\Caisses
     */
    private $caisse;


    /**
     * Set caisse
     *
     * @param \Edahira\DahiraBundle\Entity\Caisses $caisse
     * @return Depenses
     */
    public function setCaisse(\Edahira\DahiraBundle\Entity\Caisses $caisse = null)
    {
        $this->caisse = $caisse;

        return $this;
    }

    /**
     * Get caisse
     *
     * @return \Edahira\DahiraBundle\Entity\Caisses 
     */
    public function getCaisse()
    {
        return $this->caisse;
    }

    /**
     * Set objet
     *
     * @param string $objet
     * @return Depenses
     */
    public function setObjet($objet)
    {
        $this->objet = $objet;

        return $this;
    }

    /**
     * Get objet
     *
     * @return string 
     */
    public function getObjet()
    {
        return $this->objet;
    }

    /**
     * Set dahira
     *
     * @param \Edahira\DahiraBundle\Entity\Dahira $dahira
     * @return Depenses
     */
    public function setDahira(\Edahira\DahiraBundle\Entity\Dahira $dahira = null)
    {
        $this->dahira = $dahira;

        return $this;
    }

    /**
     * Get dahira
     *
     * @return \Edahira\DahiraBundle\Entity\Dahira 
     */
    public function getDahira()
    {
        return $this->dahira;
    }
}
