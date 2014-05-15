<?php

namespace Proxies\__CG__\Edahira\DahiraBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Caisses extends \Edahira\DahiraBundle\Entity\Caisses implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', 'id', 'nom', 'etat', 'description', 'fond', 'depenses', 'typeevenement', 'charges', 'dahira');
        }

        return array('__isInitialized__', 'id', 'nom', 'etat', 'description', 'fond', 'depenses', 'typeevenement', 'charges', 'dahira');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Caisses $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function setId($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', array($id));

        return parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setNom($nom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNom', array($nom));

        return parent::setNom($nom);
    }

    /**
     * {@inheritDoc}
     */
    public function getNom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNom', array());

        return parent::getNom();
    }

    /**
     * {@inheritDoc}
     */
    public function setEtat($etat)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEtat', array($etat));

        return parent::setEtat($etat);
    }

    /**
     * {@inheritDoc}
     */
    public function getEtat()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEtat', array());

        return parent::getEtat();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', array($description));

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', array());

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setFond($fond)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFond', array($fond));

        return parent::setFond($fond);
    }

    /**
     * {@inheritDoc}
     */
    public function getFond()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFond', array());

        return parent::getFond();
    }

    /**
     * {@inheritDoc}
     */
    public function addTypeevenement(\Edahira\DahiraBundle\Entity\Typeevenement $typeevenement)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addTypeevenement', array($typeevenement));

        return parent::addTypeevenement($typeevenement);
    }

    /**
     * {@inheritDoc}
     */
    public function removeTypeevenement(\Edahira\DahiraBundle\Entity\Typeevenement $typeevenement)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeTypeevenement', array($typeevenement));

        return parent::removeTypeevenement($typeevenement);
    }

    /**
     * {@inheritDoc}
     */
    public function getTypeevenement()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTypeevenement', array());

        return parent::getTypeevenement();
    }

    /**
     * {@inheritDoc}
     */
    public function addCharge(\Edahira\DahiraBundle\Entity\Charges $charges)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCharge', array($charges));

        return parent::addCharge($charges);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCharge(\Edahira\DahiraBundle\Entity\Charges $charges)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCharge', array($charges));

        return parent::removeCharge($charges);
    }

    /**
     * {@inheritDoc}
     */
    public function getCharges()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCharges', array());

        return parent::getCharges();
    }

    /**
     * {@inheritDoc}
     */
    public function addDepense(\Edahira\DahiraBundle\Entity\Depenses $depenses)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addDepense', array($depenses));

        return parent::addDepense($depenses);
    }

    /**
     * {@inheritDoc}
     */
    public function removeDepense(\Edahira\DahiraBundle\Entity\Depenses $depenses)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeDepense', array($depenses));

        return parent::removeDepense($depenses);
    }

    /**
     * {@inheritDoc}
     */
    public function getDepenses()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDepenses', array());

        return parent::getDepenses();
    }

    /**
     * {@inheritDoc}
     */
    public function setDahira(\Edahira\DahiraBundle\Entity\Dahira $dahira = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDahira', array($dahira));

        return parent::setDahira($dahira);
    }

    /**
     * {@inheritDoc}
     */
    public function getDahira()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDahira', array());

        return parent::getDahira();
    }

}