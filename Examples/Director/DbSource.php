<?php
class Syringe_Examples_Director_DbSource
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