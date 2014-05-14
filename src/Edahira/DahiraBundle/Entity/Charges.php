<?php

namespace Edahira\DahiraBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Charges
 */
class Charges
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $objet;

    /**
     * @var \DateTime
     */
    private $echeance;
    
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $montants;
    
    /**
     * @var boolean
     */
    private $etat;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $versements;

    /**
     * @var \Edahira\DahiraBundle\Entity\Caisses
     */
    private $caisse;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $dons;

    /**
     * @var \Edahira\DahiraBundle\Entity\Dahira
     */
    private $dahira;

    /**
     * Constructor.
     * @param \Edahira\DahiraBundle\Entity\Dahira $dahira
     * @return void
     */
    public function __construct(\Edahira\DahiraBundle\Entity\Dahira $dahira)
    {
        $this->echeance = new \DateTime();
        $this->montants = new \Doctrine\Common\Collections\ArrayCollection();
        $this->versements = new \Doctrine\Common\Collections\ArrayCollection();
        $this->dons = new \Doctrine\Common\Collections\ArrayCollection();
        $this->dahira = $dahira;
    }

    /**
     * Set id
     *
     * @param integer $id
     * @return Charges
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
     * Set objet
     *
     * @param string $objet
     * @return Charges
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
     * Set echeance
     *
     * @param \DateTime $echeance
     * @return Charges
     */
    public function setEcheance($echeance)
    {
        $this->echeance = $echeance;

        return $this;
    }

    /**
     * Get echeance
     *
     * @return \DateTime 
     */
    public function getEcheance()
    {
        return $this->echeance;
    }

    /**
     * Add montants
     *
     * @param \Edahira\DahiraBundle\Entity\MontantCharges $montants
     * @return Charges
     */
    public function addMontant(\Edahira\DahiraBundle\Entity\MontantCharges $montants)
    {
        $this->montants[] = $montants;

        return $this;
    }

    /**
     * Remove montants
     *
     * @param \Edahira\DahiraBundle\Entity\MontantCharges $montants
     */
    public function removeMontant(\Edahira\DahiraBundle\Entity\MontantCharges $montants)
    {
        $this->montants->removeElement($montants);
    }

    /**
     * Get montants
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMontants()
    {
        return $this->montants;
    }

    /**
     * Set caisse
     *
     * @param \Edahira\DahiraBundle\Entity\Caisses $caisse
     * @return Charges
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
     * Add versements
     *
     * @param \Edahira\DahiraBundle\Entity\Versements $versements
     * @return Charges
     */
    public function addVersement(\Edahira\DahiraBundle\Entity\Versements $versements)
    {
        $this->versements[] = $versements;

        return $this;
    }

    /**
     * Remove versements
     *
     * @param \Edahira\DahiraBundle\Entity\Versements $versements
     */
    public function removeVersement(\Edahira\DahiraBundle\Entity\Versements $versements)
    {
        $this->versements->removeElement($versements);
    }

    /**
     * Get versements
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getVersements()
    {
        return $this->versements;
    }

    /**
     * Set etat
     *
     * @param boolean $etat
     * @return Charges
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
     * Set dahira
     *
     * @param \Edahira\DahiraBundle\Entity\Dahira $dahira
     * @return Charges
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
     * Add dons
     *
     * @param \Edahira\DahiraBundle\Entity\Dons $dons
     * @return Charges
     */
    public function addDon(\Edahira\DahiraBundle\Entity\Dons $dons)
    {
        $this->dons[] = $dons;

        return $this;
    }

    /**
     * Remove dons
     *
     * @param \Edahira\DahiraBundle\Entity\Dons $dons
     */
    public function removeDon(\Edahira\DahiraBundle\Entity\Dons $dons)
    {
        $this->dons->removeElement($dons);
    }

    /**
     * Get dons
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDons()
    {
        return $this->dons;
    }
}
