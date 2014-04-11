<?php

namespace Edahira\DahiraBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
use Edahira\DahiraBundle\Entity\Caisses;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Typecaisses
 */
class Typecaisses
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
     * @var string
     */
    private $description;

    /**
     * @var boolean
     */
    private $etat;

    /**
     * @ORM\OneToMany(targetEntity="Caisses", mappedBy="typeCaisse")
     */
    private $caisses;
	
	/**
     * Constructor.
     *
     * @return void
     */
    public function __construct()
    {
		$this->etat = true;
        $this->caisses = new ArrayCollection();
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
     * @return Typecaisses
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
     * Set description
     *
     * @param string $description
     * @return Typecaisses
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
     * Set etat
     *
     * @param integer $etat
     * @return Typecaisses
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return integer 
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Add caisses
     *
     * @param \Edahira\DahiraBundle\Entity\Caisses $caisses
     * @return Typecaisses
     */
    public function addCaiss(\Edahira\DahiraBundle\Entity\Caisses $caisses)
    {
        $this->caisses[] = $caisses;

        return $this;
    }

    /**
     * Remove caisses
     *
     * @param \Edahira\DahiraBundle\Entity\Caisses $caisses
     */
    public function removeCaiss(\Edahira\DahiraBundle\Entity\Caisses $caisses)
    {
        $this->caisses->removeElement($caisses);
    }

    /**
     * Get caisses
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCaisses()
    {
        return $this->caisses;
    }
}
