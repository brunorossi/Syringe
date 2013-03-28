<?php
/**
 * Syringe PHP, A Dependency Injection Builder & Container
 *
 * @category	Injector
 * @package	Injector_Constructor
 * @copyright   Bruno Rossi <brunorossiweb@gmail.com>
 * @license BSD
 */

/**
 * Syringe_Injector_Constructor
 *
 * @category	Injector
 * @package	Injector_Constructor
 */
class Syringe_Injector_Constructor
extends Syringe_Injector_Abstract
implements Syringe_Injector_Interface
{

    /**
     * @see Syringe_Injector_Interface::inject()
     */
    public function inject()
    {
        $arguments = array_values($this->_getArguments());
        $reflectionObject = new ReflectionClass($this->_injected);
        return $reflectionObject->newInstanceArgs($arguments);
    }
    
}