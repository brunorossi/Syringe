<?php
/**
 * A class with an unified
 */
class Syringe_Examples_Class_UnifiedConstructor
{
    protected $_name;

    protected $_number;

    public function __construct(array $options = null)
    {
        if (null !== $options) {
            foreach ($options as $key => $value) {
                $methodName = 'set' . ucfirst($key);
                $this->$methodName($value);
            }
        }
    }

    public function setName($value)
    {
        $this->_name = $value;
        return $this;
    }

    public function setNumber($value)
    {
        $this->_number = $value;
        return $this;
    }

    public function getName()
    {
        return $this->_name;
    }

    public function getNumber()
    {
        return $this->_number;
    }
}