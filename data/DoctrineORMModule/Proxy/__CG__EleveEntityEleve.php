<?php

namespace DoctrineORMModule\Proxy\__CG__\Eleve\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Eleve extends \Eleve\Entity\Eleve implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = [];



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
            return ['__isInitialized__', 'id', 'nom_eleve', 'prenom_eleve', 'date_naissance', 'lieu_naissance', 'sexe', 'code_eleve', 'status', 'e_mail', 'photo', 'contacts', 'classeeleve'];
        }

        return ['__isInitialized__', 'id', 'nom_eleve', 'prenom_eleve', 'date_naissance', 'lieu_naissance', 'sexe', 'code_eleve', 'status', 'e_mail', 'photo', 'contacts', 'classeeleve'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Eleve $proxy) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
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
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setId($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', [$id]);

        return parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getNomEleve()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomEleve', []);

        return parent::getNomEleve();
    }

    /**
     * {@inheritDoc}
     */
    public function setNomEleve($nom_eleve)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomEleve', [$nom_eleve]);

        return parent::setNomEleve($nom_eleve);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrenomEleve()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrenomEleve', []);

        return parent::getPrenomEleve();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrenomEleve($prenom_eleve)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrenomEleve', [$prenom_eleve]);

        return parent::setPrenomEleve($prenom_eleve);
    }

    /**
     * {@inheritDoc}
     */
    public function setDateNaissance($date_naissance)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateNaissance', [$date_naissance]);

        return parent::setDateNaissance($date_naissance);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateNaissance()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateNaissance', []);

        return parent::getDateNaissance();
    }

    /**
     * {@inheritDoc}
     */
    public function setLieuNaissance($lieu_naissance)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLieuNaissance', [$lieu_naissance]);

        return parent::setLieuNaissance($lieu_naissance);
    }

    /**
     * {@inheritDoc}
     */
    public function getLieuNaissance()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLieuNaissance', []);

        return parent::getLieuNaissance();
    }

    /**
     * {@inheritDoc}
     */
    public function getSexe()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSexe', []);

        return parent::getSexe();
    }

    /**
     * {@inheritDoc}
     */
    public function getSexeAsString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSexeAsString', []);

        return parent::getSexeAsString();
    }

    /**
     * {@inheritDoc}
     */
    public function setSexe($sexe)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSexe', [$sexe]);

        return parent::setSexe($sexe);
    }

    /**
     * {@inheritDoc}
     */
    public function setCodeEleve($code_eleve)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCodeEleve', [$code_eleve]);

        return parent::setCodeEleve($code_eleve);
    }

    /**
     * {@inheritDoc}
     */
    public function getCodeEleve()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodeEleve', []);

        return parent::getCodeEleve();
    }

    /**
     * {@inheritDoc}
     */
    public function getStatus()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatus', []);

        return parent::getStatus();
    }

    /**
     * {@inheritDoc}
     */
    public function getStatusAsString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatusAsString', []);

        return parent::getStatusAsString();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatus($status)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatus', [$status]);

        return parent::setStatus($status);
    }

    /**
     * {@inheritDoc}
     */
    public function setEMail($e_mail)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEMail', [$e_mail]);

        return parent::setEMail($e_mail);
    }

    /**
     * {@inheritDoc}
     */
    public function getEMail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEMail', []);

        return parent::getEMail();
    }

    /**
     * {@inheritDoc}
     */
    public function getPhotoEleve()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPhotoEleve', []);

        return parent::getPhotoEleve();
    }

    /**
     * {@inheritDoc}
     */
    public function setPhotoEleve($photo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPhotoEleve', [$photo]);

        return parent::setPhotoEleve($photo);
    }

    /**
     * {@inheritDoc}
     */
    public function getContacts()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContacts', []);

        return parent::getContacts();
    }

    /**
     * {@inheritDoc}
     */
    public function addContact($contact)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addContact', [$contact]);

        return parent::addContact($contact);
    }

    /**
     * {@inheritDoc}
     */
    public function getClasseEleves()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClasseEleves', []);

        return parent::getClasseEleves();
    }

    /**
     * {@inheritDoc}
     */
    public function addClasseEleves($classeeleve)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addClasseEleves', [$classeeleve]);

        return parent::addClasseEleves($classeeleve);
    }

}