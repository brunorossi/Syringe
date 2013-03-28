<?php
/**
 * Syringe PHP, A Dependency Injection Builder & Container
 *
 * @category   MetaInjector
 * @package    Meta_Injector_MethodInterface
 * @copyright  Bruno Rossi <brunorossiweb@gmail.com>
 * @license BSD
 */

/**
 * Syringe_Meta_Injector_MethodInterface
 *
 * @category	MetaInjector
 * @package	Meta_Injector_MethodInterface
 */
interface Syringe_Meta_Injector_MethodInterface
extends Syringe_Meta_Injector_Interface
{

    /**
     * Sets the method name that will be executed after object construction
     *
     * @param string the method name
     * @return Syringe_Meta_Injector_Method
     */
    public function setMethodName($methodName);

    /**
     * Gets the method name
     *
     * @return string the method name
     */
    public function getMethodName();

    /**
     * Sets a boolean value to specify if the method call is static or not
     *
     * @param bool if the method is static or non static
     * @return Syringe_Meta_Injector_Method
     */
    public function setStatic($static);

    /**
     * Gets if the method is called in static way or not
     *
     * @return bool
     */
    public function isStatic();
    
    /**
     * Sets a boolean value to specify if the method call is a chain breaker or not
     *
     * @param bool if the method call is a chain breaker or not
     * @return Syringe_Meta_Injector_Method
     */
    public function setChainBreaker($break);

    /**
     * Gets if the method is a chain breaker or not
     *
     * @return bool
     */
    public function isChainBreaker();    
    
}
