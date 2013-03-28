<?php
/**
 * Syringe PHP, A Dependency Injection Builder & Container
 *
 * @category   MetaInjectorArgument
 * @package    Meta_Injector_Argument_Integer
 * @copyright  Bruno Rossi <brunorossiweb@gmail.com>
 * @license BSD
 */

/**
 * Syringe_Meta_Injector_Argument_Integer
 *
 * @category	MetaInjectorArgument
 * @package	Meta_Injector_Argument_Integer
 */
class Syringe_Meta_Injector_Argument_Integer
extends Syringe_Meta_Injector_Argument_Abstract
implements Syringe_Meta_Injector_Argument_Interface
{

    protected $_type = Syringe_Meta_Injector_Argument_Abstract::INTEGER_TYPE;

    /**
     * Checks if the value is an integer
     *
     * @return bool true if the value is an integer, false otherwise
     */
    protected function _isValid($value)
    {
        return is_integer($value);
    }

}