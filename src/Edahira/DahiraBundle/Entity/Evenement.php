<?php

namespace Edahira\DahiraBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evenement
 */
class Evenement
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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $membre;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $cotisations;

    /**
     * @var \Edahira\DahiraBundle\Entity\Typeevenement
     */
    private $typeevenement;
    
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $dons;

    /**
     * @var \Edahira\DahiraBundle\Entity\Dahira
     */
    private $dahira;

    /**
     * @param \Edahira\DahiraBundle\Entity\Dahira $dahira
     */
    public function __construct(\Edahira\DahiraBundle\Entity\Dahira $dahira)
    {
        $this->membre = new \Doctrine\Common\Collections\ArrayCollection();
        $this->cotisations = new \Doctrine\Common\Collections\ArrayCollection();
        $this->dons = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Evenement
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
     * Add membre
     *
     * @param \Edahira\DahiraBundle\Entity\Membres $membre
     * @return Evenement
     */
    public function addMembre(\Edahira\DahiraBundle\Entity\Membres $membre)
    {
        $this->membre[] = $membre;

        return $this;
    }

    /**
     * Remove membre
     *
     * @param \Edahira\DahiraBundle\Entity\Membres $membre
     */
    public function removeMembre(\Edahira\DahiraBundle\Entity\Membres $membre)
    {
        $this->membre->removeElement($membre);
    }

    /**
     * Get membre
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMembre()
    {
        return $this->membre;
    }

    /**
     * Add cotisations
     *
     * @param \Edahira\DahiraBundle\Entity\Cotisations $cotisations
     * @return Evenement
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

    /**
     * Set typeevenement
     *
     * @param \Edahira\DahiraBundle\Entity\Typeevenement $typeevenement
     * @return Evenement
     */
    public function setTypeevenement(\Edahira\DahiraBundle\Entity\Typeevenement $typeevenement = null)
    {
        $this->typeevenement = $typeevenement;

        return $this;
    }

    /**
     * Get typeevenement
     *
     * @return \Edahira\DahiraBundle\Entity\Typeevenement 
     */
    public function getTypeevenement()
    {
        return $this->typeevenement;
    }

    /**
     * Set membre
     *
     * @param \Edahira\DahiraBundle\Entity\Membres $membre
     * @return Evenement
     */
    public function setMembre(\Edahira\DahiraBundle\Entity\Membres $membre = null)
    {
        $this->membre = $membre;

        return $this;
    }

    /**
     * Set dahira
     *
     * @param \Edahira\DahiraBundle\Entity\Dahira $dahira
     * @return Evenement
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
     * @return Evenement
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
