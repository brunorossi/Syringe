<?php
/**
 * Syringe PHP, A Dependency Injection Builder & Container
 *
 * @category   MetaInjectorArgument
 * @package    Meta_Injector_Argument_Boolean
 * @copyright  Bruno Rossi <brunorossiweb@gmail.com>
 * @license BSD
 */

/**
 * Syringe_Meta_Injector_Argument_Boolean
 *
 * @category	MetaInjectorArgument
 * @package	Meta_Injector_Argument_Boolean
 */
class Syringe_Meta_Injector_Argument_Boolean
extends Syringe_Meta_Injector_Argument_Abstract
implements Syringe_Meta_Injector_Argument_Interface
{

    protected $_type = Syringe_Meta_Injector_Argument_Abstract::BOOL_TYPE;

    /**
     * Checks if the value is a boolean
     *
     * @return bool true if the value is a boolean, false otherwise
     */
    protected function _isValid($value)
    {
        return is_bool($value);
    }

}