<?php
/**
 * Syringe PHP, A Dependency Injection Builder & Container
 *
 * @category   MetaInjectorArgument
 * @package    Meta_Injector_Argument_Interface
 * @copyright  Bruno Rossi <brunorossiweb@gmail.com>
 * @license BSD
 */

/**
 * Syringe_Meta_Injector_Argument_Interface
 *
 * @category	MetaInjectorArgument
 * @package	Meta_Injector_Argument_Interface
 */
interface Syringe_Meta_Injector_Argument_Interface
{

    /**
     * Returns the type of the meta injector argument
     *
     * @return string, the type of the meta injector argument
     */
    public function getType();

    /**
     * Sets the value of the argument
     *
     * @param string|object|integer|float|boolean|array $value the value of the argument
     * @return Syringe_Meta_Injector_Argument_Abstract
     */
    public function setValue($value);

    /**
     * Gets the value of the argument
     *
     * @return string|object|integer|float|boolean|array the value of the argument
     */
    public function getValue();

    /**
     * Sets the name of the argument
     *
     * @param string $name the name of the argument
     * @return Syringe_Meta_Injector_Argument_Abstract
     */
    public function setName($name);

    /**
     * Gets the name of the argument
     *
     * @return string the name of the argument
     */
    public function getName();

}
