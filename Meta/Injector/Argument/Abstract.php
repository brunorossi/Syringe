<?php
/**
 * Syringe PHP, A Dependency Injection Builder & Container
 *
 * @category   MetaInjectorArgument
 * @package    Meta_Injector_Argument_Abstract
 * @copyright  Bruno Rossi <brunorossiweb@gmail.com>
 * @license BSD
 */

/**
 * Syringe_Meta_Injector_Argument_Abstract
 *
 * @category	MetaInjectorArgument
 * @package	Meta_Injector_Argument_Abstract
 */
abstract class Syringe_Meta_Injector_Argument_Abstract
extends Syringe_Library_Value_Abstract
implements Syringe_Meta_Injector_Argument_Interface
{

    const REFERENCE_TYPE = 'reference';   
    
    const INTEGER_TYPE = 'integer';

    const STRING_TYPE = 'string';

    const FLOAT_TYPE = 'float';

    const BOOL_TYPE = 'boolean';

    const OBJECT_TYPE = 'object';

    const ARRAY_TYPE = 'array';
    
    const CALLBACK_TYPE = 'callback';

    /**
     * It is a readonly property with available values
     * specified by the *_TYPE constants and it's
     * value is set in every specialized class
     *
     * @var string the type of the argument
     */
    protected $_type;
    
    /**
     * The name of the property to set for the builded object
     * 
     * @var string the name of the property 
     */
    protected $_name;

    /**
     * The value of the property could be:
     * an integer
     * a string
     * a reference (a string that references another builder)
     * a boolean
     * an object
     * an array of values
     *
     * @var string|int|float|bool|object|array the value inject for the named property
     */
    protected $_value;

    /**
     * @see Syringe_Meta_Injector_Argument_Interface::getType()
     */
    public function getType()
    {
        return $this->_type;
    }

    /**
     * @see Syringe_Meta_Injector_Argument_Interface::setValue($value)
     */
    public function setValue($value)
    {
        if (false === $this->_isValid($value)) {
            throw new Syringe_Meta_Injector_Argument_Exception(
                'The argument value is not valid.'
            );
        }
        $this->_value = $value;
        return $this;
    }

    /**
     * @see Syringe_Meta_Injector_Argument_Interface::getValue()
     */
    public function getValue()
    {
        return $this->_value;
    }

    /**
     * @see Syringe_Meta_Injector_Argument_Interface::setName($name)
     */
    public function setName($name)
    {
        if (false === is_string($name)) {
            throw new Syringe_Meta_Injector_Argument_Exception(
                'The argument name must be a string.'
            );
        }
        $this->_name = $name;
        return $this;
    }

    /**
     * @see Syringe_Meta_Injector_Argument_Interface::getName()
     */
    public function getName()
    {
        return $this->_name;
    }

    /**
     * Checks if the setter value respects the type needed (int, float, string)
     *
     * @return bool
     */
    abstract protected function _isValid($value);

}