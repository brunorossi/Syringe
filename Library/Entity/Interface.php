<?php
/**
 * Syringe PHP, A Dependency Injection Builder & Container
 *
 * @category   Entity
 * @package    Entity_Interface
 * @copyright  Bruno Rossi <brunorossiweb@gmail.com>
 * @license BSD
 */

/**
 * Entity Object Interface
 * 
 * An Entity is an object in which Identity is very important. 
 * For example, we have the need to distinguish two customers
 * with same name and same birth date with some operation or
 * some method able to return a value useful for identification.
 * setIdentifier and getIdentifier are methods to set and get
 * the identity of the entity.
 * 
 * @category   Entity
 * @package    Entity_Interface
 */
interface Syringe_Library_Entity_Interface
extends Syringe_Library_Value_Interface
{

    /**
     * @return the $_identifier
     */
    public function setIdentifier($identifier);

    /**
     * @param string|int $_identifier
     */
    public function getIdentifier();
	
}