<?php
abstract class Syringe_Examples_FactoryMethod_ProductAbstract
{
    protected $_options;

    public function getOptions()
    {
        return $this->_options;
    }

    public function __construct(array $options = null)
    {
        $this->_options = $options;
    }
}
