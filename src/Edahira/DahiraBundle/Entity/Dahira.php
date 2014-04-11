<?php

namespace Edahira\DahiraBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dahira
 */
class Dahira
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
     * @return Dahira
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
     * @var \Edahira\DahiraBundle\Entity\Membres
     */
    private $membre;


    /**
     * Set membre
     *
     * @param \Edahira\DahiraBundle\Entity\Membres $membre
     * @return Dahira
     */
    public function setMembre(\Edahira\DahiraBundle\Entity\Membres $membre = null)
    {
        $this->membre = $membre;

        return $this;
    }

    /**
     * Get membre
     *
     * @return \Edahira\DahiraBundle\Entity\Membres 
     */
    public function getMembre()
    {
        return $this->membre;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $cotisations;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->cotisations = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add cotisations
     *
     * @param \Edahira\DahiraBundle\Entity\Cotisations $cotisations
     * @return Dahira
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
