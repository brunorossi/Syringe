<?php
/**
 * Syringe PHP, A Dependency Injection Builder & Container
 *
 * @category   MetaInjector
 * @package    Meta_Injector_Method
 * @copyright  Bruno Rossi <brunorossiweb@gmail.com>
 * @license BSD
 */

/**
 * Syringe_Meta_Injector_Method
 *
 * @category	MetaInjector
 * @package	Meta_Injector_Method
 */
class Syringe_Meta_Injector_Method
extends Syringe_Meta_Injector_Abstract
implements Syringe_Meta_Injector_MethodInterface
{
        
    protected $_type = Syringe_Meta_Injector_Abstract::METHOD_TYPE;

    /**
     * It is the name of the method to call
     *
     * @var string The name of the method to call
     */
    protected $_methodName;

    /**
     * If the method will be called in a static manner or not
     * 
     * @var bool true if the value will be injected via static method, false otherwise
     */
    protected $_static;

    /**
     * If the method breaks the chain in a ChainedClass Builder
     * It has no effects on other types of builders
     * 
     * @var bool true if the chain is breaker and the injection will restart for the original injected object
     */
    protected $_chainBreaker;

    /**
     * @see Syringe_Meta_Injector_MethodInterface::setMethodName($methodName)
     */
    public function setMethodName($methodName)
    {
        if (false === is_string($methodName)) {
            throw new Syringe_Meta_Injector_Exception(
                'Method name must be a string.'
            );
        }
        $this->_methodName = $methodName;
        return $this;
    }

    /**
     * @see Syringe_Meta_Injector_MethodInterface::getMethodName()
     */
    public function getMethodName()
    {
        return $this->_methodName;
    }

    /**
     * @see Syringe_Meta_Injector_MethodInterface::setStatic($static)
     */
    public function setStatic($static)
    {
        if (false === is_bool($static)) {
            throw new Syringe_Meta_Injector_Exception(
                'Static must be a boolean.'
            );
        }
        $this->_static = $static;
        return $this;
    }

    /**
     * @see Syringe_Meta_Injector_MethodInterface::isStatic()
     */
    public function isStatic()
    {
        return $this->_static;
    }
    
    /**
     * @see Syringe_Meta_Injector_MethodInterface::setChainBreaker($break)
     */
    public function setChainBreaker($break)
    {
        if (false === is_bool($break)) {
            throw new Syringe_Meta_Injector_Exception(
                'Chain Breaker must be a boolean.'
            );
        }
        $this->_chainBreaker = $break;
        return $this;
    }

    /**
     * @see Syringe_Meta_Injector_MethodInterface::isChainBreaker()
     */
    public function isChainBreaker()
    {
        return $this->_chainBreaker;
    }    

}
