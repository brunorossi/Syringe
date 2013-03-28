<?php
/**
 * A basic constructor class
 */
class Syringe_Examples_Class_BasicConstructor
{
    protected $_name;

    protected $_number;

    protected $_options;

    public function __construct($name, $number, array $options)
    {
        $this->_number = $number;
        $this->_name = $name;
        $this->_options = $options;
    }

    public function getName()
    {
        return $this->_name;
    }

    public function getNumber()
    {
        return $this->_number;
    }

    public function getOptions()
    {
        return $this->_options;
    }
}
