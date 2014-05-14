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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $evenement;


    /**
     * @var integer
     */
    private $periode;

    /**
     * @var string
     */
    private $jourdesemaine;

    /**
     * @var \Edahira\DahiraBundle\Entity\Caisses
     */
    private $caisse;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $cotisations;

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
        $this->evenement = new ArrayCollection();
        $this->cotisations = new ArrayCollection();
        $this->dahira = $dahira;
    }

    /**
     * Set id
     *
     * @param integer $id
     * @return Typeevenement
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

    /**
     * Add cotisations
     *
     * @param \Edahira\DahiraBundle\Entity\MontantsCotisations $cotisations
     * @return Typeevenement
     */
    public function addCotisation(\Edahira\DahiraBundle\Entity\MontantCotisations $cotisations)
    {
        $this->cotisations[] = $cotisations;

        return $this;
    }

    /**
     * Remove cotisations
     *
     * @param \Edahira\DahiraBundle\Entity\MontantsCotisations $cotisations
     */
    public function removeCotisation(\Edahira\DahiraBundle\Entity\MontantCotisations $cotisations)
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

    /**
     * Set dahira
     *
     * @param \Edahira\DahiraBundle\Entity\Dahira $dahira
     * @return Typeevenement
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
