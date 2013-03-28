<?php
/**
 * Syringe PHP, A Dependency Injection Builder & Container
 *
 * @category   MetaInjector
 * @package    Meta_Injector_Setter
 * @copyright  Bruno Rossi <brunorossiweb@gmail.com>
 * @license BSD
 */

/**
 * Syringe_Meta_Injector_Setter
 *
 * @category	MetaInjector
 * @package	Meta_Injector_Setter
 */
class Syringe_Meta_Injector_Setter
extends Syringe_Meta_Injector_Method
{

    protected $_type = Syringe_Meta_Injector_Abstract::SETTER_TYPE;

    /**
     * This is a shortcut!!! Using a Setter Injector
     * we can specify the $_methodName property as the name of
     * the method to execute without the 'set' prefix
     *
     * @param string $methodName
     * @return Syringe_Meta_Injector_Setter
     */
    public function setMethodName($methodName)
    {
        if (false === is_string($methodName)) {
            throw new Syringe_Meta_Injector_Exception(
                'Method name must be a string.'
            );
        }        
        $this->_methodName = 'set' . ucfirst($methodName);
        return $this;
    }

}
