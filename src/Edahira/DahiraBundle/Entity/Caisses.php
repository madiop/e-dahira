<?php

namespace Edahira\DahiraBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Caisses
 */
class Caisses
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nom;
	
	/**
     * @var Boolean
     */
    private $etat;

    /**
     * @var string
     */
    private $description;
    
    /**
     * @var integer
     */
    private $fond;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $depenses;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $typeevenement;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $charges;

    /**
     * @var \Edahira\DahiraBundle\Entity\Dahira
     */
    private $dahira;

    /**
     * Constructor.
     *
     * @return void
     */
    public function __construct(\Edahira\DahiraBundle\Entity\Dahira $dahira)
    {
        $this->etat = true;
        $this->fond = 0;
        $this->dahira = $dahira;
        $this->typeevenement = new \Doctrine\Common\Collections\ArrayCollection();
        $this->charges = new \Doctrine\Common\Collections\ArrayCollection();
        $this->depenses = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set id
     *
     * @return integer 
     */
    public function setId($id)
    {
        $this->id = $id;

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
     * Set nom
     *
     * @param string $nom
     * @return Caisses
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

  
    /**
     * Set etat
     *
     * @param boolean $etat
     * @return Caisses
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
     * Set description
     *
     * @param string $description
     * @return Caisses
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set fond
     *
     * @param integer $fond
     * @return Caisses
     */
    public function setFond($fond)
    {
        $this->fond = $fond;

        return $this;
    }

    /**
     * Get fond
     *
     * @return integer 
     */
    public function getFond()
    {
        return $this->fond;
    }

    /**
     * Add typeevenement
     *
     * @param \Edahira\DahiraBundle\Entity\Typeevenement $typeevenement
     * @return Caisses
     */
    public function addTypeevenement(\Edahira\DahiraBundle\Entity\Typeevenement $typeevenement)
    {
        $this->typeevenement[] = $typeevenement;

        return $this;
    }

    /**
     * Remove typeevenement
     *
     * @param \Edahira\DahiraBundle\Entity\Typeevenement $typeevenement
     */
    public function removeTypeevenement(\Edahira\DahiraBundle\Entity\Typeevenement $typeevenement)
    {
        $this->typeevenement->removeElement($typeevenement);
    }

    /**
     * Get typeevenement
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTypeevenement()
    {
        return $this->typeevenement;
    }


    /**
     * Add charges
     *
     * @param \Edahira\DahiraBundle\Entity\Charges $charges
     * @return Caisses
     */
    public function addCharge(\Edahira\DahiraBundle\Entity\Charges $charges)
    {
        $this->charges[] = $charges;

        return $this;
    }

    /**
     * Remove charges
     *
     * @param \Edahira\DahiraBundle\Entity\Charges $charges
     */
    public function removeCharge(\Edahira\DahiraBundle\Entity\Charges $charges)
    {
        $this->charges->removeElement($charges);
    }

    /**
     * Get charges
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCharges()
    {
        return $this->charges;
    }


    /**
     * Add depenses
     *
     * @param \Edahira\DahiraBundle\Entity\Depenses $depenses
     * @return Caisses
     */
    public function addDepense(\Edahira\DahiraBundle\Entity\Depenses $depenses)
    {
        $this->depenses[] = $depenses;

        return $this;
    }

    /**
     * Remove depenses
     *
     * @param \Edahira\DahiraBundle\Entity\Depenses $depenses
     */
    public function removeDepense(\Edahira\DahiraBundle\Entity\Depenses $depenses)
    {
        $this->depenses->removeElement($depenses);
    }

    /**
     * Get depenses
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDepenses()
    {
        return $this->depenses;
    }

    /**
     * Set dahira
     *
     * @param \Edahira\DahiraBundle\Entity\Dahira $dahira
     * @return Caisses
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
