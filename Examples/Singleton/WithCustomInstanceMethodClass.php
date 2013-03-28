<?php
class Syringe_Examples_Singleton_WithCustomInstanceMethodClass
{

    private static $_instance = null;

    public static function customInstanceMethod() {
        if (null === self::$_instance) {
                $className = __CLASS__;
                self::$_instance = new $className;
        }
        return self::$_instance;
    }

}
