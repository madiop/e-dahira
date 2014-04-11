<?php

namespace Edahira\DahiraBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cotisations
 */
class Cotisations
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
     * @ORM\ManyToOne(targetEntity="\Edahira\DahiraBundle\Entity\Caisses")
     */
    private $caisse;


    /**
     * @ORM\ManyToOne(targetEntity="\Edahira\DahiraBundle\Entity\Membres")
     */
    private $membre;


    /**
     * Constructor.
     *
     * @return void
     */
    public function __construct()
    {
        $this->etat = false;
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
     * @return Cotisations
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
     * @return Cotisations
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
     * Set caisse
     *
     * @param \Edahira\DahiraBundle\Entity\Caisses $caisse
     * @return Cotisations
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
     * Set membre
     *
     * @param \Edahira\DahiraBundle\Entity\Membres $membre
     * @return Cotisations
     */
    public function setMembre(\Edahira\DahiraBundle\Entity\Membres $membre = null)
    {
        $this->membre = $membre;

        return $this;
    }

    /**
     * Get membre
     *
     * @return \Edahira\DahiraBundle\Entity\Membre 
     */
    public function getMembre()
    {
        return $this->membre;
    }
    /**
     * @var \Edahira\DahiraBundle\Entity\e
     */
    private $type;


    /**
     * Set type
     *
     * @param \Edahira\DahiraBundle\Entity\e $type
     * @return Cotisations
     */
    public function setType(\Edahira\DahiraBundle\Entity\e $type = null)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return \Edahira\DahiraBundle\Entity\e 
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * @var boolean
     */
    private $etat;


    /**
     * Set etat
     *
     * @param boolean $etat
     * @return Cotisations
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return boolean 
     */
    public function getEtat()
    {
        return $this->etat;
    }
    /**
     * @var \Edahira\DahiraBundle\Entity\Dahira
     */
    private $dahira;


    /**
     * Set dahira
     *
     * @param \Edahira\DahiraBundle\Entity\Dahira $dahira
     * @return Cotisations
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
    /**
     * @var \Edahira\DahiraBundle\Entity\Evenement
     */
    private $evenement;


    /**
     * Set evenement
     *
     * @param \Edahira\DahiraBundle\Entity\Evenement $evenement
     * @return Cotisations
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
}
