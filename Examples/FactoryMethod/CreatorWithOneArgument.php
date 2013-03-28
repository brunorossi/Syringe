<?php
class Syringe_Examples_FactoryMethod_CreatorWithOneArgument
{

    public function create($intType)
    {
        switch ($intType) {
            case 1:
                return new Syringe_Examples_FactoryMethod_MinimalProduct();
                break;
            case 2:
                return new Syringe_Examples_FactoryMethod_ComplexProduct();
                break;
            default:
                return new Syringe_Examples_FactoryMethod_BaseProduct();
        }
    }
            
}
