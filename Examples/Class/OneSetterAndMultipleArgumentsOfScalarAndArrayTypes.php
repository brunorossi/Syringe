<?php
class Syringe_Examples_Class_OneSetterAndMultipleArgumentsOfScalarAndArrayTypes
{
    protected $_string;
    
    protected $_integer; 
    
    protected $_float; 
    
    protected $_array; 
    
    protected $_boolean;

    public function setValues($string, $integer, $float, $array, $boolean)
    {
        $this->_string = $string;

        $this->_integer = $integer;

        $this->_float = $float;

        $this->_array = $array;

        $this->_boolean = $boolean;
    }

    public function getString()
    {
        return $this->_string;
    }

    public function getInteger()
    {
        return $this->_integer;
    }

    public function getFloat()
    {
        return $this->_float;
    }

    public function getArray()
    {
        return $this->_array;
    }

    public function getBoolean()
    {
        return $this->_boolean;
    }

}

