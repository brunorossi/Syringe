<?php
/**
 * Syringe PHP, A Dependency Injection Builder & Container
 *
 * @category	Injector
 * @package	Injector_Abstract
 * @copyright   Bruno Rossi <brunorossiweb@gmail.com>
 * @license BSD
 */

/**
 * Syringe_Injector_Abstract
 *
 * @category	Injector
 * @package	Injector_Abstract
 */
abstract class Syringe_Injector_Abstract
{

    /**
     * The class name of the class to construct (if the injector is of constructor or
     * unified constructor type) or the object that must be injected (if the
     * injector is of setter or method type)
     * 
     * @var string|object the class name or the object that must be injected
     */
    protected $_injected;

    /**
     * A meta injector
     *
     * @var Syringe_Meta_Injector_Interface A injector meta
     */
    protected $_meta;

    /**
     * The Director that calls the builder
     * The Director is needed to resolve the reference type arguments of injectors
     *
     * @var Syringe_DirectorInterface the director
     */
    protected $_director;

    /**
     * @see Syringe_Injector_Interface::setMeta(Syringe_Meta_Injector_Interface $meta)
     */
    public function setMeta(Syringe_Meta_Injector_Interface $meta)
    {
        $this->_meta = $meta;
        return $this;
    }
    
    /**
     * @see Syringe_Injector_Interface::getMeta()
     */
    public function getMeta()
    {
        return $this->_meta;
    }

    /**
     * @see Syringe_Injector_Interface::setDirector(Syringe_DirectorInterface $director)
     */
    public function setDirector(Syringe_DirectorInterface $director)
    {
        $this->_director = $director;
        return $this;
    }

    /**
     * @see Syringe_Injector_Interface::getDirector()
     */
    public function getDirector()
    {
        return $this->_director;
    }

    /**
     * @see Syringe_Injector_Interface::setInjected($injected)
     */
    public function setInjected($injected)
    {
        if (false === is_string($injected)
            && false === is_object($injected)
        ) {
            throw new Syringe_Injector_Exception(
                'The injected property must be a string or an object.'
            );
        }
        $this->_injected = $injected;
        return $this;
    }

    /**
     * @see Syringe_Injector_Interface::getInjected()
     */
    public function getInjected()
    {
        return $this->_injected;
    }
    
    /**
     * @see Syringe_Injector_Interface::_getArguments()
     */
    protected function _getArguments()
    {
        $arguments = array();
        if (null !== $this->_meta->getArguments()) {
            foreach ($this->_meta->getArguments() as $argument) {
                $value = $argument->getValue();
                if ('reference' === $argument->getType()) {
                    $value = $this->_director->build($value);
                }
                $arguments[$argument->getName()] = $value;
            }
        }
        return $arguments;
    }
   
}