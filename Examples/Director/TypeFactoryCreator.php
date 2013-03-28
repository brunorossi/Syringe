<?php
class Syringe_Examples_Director_TypeFactoryCreator
{

    public function create($type)
    {
        return new $type;
    }

}
