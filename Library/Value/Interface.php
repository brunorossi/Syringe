<?php
/**
 * Syringe PHP, The Dependency Injection Builder & Container
 *
 * @category   Syringe
 * @package    Syringe_Value
 * @copyright  Bruno Rossi <brunorossiweb@gmail.com>
 * @license BSD
 */

/**
 * Value Object Interface
 * 
 * A value object is used to describe the domain model.
 * In value object we have a list of attributes and we
 * don't have the concept of identity and a method to 
 * retrieve a number or a characteristic that clearly
 * identify the object. 
 * 
 * For example we can have a CustomerEntity because we need
 * a way to distinguish two Customer with the same name (the
 * Customer identity matters) but we don't need to have the
 * identity concept applyed to Customer Addresses. Two
 * Customers can have the same address and we don't matter
 * about it.
 * 
 * @category Syringe
 * @package Syringe_Value
 */
interface Syringe_Library_Value_Interface
{
	
    /**
     * Constructor
     *
     * @see Syringe_ValueInterface::setValues
     * @param array $values key-value pair array to populate the object
     */
    public function __construct(array $values = null);
	
    /**
     * We can pass an array with key (name of the property) value (value of the property)
     * to populate the value object.
     * The Entities and Values Object MUST be present a getter and a setter method
     * for each property that represents an attribute. For example if
     * into the array $values we have array('name' => 'Jhon') the associated
     * entity or value object MUST present the method setName and the protected
     * or private property $_name.
     *
     * @param array $values key-value pair array to populate the object
     */
    public function setValues(array $values = null);
	
    /**
     * Translates the entity or value objects into an array
     * in protected and private properties the prefix _ will be stripped.
     *
     * @return array
     */
    public function toArray();

}