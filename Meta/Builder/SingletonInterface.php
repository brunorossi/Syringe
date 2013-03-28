<?php
/**
 * Syringe PHP, A Dependency Injection Builder & Container
 *
 * @category   MetaBuilder
 * @package    Meta_Builder_SingletonInterface
 * @copyright  Bruno Rossi <brunorossiweb@gmail.com>
 * @license BSD
 */

/**
 * Syringe_Meta_Builder_SingletonInterface
 *
 * @category	MetaBuilder
 * @package	Meta_Builder_SingletonInterface
 */
interface Syringe_Meta_Builder_SingletonInterface
extends Syringe_Meta_Builder_Interface
{

    /**
     * Sets the instance method name
     *
     * @param string $instanceMethodName The instance method name
     * @return Syringe_Meta_Builder_Singleton
     */
    public function setInstanceMethodName($instanceMethodName);

    /**
     * Gets the instance method name
     *
     * @return string
     */
    public function getInstanceMethodName();

}