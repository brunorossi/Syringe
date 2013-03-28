<?php
/**
 * Syringe PHP, A Dependency Injection Builder & Container
 *
 * @category   MetaInjectorArgument
 * @package    Meta_Injector_Argument_Array
 * @copyright  Bruno Rossi <brunorossiweb@gmail.com>
 * @license BSD
 */

/**
 * Syringe_Meta_Injector_Argument_Array
 *
 * @category	MetaInjectorArgument
 * @package	Meta_Injector_Argument_Array
 */
class Syringe_Meta_Injector_Argument_Array
extends Syringe_Meta_Injector_Argument_Abstract
implements Syringe_Meta_Injector_Argument_Interface
{

    protected $_type = Syringe_Meta_Injector_Argument_Abstract::ARRAY_TYPE;

    /**
     * Checks if the value is an array
     *
     * @return bool true if the value is an array, false otherwise
     */
    protected function _isValid($value)
    {
        return is_array($value);
    }

}