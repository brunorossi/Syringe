<?php
/**
 * Syringe PHP, A Dependency Injection Builder & Container
 *
 * @category   MetaInjector
 * @package    Meta_Injector_Interface
 * @copyright  Bruno Rossi <brunorossiweb@gmail.com>
 * @license BSD
 */

/**
 * Syringe_Meta_Injector_Interface
 *
 * @category	MetaInjector
 * @package	Meta_Injector_Interface
 */
interface Syringe_Meta_Injector_Interface
{

    /**
     * Gets the type of Injector
     *
     * @return string the type of the Injector
     */
    public function getType();

    /**
     * Sets the arguments collection
     *
     * @param Syringe_Meta_Injector_Argument_CollectionInterface $arguments
     * @return Syringe_Meta_Injector_Abstract
     */
    public function setArguments(Syringe_Meta_Injector_Argument_CollectionInterface $arguments);

    /**
     * Gets the arguments collection
     *
     * @return Syringe_Meta_Injector_Argument_CollectionInterface the arguments collection
     */
    public function getArguments();

}