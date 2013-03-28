<?php
/**
 * Syringe PHP, A Dependency Injection Builder & Container
 *
 * @category	Builder
 * @package	Builder_Factory
 * @copyright   Bruno Rossi <brunorossiweb@gmail.com>
 * @license BSD
 */

/**
 * Syringe_Builder_Factory_CreatorInterface
 *
 * @category	Builder
 * @package	Builder_Factory
 */
interface Syringe_Builder_Factory_CreatorInterface
{
    
    /**
     * The method to create the Builder Object via Factory Method pattern
     * It sets the meta and possible options via an associative array.
     * For example passing options as follows:
     * array('director' => new Syringe_Director())
     * will cause the execution of the method setDirector of the
     * created Builder Object
     *
     * @param Syringe_Meta_Builder_Interface $meta
     * @param array $options
     * @return Syringe_Builder_Interface
     */
    public static function create(Syringe_Meta_Builder_Interface $meta);

}
