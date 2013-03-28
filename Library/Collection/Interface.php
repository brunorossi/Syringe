<?php
/**
 * Syringe PHP, A Dependency Injection Builder & Container
 *
 * @category   Collection
 * @package    Collection_Interface
 * @copyright  Bruno Rossi <brunorossiweb@gmail.com>
 * @license BSD
 */

/**
 * Collection Interface
 * 
 * A collection is a container for entities that respect a specified contract (interface).
 * For example we can put into a CustomerCollection 
 * only entities that implement the CustomerInterface.
 * We use interface to assure a loose coupling, 
 * so our code will be simply testable. 
 * 
 * ATTENTION: every Collection placed along the system MUST extend this class.
 * 
 * ATTENTION: every Collection that extends this class MUST set
 * the $entityInterface property or an Syringe_Library_Collection_Exception
 * will be raised on construction.
 * 
 * @category	Collection
 * @package     Collection_Interface
 */
interface Syringe_Library_Collection_Interface
extends IteratorAggregate, ArrayAccess, Countable
{

    /**
     * Constructor
     *
     * We can pass an array of entities to be placed into the collection.
     *
     * @param array $values an array of entities to be placed into the collection
     * @throws Syringe_Library_Collection_Exception if $_objectInterface will be not set or if the
     * specified interface not exists
     */
    public function __construct(array $values = null);

    /**
     * Returns the interface of the collection allowable objects 
     * 
     * @return string $objectInterface the interface of the collection allowable objects
     */
    public function getObjectInterface();

    /**
     * Returns the array representation of the collection.
     * Entities and values objects contained into the
     * collection will be converted in array too.
     *
     * @return array
     */
    public function toArray();
}