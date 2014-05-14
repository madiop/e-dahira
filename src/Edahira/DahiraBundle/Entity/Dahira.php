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
     * @var string
     */
    private $nom;
    
    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $president;

    /**
     * @var string
     */
    private $telephone;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $siege;

    /**
     * @var string
     */
    private $numcompte;

    /**
     * @var string
     */
    private $datecreation;
    
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $caisses;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $categories;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $charges;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $evenement;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $membres;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $typeevenement;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $depenses;
    
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $utilisateurs;


    /**
     * Constructor
     */
    public function __construct()
    {
        $datecreation = new \DateTime();
        $this->caisses = new \Doctrine\Common\Collections\ArrayCollection();
        $this->categories = new \Doctrine\Common\Collections\ArrayCollection();
        $this->charges = new \Doctrine\Common\Collections\ArrayCollection();
        $this->evenement = new \Doctrine\Common\Collections\ArrayCollection();
        $this->membres = new \Doctrine\Common\Collections\ArrayCollection();
        $this->typeevenement = new \Doctrine\Common\Collections\ArrayCollection();
        $this->depenses = new \Doctrine\Common\Collections\ArrayCollection();
        $this->utilisateurs = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Dahira
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
     * Set president
     *
     * @param string $president
     * @return Dahira
     */
    public function setPresident($president)
    {
        $this->president = $president;

        return $this;
    }

    /**
     * Get president
     *
     * @return string 
     */
    public function getPresident()
    {
        return $this->president;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     * @return Dahira
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Dahira
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set siege
     *
     * @param string $siege
     * @return Dahira
     */
    public function setSiege($siege)
    {
        $this->siege = $siege;

        return $this;
    }

    /**
     * Get siege
     *
     * @return string 
     */
    public function getSiege()
    {
        return $this->siege;
    }

    /**
     * Set numcompte
     *
     * @param string $numcompte
     * @return Dahira
     */
    public function setNumcompte($numcompte)
    {
        $this->numcompte = $numcompte;

        return $this;
    }

    /**
     * Get numcompte
     *
     * @return string 
     */
    public function getNumcompte()
    {
        return $this->numcompte;
    }


    /**
     * Add caisses
     *
     * @param \Edahira\DahiraBundle\Entity\Caisses $caisses
     * @return Dahira
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

    /**
     * Add categories
     *
     * @param \Edahira\DahiraBundle\Entity\Categories $categories
     * @return Dahira
     */
    public function addCategory(\Edahira\DahiraBundle\Entity\Categories $categories)
    {
        $this->categories[] = $categories;

        return $this;
    }

    /**
     * Remove categories
     *
     * @param \Edahira\DahiraBundle\Entity\Categories $categories
     */
    public function removeCategory(\Edahira\DahiraBundle\Entity\Categories $categories)
    {
        $this->categories->removeElement($categories);
    }

    /**
     * Get categories
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Add charges
     *
     * @param \Edahira\DahiraBundle\Entity\Charges $charges
     * @return Dahira
     */
    public function addCharge(\Edahira\DahiraBundle\Entity\Charges $charges)
    {
        $this->charges[] = $charges;

        return $this;
    }

    /**
     * Remove charges
     *
     * @param \Edahira\DahiraBundle\Entity\Charges $charges
     */
    public function removeCharge(\Edahira\DahiraBundle\Entity\Charges $charges)
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
     * Add evenement
     *
     * @param \Edahira\DahiraBundle\Entity\Evenement $evenement
     * @return Dahira
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
     * Add membres
     *
     * @param \Edahira\DahiraBundle\Entity\Membres $membres
     * @return Dahira
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
     * Add typeevenement
     *
     * @param \Edahira\DahiraBundle\Entity\Typeevenement $typeevenement
     * @return Dahira
     */
    public function addTypeevenement(\Edahira\DahiraBundle\Entity\Typeevenement $typeevenement)
    {
        $this->typeevenement[] = $typeevenement;

        return $this;
    }

    /**
     * Remove typeevenement
     *
     * @param \Edahira\DahiraBundle\Entity\Typeevenement $typeevenement
     */
    public function removeTypeevenement(\Edahira\DahiraBundle\Entity\Typeevenement $typeevenement)
    {
        $this->typeevenement->removeElement($typeevenement);
    }

    /**
     * Get typeevenement
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTypeevenement()
    {
        return $this->typeevenement;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Dahira
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
     * Set datecreation
     *
     * @param string $datecreation
     * @return Dahira
     */
    public function setDatecreation($datecreation)
    {
        $this->datecreation = $datecreation;

        return $this;
    }

    /**
     * Get datecreation
     *
     * @return string 
     */
    public function getDatecreation()
    {
        return $this->datecreation;
    }

    /**
     * Add depenses
     *
     * @param \Edahira\DahiraBundle\Entity\Depenses $depenses
     * @return Dahira
     */
    public function addDepense(\Edahira\DahiraBundle\Entity\Depenses $depenses)
    {
        $this->depenses[] = $depenses;

        return $this;
    }

    /**
     * Remove depenses
     *
     * @param \Edahira\DahiraBundle\Entity\Depenses $depenses
     */
    public function removeDepense(\Edahira\DahiraBundle\Entity\Depenses $depenses)
    {
        $this->depenses->removeElement($depenses);
    }

    /**
     * Get depenses
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDepenses()
    {
        return $this->depenses;
    }

    /**
     * Add utilisateurs
     *
     * @param \Edahira\UserBundle\Entity\Utilisateurs $utilisateurs
     * @return Dahira
     */
    public function addUtilisateur(\Edahira\UserBundle\Entity\Utilisateurs $utilisateurs)
    {
        $this->utilisateurs[] = $utilisateurs;

        return $this;
    }

    /**
     * Remove utilisateurs
     *
     * @param \Edahira\UserBundle\Entity\Utilisateurs $utilisateurs
     */
    public function removeUtilisateur(\Edahira\UserBundle\Entity\Utilisateurs $utilisateurs)
    {
        $this->utilisateurs->removeElement($utilisateurs);
    }

    /**
     * Get utilisateurs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUtilisateurs()
    {
        return $this->utilisateurs;
    }
}
