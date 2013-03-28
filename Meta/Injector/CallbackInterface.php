<?php
/**
 * Syringe PHP, A Dependency Injection Builder & Container
 *
 * @category   MetaInjector
 * @package    Meta_Injector_CallbackInterface
 * @copyright  Bruno Rossi <brunorossiweb@gmail.com>
 * @license BSD
 */

/**
 * Syringe_Meta_Injector_CallbackInterface
 *
 * @category	MetaInjector
 * @package	Meta_Injector_CallbackInterface
 */
interface Syringe_Meta_Injector_CallbackInterface
extends Syringe_Meta_Injector_MethodInterface
{

    /**
     * Sets the class name of the callback to execute
     *
     * @param string $className the class name of the callback to execute
     * @return Syringe_Meta_Injector_Callback
     */
    public function setClassName($className);

    /**
     * Gets the class name of the callback to execute
     *
     * @return string the class name of the callback to execute
     */
    public function getClassName();

}