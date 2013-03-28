<?php
/**
 * Syringe PHP, A Dependency Injection Builder & Container
 *
 * @category	Injector
 * @package	Injector_Factory
 * @copyright   Bruno Rossi <brunorossiweb@gmail.com>
 * @license BSD
 */

/**
 * Syringe_Injector_Factory_CreatorInterface
 *
 * @category	Injector
 * @package	Injector_Factory
 */
interface Syringe_Injector_Factory_CreatorInterface
{
    
    /**
     * The method to create the Injector Object via Factory Method pattern
     * It sets the meta and possible options via an associative array.
     * For example passing options as follow:
     * array('director' => new Syringe_Director())
     * will cause the execution of the method setDirector of the
     * created Injector Object
     *
     * @param Syringe_Meta_Injector_Interface $meta
     * @param array $options
     * @return Syringe_Injector_Interface
     */
    public static function create(Syringe_Meta_Injector_Interface $meta);

}