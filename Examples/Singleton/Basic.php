<?php
class Syringe_Examples_Singleton_Basic
{

    private static $_instance = null;

    public static function getInstance() {
        if (null === self::$_instance) {
                $className = __CLASS__;
                self::$_instance = new $className;
        }
        return self::$_instance;
    }

}

