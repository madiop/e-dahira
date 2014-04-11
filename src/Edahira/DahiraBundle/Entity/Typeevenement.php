<?php

namespace Edahira\DahiraBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Typeevenement
 */
class Typeevenement
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
     * @return Typeevenement
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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $evenement;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->evenement = new ArrayCollection();
    }

    /**
     * Add evenement
     *
     * @param \Edahira\DahiraBundle\Entity\Evenement $evenement
     * @return Typeevenement
     */
    public function addEvenement(\Edahira\DahiraBundle\Entity\Evenement $evenement)
    {
        $this->evenement[] = $evenement;

        return $this;
    }

    /**
     * Remove evenement
     *
     * @param \Edahira\DahiraBundle\Entity\Evenement $evenement
     */
    public function removeEvenement(\Edahira\DahiraBundle\Entity\Evenement $evenement)
    {
        $this->evenement->removeElement($evenement);
    }

    /**
     * Get evenement
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEvenement()
    {
        return $this->evenement;
    }

    /**
     * @var integer
     */
    private $periode;

    /**
     * @var string
     * @ORM\JoinColumn(nullable=true)
     */
    private $jourdesemaine;


    /**
     * Set periode
     *
     * @param integer $periode
     * @return Typeevenement
     */
    public function setPeriode($periode)
    {
        $this->periode = $periode;

        return $this;
    }

    /**
     * Get periode
     *
     * @return integer 
     */
    public function getPeriode()
    {
        return $this->periode;
    }

    /**
     * Set jourdesemaine
     *
     * @param string $jourdesemaine
     * @return Typeevenement
     */
    public function setJourdesemaine($jourdesemaine)
    {
        $this->jourdesemaine = $jourdesemaine;

        return $this;
    }

    /**
     * Get jourdesemaine
     *
     * @return string 
     */
    public function getJourdesemaine()
    {
        return $this->jourdesemaine;
    }
    
    /**
     * @var integer
     */
    private $cotisation;


    /**
     * Set cotisation
     *
     * @param integer $cotisation
     * @return Typeevenement
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
     * @var \Edahira\DahiraBundle\Entity\Caisses
     */
    private $caisse;


    /**
     * Set caisse
     *
     * @param \Edahira\DahiraBundle\Entity\Caisses $caisse
     * @return Typeevenement
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
}
