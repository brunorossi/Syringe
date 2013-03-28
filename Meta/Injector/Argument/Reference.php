<?php
/**
 * Syringe PHP, A Dependency Injection Builder & Container
 *
 * @category   MetaInjectorArgument
 * @package    Meta_Injector_Argument_Reference
 * @copyright  Bruno Rossi <brunorossiweb@gmail.com>
 * @license BSD
 */

/**
 * Syringe_Meta_Injector_Argument_Reference
 *
 * @category	MetaInjectorArgument
 * @package	Meta_Injector_Argument_Reference
 */
class Syringe_Meta_Injector_Argument_Reference
extends Syringe_Meta_Injector_Argument_String
implements Syringe_Meta_Injector_Argument_Interface
{

    protected $_type = Syringe_Meta_Injector_Argument_Abstract::REFERENCE_TYPE;
    
    /*
    protected $_injectors;
    
    public function getInjectors() 
    {
        return $this->_method;
    }

    public function Injectors() 
    {
        $this->_method = $method;
        return $this;
    }    
    */
}