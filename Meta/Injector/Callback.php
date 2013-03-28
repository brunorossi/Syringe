<?php
/**
 * Syringe PHP, A Dependency Injection Builder & Container
 *
 * @category   MetaInjector
 * @package    Meta_Injector_Callback
 * @copyright  Bruno Rossi <brunorossiweb@gmail.com>
 * @license BSD
 */

/**
 * Syringe_Meta_Injector_Callback
 *
 * @category	MetaInjector
 * @package	Meta_Injector_Callback
 */
class Syringe_Meta_Injector_Callback
extends Syringe_Meta_Injector_Method
implements Syringe_Meta_Injector_CallbackInterface
{

    protected $_type = Syringe_Meta_Injector_Abstract::CALLBACK_TYPE;

    /**
     * To execute a callback we need the className and the
     * methodName and to know
     * For example:
     * $callback = array($className, $methodName);
     * call_user_func_array($callback, $args);
     * or
     * $callback = array(new $className, $methodName);
     * call_user_func_array($callback, $args);
     *
     * @var string the name of the class to use for callback
     */
    protected $_className;

    /**
     * @see Syringe_Meta_Injector_CallbackInterface::setClassName($className)
     */
    public function setClassName($className)
    {
        if (false === is_string($className)) {
            throw new Syringe_Meta_Injector_Exception(
                'Class name must be a string.'
            );
        }
        $this->_className = $className;
        return $this;
    }

    /**
     * @see Syringe_Meta_Injector_CallbackInterface::getClassName()
     */
    public function getClassName()
    {
        return $this->_className;
    }
}
