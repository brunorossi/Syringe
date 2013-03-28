Syringe
=======

A Dependency Injection Builder and Container (PHP 5.2 version)

```php
<?php
define('SYRINGE_PATH', '/yourpath/');

function syringeAutoloader($className) {
    $className = str_replace('_', '/', $className);
    include SYRINGE_PATH . $className . '.php';
}

spl_autoload_register('syringeAutoloader');

// A class builder example

$meta = new Syringe_Meta_Builder_Collection(
    array(
        'Syringe_Examples_Director_TypeFactoryCreator' => new Syringe_Meta_Builder_FactoryMethod(
            array(
                'className' => 'Syringe_Examples_Director_TypeFactoryCreator',
                'shared' => true,
                'injectors' => new Syringe_Meta_Injector_Collection(
                    array(
                        new Syringe_Meta_Injector_Method(
                            array(
                                'methodName' => 'create',
                                'static' => true,
                                'arguments' => new Syringe_Meta_Injector_Argument_Collection(
                                    array(
                                        new Syringe_Meta_Injector_Argument_String(
                                            array(
                                                'name' => 'type',
                                                'value' => 'Syringe_Examples_Director_SimpleProduct',
                                            )
                                        ),
                                    )
                                ),
                            )
                        ),
                    )
                ),
            )
        ),
        'Syringe_Examples_Director_DbSource' => new Syringe_Meta_Builder_Singleton(
            array(
                'className' => 'Syringe_Examples_Director_DbSource',
                'shared' => true,
            )
        ),
        'Syringe_Examples_Director_DbAdapter' => new Syringe_Meta_Builder_Class(
            array(
                'className' => 'Syringe_Examples_Director_DbAdapter',
                'shared' => false,
                'injectors' => new Syringe_Meta_Injector_Collection(
                    array(
                        new Syringe_Meta_Injector_UnifiedConstructor(
                            array(
                                'arguments' => new Syringe_Meta_Injector_Argument_Collection(
                                    array(
                                        new Syringe_Meta_Injector_Argument_Reference(
                                            array(
                                                'name' => 'dbSource',
                                                'value' => 'Syringe_Examples_Director_DbSource',
                                            )
                                        ),
                                        new Syringe_Meta_Injector_Argument_Reference(
                                            array(
                                                'name' => 'product',
                                                'value' => 'Syringe_Examples_Director_TypeFactoryCreator',
                                            )
                                        ),
                                    )
                                ),
                            )
                        ),
                    )
                ),
            )
        ),
    )
);

$sharedStorage = new Syringe_SharedStorage_Array();
$director = new Syringe_Director();
$director->setConfig($meta)
         ->setSharedStorage($sharedStorage);

$dbAdapter = $director->build('Syringe_Examples_Director_DbAdapter');
```