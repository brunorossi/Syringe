<?php
class Syringe_Examples_Class_MiscellaneousOfUnifiedConstructorAndSetters
extends Syringe_Examples_Class_UnifiedConstructor
{
    protected $_options;

    public function setTheOptions(array $options)
    {
        $this->_options = $options;
    }

    public function getOptions()
    {
        return $this->_options;
    }

}