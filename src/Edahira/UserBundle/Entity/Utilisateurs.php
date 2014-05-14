<?php

namespace Edahira\UserBundle\Entity;

use FOS\UserBundle\Model\User as BasUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * Utilisateurs
 */
class Utilisateurs extends BasUser
{
    /**
     * @var integer
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $surname;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    protected $dahiras;


    /**
     * @var \Edahira\DahiraBundle\Entity\Dahira
     */
    protected $activeDahira;

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->dahiras = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set name
     *
     * @param string $name
     * @return Utilisateurs
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set surname
     *
     * @param string $surname
     * @return Utilisateurs
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get surname
     *
     * @return string 
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Get surname.' '.surname
     *
     * @return string 
     */
    public function getAffichage()
    {
        return ucfirst($this->surname)." ".strtoupper($this->name);
    }

    /**
     * Set activeDahira
     *
     * @param \Edahira\DahiraBundle\Entity\Dahira $activeDahira
     * @return Utilisateurs
     */
    public function setActiveDahira($activeDahira)
    {
        $this->activeDahira = $activeDahira;

        return $this;
    }

    /**
     * Get activeDahira
     *
     * @return \Edahira\DahiraBundle\Entity\Dahira 
     */
    public function getActiveDahira()
    {
        return $this->activeDahira;
    }

    /**
     * Add dahiras
     *
     * @param \Edahira\DahiraBundle\Entity\Dahira $dahiras
     * @return Utilisateurs
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
}
