<?php
/**
 * Syringe PHP, A Dependency Injection Builder & Container
 *
 * @category   MetaInjectorArgument
 * @package    Meta_Injector_Argument_String
 * @copyright  Bruno Rossi <brunorossiweb@gmail.com>
 * @license BSD
 */

/**
 * Syringe_Meta_Injector_Argument_String
 *
 * @category	MetaInjectorArgument
 * @package	Meta_Injector_Argument_String
 */
class Syringe_Meta_Injector_Argument_String
extends Syringe_Meta_Injector_Argument_Abstract
implements Syringe_Meta_Injector_Argument_Interface
{

    protected $_type = Syringe_Meta_Injector_Argument_Abstract::STRING_TYPE;

    /**
     * Checks if the value is a string
     *
     * @return bool true if the value is a string, false otherwise
     */
    protected function _isValid($value)
    {
        return is_string($value);
    }

}