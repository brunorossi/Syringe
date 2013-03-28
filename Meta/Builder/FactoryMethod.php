<?php
/**
 * Syringe PHP, A Dependency Injection Builder & Container
 *
 * @category   MetaBuilder
 * @package    Meta_Builder_FactoryMethod
 * @copyright  Bruno Rossi <brunorossiweb@gmail.com>
 * @license BSD
 */

/**
 * Syringe_Meta_Builder_FactoryMethod
 *
 * @category	MetaBuilder
 * @package	Meta_Builder_FactoryMethod
 */
class Syringe_Meta_Builder_FactoryMethod
extends Syringe_Meta_Builder_Abstract
implements Syringe_Meta_Builder_FactoryMethodInterface
{
    
    protected $_type = Syringe_Meta_Builder_Abstract::FACTORY_METHOD_TYPE;
        
    /**
     * A factory method builder can use 
     * a reference to build an object on which to
     * call some methods to return another object
     * When it is the case this flag must be set to true
     * 
     * @var bool
     */
    protected $_reference;
    
    /**
     * @see Syringe_Meta_Builder_FactoryMethodInterface::isReference() 
     */
    public function isReference() 
    {
        return $this->_reference;
    }

    /**
     * @see Syringe_Meta_Builder_FactoryMethodInterface::setReference($reference) 
     */
    public function setReference($reference) 
    {
        $this->_reference = $reference;
        return $this;
    }    

}