<?php
class Syringe_Examples_Class_Setters
{
    protected $_name;

    protected $_number;

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
    
    public function setNameAndNumber($name, $number)
    {
        $this->_number = $number;
        $this->_name = $name;
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
