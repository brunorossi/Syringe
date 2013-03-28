<?php
/**
 * Syringe PHP, A Dependency Injection Builder & Container
 *
 * @category   MetaInjectorArgument
 * @package    Meta_Injector_Argument_Float
 * @copyright  Bruno Rossi <brunorossiweb@gmail.com>
 * @license BSD
 */

/**
 * Syringe_Meta_Injector_Argument_Float
 *
 * @category	MetaInjectorArgument
 * @package	Meta_Injector_Argument_Float
 */
class Syringe_Meta_Injector_Argument_Float
extends Syringe_Meta_Injector_Argument_Abstract
implements Syringe_Meta_Injector_Argument_Interface
{

    protected $_type = Syringe_Meta_Injector_Argument_Abstract::FLOAT_TYPE;

    /**
     * Checks if the value is a float
     *
     * @return bool true if the value is a float, false otherwise
     */
    protected function _isValid($value)
    {
        return is_float($value);
    }

}