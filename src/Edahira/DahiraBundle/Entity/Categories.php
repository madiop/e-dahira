<?php

namespace Edahira\DahiraBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categories
 */
class Categories
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
    private $membres;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $charges;

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
        $this->membres = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nom
     *
     * @param string $nom
     * @return Categories
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
     * Add membres
     *
     * @param \Edahira\DahiraBundle\Entity\Membres $membres
     * @return Categories
     */
    public function addMembre(\Edahira\DahiraBundle\Entity\Membres $membres)
    {
        $this->membres[] = $membres;

        return $this;
    }

    /**
     * Remove membres
     *
     * @param \Edahira\DahiraBundle\Entity\Membres $membres
     */
    public function removeMembre(\Edahira\DahiraBundle\Entity\Membres $membres)
    {
        $this->membres->removeElement($membres);
    }

    /**
     * Get membres
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMembres()
    {
        return $this->membres;
    }

    /**
     * Add charges
     *
     * @param \Edahira\DahiraBundle\Entity\MontantCharges $charges
     * @return Categories
     */
    public function addCharge(\Edahira\DahiraBundle\Entity\MontantCharges $charges)
    {
        $this->charges[] = $charges;

        return $this;
    }

    /**
     * Remove charges
     *
     * @param \Edahira\DahiraBundle\Entity\MontantCharges $charges
     */
    public function removeCharge(\Edahira\DahiraBundle\Entity\MontantCharges $charges)
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
     * Add cotisations
     *
     * @param \Edahira\DahiraBundle\Entity\MontantCotisations $cotisations
     * @return Categories
     */
    public function addCotisation(\Edahira\DahiraBundle\Entity\MontantCotisations $cotisations)
    {
        $this->cotisations[] = $cotisations;

        return $this;
    }

    /**
     * Remove cotisations
     *
     * @param \Edahira\DahiraBundle\Entity\MontantCotisations $cotisations
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
     * @return Categories
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
