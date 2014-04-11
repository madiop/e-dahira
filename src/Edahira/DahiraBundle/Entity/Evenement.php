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
     * Constructor
     */
    public function __construct()
    {
        $this->membre = new \Doctrine\Common\Collections\ArrayCollection();
        $this->cotisations = new \Doctrine\Common\Collections\ArrayCollection();
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
}
