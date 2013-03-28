<?php
class Syringe_Examples_FactoryMethod_StaticCreatorWithArguments
{

    public static function create($intType, array $options = null)
    {
        switch ($intType) {
            case 1:
                return new Syringe_Examples_FactoryMethod_MinimalProduct($options);
                break;
            case 2:
                return new Syringe_Examples_FactoryMethod_ComplexProduct($options);
                break;
            default:
                return new Syringe_Examples_FactoryMethod_BaseProduct($options);
        }
    }

}
