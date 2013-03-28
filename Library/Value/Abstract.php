<?php
/**
 * Syringe PHP, A Dependency Injection Builder & Container
 *
 * @category   Value
 * @package    Value_Abstract
 * @copyright  Bruno Rossi <brunorossiweb@gmail.com>
 * @license BSD
 */

/**
 * Value Object Abstract Class
 * 
 * @category	Value
 * @package     Value_Abstract
 * @see Syringe_Library_Value_Interface
 */
abstract class Syringe_Library_Value_Abstract
implements Syringe_Library_Value_Interface
{

    /**
     * @see Syringe_Library_Value_Interface::__construct(array $values = null);
     */
    public function __construct(array $values = null)
    {
        $this->setValues($values);
    }

    /**
     * @see Syringe_Library_Value_Interface::setValue(array $values = null)
     */
    public function setValues(array $values = null)
    {
        if (null !== $values) {

            foreach ($values as $propertyName => $propertyValue) {

                $setterMethodName = 'set' . ucfirst($propertyName);

                if (false === method_exists($this, $setterMethodName)) {

                    throw new Syringe_Library_Value_Exception(
                            get_class($this) . ': the method '
                            . $setterMethodName
                            . ' does not exist.'
                    );
                }

                $this->$setterMethodName($propertyValue);
            }
        }
    }

    /**
     * @see Syringe_Library_Value_Interface::toArray()
     */
    public function toArray()
    {
        $array = array();

        foreach (get_object_vars($this) as $propertyName => $value) {

            $cellKey = substr($propertyName, 1, strlen($propertyName));

            if ($value instanceof Syringe_Library_Value_Interface
                    || $value instanceof App_CollectionInterface
            ) {
                $array[$cellKey] = $value->toArray();
            } else {
                $array[$cellKey] = $value;
            }
        }

        return $array;
    }

}