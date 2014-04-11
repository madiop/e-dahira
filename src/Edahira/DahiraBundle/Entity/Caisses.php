<?php

namespace Edahira\DahiraBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Edahira\DahiraBundle\Entity\Typecaisses;

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
     * @var integer
     */
    private $cotisation;
    
    /**
     * @ORM\ManyToOne(targetEntity="Typecaisses", inversedBy="caisses", cascade={"persist"})
     * @ORM\JoinColumn(name="typecaisse_id", referencedColumnName="id", nullable=false)
     */
    private $typeCaisse;


	/**
     * @var \DateTime
     */
    private $jour;
	
	/**
     * @var Boolean
     */
    private $etat;

    /**
     * Constructor.
     *
     * @return void
     */
    public function __construct()
    {
        $this->etat = true;
        $this->jour = new \DateTime();
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
     * Set cotisation
     *
     * @param integer $cotisation
     * @return Caisses
     */
    public function setCotisation($cotisation)
    {
        $this->cotisation = $cotisation;

        return $this;
    }

    /**
     * Get cotisation
     *
     * @return integer 
     */
    public function getCotisation()
    {
        return $this->cotisation;
    }

    /**
     * Set typeCaisse
     *
     * @param \stdClass $typeCaisse
     * @return Caisses
     */
    public function setTypeCaisse($typeCaisse)
    {
        $this->typeCaisse = $typeCaisse;

        return $this;
    }

    /**
     * Get typeCaisse
     *
     * @return \stdClass 
     */
    public function getTypeCaisse()
    {
        return $this->typeCaisse;
    }
    

    /**
     * Set jour
     *
     * @param \DateTime $jour
     * @return Caisses
     */
    public function setJour($jour)
    {
        $this->jour = $jour;

        return $this;
    }

    /**
     * Get jour
     *
     * @return \DateTime 
     */
    public function getJour()
    {
        return $this->jour;
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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $cotisations;


    /**
     * Add cotisations
     *
     * @param \Edahira\DahiraBundle\Entity\Cotisations $cotisations
     * @return Caisses
     */
    public function addCotisation(\Edahira\DahiraBundle\Entity\Cotisations $cotisations)
    {
        $this->cotisations[] = $cotisations;

        return $this;
    }

    /**
     * Remove cotisations
     *
     * @param \Edahira\DahiraBundle\Entity\Cotisations $cotisations
     */
    public function removeCotisation(\Edahira\DahiraBundle\Entity\Cotisations $cotisations)
    {
        $this->cotisations->removeElement($cotisations);
    }

    /**
     * Get cotisations
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCotisations()
    {
        return $this->cotisations;
    }
}
