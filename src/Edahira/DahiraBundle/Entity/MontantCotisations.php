<?php

namespace Edahira\DahiraBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MontantCotisation
 */
class MontantCotisations
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $montant;

    /**
     * @var \Edahira\DahiraBundle\Entity\Typeevenement
     */
    private $typeevenement;

    /**
     * @var \Edahira\DahiraBundle\Entity\Categories
     */
    private $categorie;


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
     * Set montant
     *
     * @param integer $montant
     * @return MontantCotisation
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return integer 
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set typeevenement
     *
     * @param \Edahira\DahiraBundle\Entity\Typeevenement $typeevenement
     * @return MontantCotisations
     */
    public function setTypeevenement(\Edahira\DahiraBundle\Entity\Typeevenement $typeevenement)
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
     * Set categorie
     *
     * @param \Edahira\DahiraBundle\Entity\Categories $categorie
     * @return MontantCotisations
     */
    public function setCategorie(\Edahira\DahiraBundle\Entity\Categories $categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return \Edahira\DahiraBundle\Entity\Categories 
     */
    public function getCategorie()
    {
        return $this->categorie;
    }
}
