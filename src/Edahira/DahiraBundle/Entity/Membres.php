<?php

namespace Edahira\DahiraBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Membres
 */
class Membres
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
	 * @Assert\Length(
     *      min = "2",
     *      minMessage = "Votre prénom doit faire au moins {{ limit }} caractères")
     */
    private $prenom;

    /**
     * @var string
	 * @Assert\Length(
     *      min = "2",
     *      minMessage = "Votre nom doit faire au moins {{ limit }} caractères")
     */
    private $nom;

    /**
     * @var string
     */
    private $adresse;

    /**
     * @var string
	 * @Assert\Email(
     *     message = "'{{ value }}' n'est pas un email valide.",
     *     checkMX = false)
     */
    private $email;

    /**
     * @var string
     */
    private $telephone1;

    /**
     * @var string
	 */
    private $telephone2;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $dahiras;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $cotisations;

    /**
     * @var boolean
     */
    private $etat;

    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->cotisations = new \Doctrine\Common\Collections\ArrayCollection();
        $this->dahiras = new \Doctrine\Common\Collections\ArrayCollection();
        $this->etat = true;
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
     * Set prenom
     *
     * @param string $prenom
     * @return Membres
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Membres
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
     * Get prenom nom
     *
     * @return string 
     */
    public function getAffichage()
    {
        return $this->prenom.' '.$this->nom;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Membres
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Membres
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
     * Set telephone1
     *
     * @param string $telephone1
     * @return Membres
     */
    public function setTelephone1($telephone1)
    {
        $this->telephone1 = $telephone1;

        return $this;
    }

    /**
     * Get telephone1
     *
     * @return string 
     */
    public function getTelephone1()
    {
        return $this->telephone1;
    }

    /**
     * Set telephone2
     *
     * @param string $telephone2
     * @return Membres
     */
    public function setTelephone2($telephone2)
    {
        $this->telephone2 = $telephone2;

        return $this;
    }

    /**
     * Get telephone2
     *
     * @return string 
     */
    public function getTelephone2()
    {
        return $this->telephone2;
    }

    /**
     * Set etat
     *
     * @param boolean $etat
     * @return Membres
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
     * Add cotisations
     *
     * @param \Edahira\DahiraBundle\Entity\Cotisations $cotisations
     * @return Membres
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
     * Add dahiras
     *
     * @param \Edahira\DahiraBundle\Entity\Dahira $dahiras
     * @return Membres
     */
    public function addDahira(\Edahira\DahiraBundle\Entity\Dahira $dahiras)
    {
        $this->dahiras[] = $dahiras;

        return $this;
    }

    /**
     * Remove dahiras
     *
     * @param \Edahira\DahiraBundle\Entity\Dahira $dahiras
     */
    public function removeDahira(\Edahira\DahiraBundle\Entity\Dahira $dahiras)
    {
        $this->dahiras->removeElement($dahiras);
    }

    /**
     * Get dahiras
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDahiras()
    {
        return $this->dahiras;
    }

    /**
     * Set dahiras
     *
     * @param \Edahira\DahiraBundle\Entity\Evenement $dahiras
     * @return Membres
     */
    public function setDahiras(\Edahira\DahiraBundle\Entity\Evenement $dahiras = null)
    {
        $this->dahiras = $dahiras;

        return $this;
    }
}
