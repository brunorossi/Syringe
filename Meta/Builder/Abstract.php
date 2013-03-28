<?php
/**
 * Syringe PHP, A Dependency Injection Builder & Container
 *
 * @category   MetaBuilder
 * @package    Meta_Builder_Abstract
 * @copyright  Bruno Rossi <brunorossiweb@gmail.com>
 * @license BSD
 */

/**
 * Syringe_Meta_Builder_Abstract
 *
 * @category	MetaBuilder
 * @package	Meta_Builder_Abstract
 */
abstract class Syringe_Meta_Builder_Abstract
extends Syringe_Library_Value_Abstract
implements Syringe_Meta_Builder_Interface
{

    const CLASS_TYPE = 'class';
    
    const CHAINED_CLASS_TYPE = 'chainedClass';    

    const SINGLETON_TYPE = 'singleton';

    const FACTORY_METHOD_TYPE = 'factoryMethod';

    /**
     * The read only type of the builder
     *
     * @var string
     */
    protected $_type;

    /**
     * A string that represents the class name of the class to instance
     *
     * @var string the class name of the object to build
     */
    protected $_className;

    /**
     * Syringe uses a shared storage in which it could place constructed objects to a fast reuse
     *
     * @var bool true if the builded class must be placed into the shared storage container, false otherwise
     */
    protected $_shared;

    /**
     * Syringe uses meta injectors to let the builder know how to inject the object
     * on construction or after construction via specified setters or methods
     *
     * @var Syringe_Meta_Injector_CollectionInterface a collection of meta injectors
     */
    protected $_injectors;

    /**
     * @see Syringe_Meta_Builder_Interface::setClassName($className)
     */
    public function setClassName($className)
    {
        if (false === is_string($className)) {
            throw new Syringe_Meta_Builder_Exception('Class name must be a string.');
        }
        $this->_className = $className;
        return $this;
    }

    /**
     * @see Syringe_Meta_Builder_Interface::getClassName()
     */
    public function getClassName()
    {
        return $this->_className;
    }

    /**
     * @see Syringe_Meta_Builder_Interface::setInjectors(Syringe_Meta_Injector_CollectionInterface $injectors)
     */
    public function setInjectors(Syringe_Meta_Injector_CollectionInterface $injectors)
    {
        $this->_injectors = $injectors;
        return $this;
    }

    /**
     * @see Syringe_Meta_Builder_Interface::getInjectors()
     */
    public function getInjectors()
    {
        return $this->_injectors;
    }

    /**
     * @see Syringe_Meta_Builder_Interface::setShared($shared)
     */
    public function setShared($shared)
    {
        if (false === is_bool($shared)) {
            throw new Syringe_Meta_Builder_Exception('Shared must be a boolean.');
        }
        $this->_shared = $shared;
        return $this;
    }

    /**
     * @see Syringe_Meta_Builder_Interface::isShared()
     */
    public function isShared()
    {
        return $this->_shared;
    }

    /**
     * @see Syringe_Meta_Builder_Interface::getType()
     */
    public function getType()
    {
        return $this->_type;
    }
    
}