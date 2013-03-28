<?php
class Syringe_Examples_Class_StaticCustomMethods
{
    protected static $_name;

    protected static $_number;

    public static function setTheName($value)
    {
        self::$_name = $value;
    }

    public static function setTheNumber($value)
    {
        self::$_number = $value;
    }

    public function getName()
    {
        return self::$_name;
    }

    public function getNumber()
    {
        return self::$_number;
    }
}

