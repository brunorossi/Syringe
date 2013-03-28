<?php
class Syringe_Examples_Class_CustomMethods
{
    protected $_name;

    protected $_number;

    public function setTheName($value)
    {
        $this->_name = $value;
        return $this;
    }

    public function setTheNumber($value)
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
