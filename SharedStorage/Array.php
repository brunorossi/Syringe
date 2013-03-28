<?php
/**
 * Syringe PHP, A Dependency Injection Builder & Container
 *
 * @category	SharedStorage
 * @package	SharedStorage_Array
 * @copyright  Bruno Rossi <brunorossiweb@gmail.com>
 * @license BSD
 */

/**
 * Syringe_SharedStorage_Array
 *
 * @category	SharedStorage
 * @package	SharedStorage_Array
 */
class Syringe_SharedStorage_Array
implements Syringe_SharedStorage_Interface
{

    /**
     * The container of all instanced objects
     *
     * @var array The container of all instanced objects
     */
    protected $_instancedObjects = array();

    /**
     * @see ArrayAccess::offsetExists($className)
     */
    public function offsetExists($className)
    {
        return isset($this->_instancedObjects[$className]);
    }

    /**
     * @see ArrayAccess::offsetGet($className)
     */
    public function offsetGet($className)
    {
        if (false === $this->offsetExists($className)) {
            return null;
        }
        return $this->_instancedObjects[$className];
    }

    /**
     * @see ArrayAccess::offsetSet($className, $object)
     */
    public function offsetSet($className, $object)
    {
        if (null === $className) {
            throw new Syringe_SharedStorage_Exception(
                'Class name must be defined.'
            );
        }
        if (false === is_string($className)) {
            throw new Syringe_SharedStorage_Exception(
                'Class name must be a string.'
            );
        }
        if (false === is_object($object)) {
            throw new Syringe_SharedStorage_Exception(
                'Shared Storage must contains objects only.'
            );
        }
        if (true === isset($this->_instancedObjects[$className])) {
            throw new Syringe_SharedStorage_Exception(
                'The shared storage already contains an object with the specified class name.'
            );
        }
        $this->_instancedObjects[$className] = $object;
        return $this;
    }

    /**
     * @see ArrayAccess::offsetUnset($className)
     */
    public function offsetUnset($className)
    {
        if (isset($this->_instancedObjects[$className])) {
            unset($this->_instancedObjects[$className]);
        }
    }

}