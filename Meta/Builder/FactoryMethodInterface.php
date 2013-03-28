<?php
/**
 * Syringe PHP, A Dependency Injection Builder & Container
 *
 * @category   MetaBuilder
 * @package    Meta_Builder_FactoryMethodInterface
 * @copyright  Bruno Rossi <brunorossiweb@gmail.com>
 * @license BSD
 */

/**
 * Syringe_Meta_Builder_FactoryMethodInterface
 *
 * @category	MetaBuilder
 * @package	Meta_Builder_FactoryMethodInterface
 */
interface Syringe_Meta_Builder_FactoryMethodInterface
extends Syringe_Meta_Builder_Interface
{
    
    /**
     * Gets if the class to use is a reference or not
     * 
     * @return bool
     */
    public function isReference();

    /**
     * Sets if the class to use is a reference or not
     * 
     * @param type $reference
     * @return Syringe_Meta_Builder_FactoryMethod
     */
    public function setReference($reference);    
    
    
    
}