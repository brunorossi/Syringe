<?php
/**
 * Syringe PHP, A Dependency Injection Builder & Container
 *
 * @category   Collection
 * @package    Collection_Abstract
 * @copyright  Bruno Rossi <brunorossiweb@gmail.com>
 * @license BSD
 */

/**
 * Collection Abstract
 *
 * @category	Collection
 * @package	Collection_Abstract
 */
abstract class Syringe_Library_Collection_Abstract
extends ArrayObject
implements Syringe_Library_Collection_Interface
{

    /**
     * The interface that entities MUST respect to be placed into the collection
     * 
     * @var string $objectInterface 
     */
    protected $_objectInterface;

    /**
     * (non-PHPdoc)
     * @see Syringe_Library_Collection_Interface::__construct(array $values = null)
     */
    public function __construct(array $values = null)
    {
        if (true === empty($this->_objectInterface)) {
            throw new Syringe_Library_Collection_Exception(
                    get_class($this) . ': the property $_entityInterface must be set.'
            );
        }
        if (false === interface_exists($this->_objectInterface)) {
            throw new Syringe_Library_Collection_Exception(
                    get_class($this) . ': the interface '
                    . $this->_objectInterface
                    . ' does not exists.'
            );
        }
        if (null !== $values) {
            foreach ($values as $key => $value) {
                $this->offsetSet($key, $value);
            }
        }
    }

    /**
     * (non-PHPdoc)
     * @see Syringe_Library_Collection_Interface::getObjectInterface()
     */
    public function getObjectInterface()
    {
        return $this->_objectInterface;
    }

    /**
     * @see ArrayObject::offsetSet($offset, $object)
     */
    public function offsetSet($offset, $object)
    {
        $this->_isObjectInterfaceSuitableForCollection($object);
        parent::offsetSet($offset, $object);
    }

    /**
     * Checks if the entity belongs to the specified interface to be added to collection 
     * 
     * @param Syringe_Library_Entity_Interface $object
     * @throws Syringe_Library_Collection_Exception
     */
    protected function _isObjectInterfaceSuitableForCollection($object) 
    {
        if (false === ($object instanceof $this->_objectInterface)) {
            throw new Syringe_Library_Collection_Exception(
                    get_class($this) . ': '
                    . get_class($object)
                    . ' does not implement the interface '
                    . $this->_objectInterface
                    . ' allowable for the collection.'
            );
        }
    }

    /**
     * (non-PHPdoc)
     * @see Syringe_Library_Collection_Interface::toArray()
     */
    public function toArray()
    {
        $array = array();
        foreach ($this->getIterator() as $k => $element) {
            $array[] = $element->toArray();
        }
        return $array;
    }

}