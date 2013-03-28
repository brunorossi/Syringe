<?php
class Syringe_Examples_Director_DbAdapter
{

    protected $_dbSource;

    protected $_product;

    public function setDbSource(Syringe_Examples_Director_DbSource $dbSource)
    {
        $this->_dbSource = $dbSource;
    }

    public function getDbSource()
    {
        return $this->_dbSource;
    }

    public function setProduct(Syringe_Examples_Director_ProductAbstract $product)
    {
        $this->_product = $product;
    }

    public function getProduct()
    {
        return $this->_product;
    }

    public function __construct(array $options)
    {
        foreach ($options as $k => $v) {
            $setterName = 'set' . ucfirst($k);
            $this->$setterName($v);
        }
    }

}