Syringe
=======

A Dependency Injection Builder and Container (PHP 5.2 version)

An example of how to use Syringe to build some objects with dependencies.

The classes of the built objects are placed into the Example folder.

```php
<?php
// autoloading
define('SYRINGE_PATH', '/yourpath/');
function syringeAutoloader($className) {
    $className = str_replace('_', '/', $className);
    include SYRINGE_PATH . $className . '.php';
}
spl_autoload_register('syringeAutoloader');

// meta configuration
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

// an instance of the shared storage object in which to place the shared built objects
$sharedStorage = new Syringe_SharedStorage_Array();

// an instance of the director (the object builder)
$director = new Syringe_Director();
$director->setConfig($meta)
         ->setSharedStorage($sharedStorage);

// builds the DbAdapter object and injects dependencies via an unified constructor
$dbAdapter = $director->build('Syringe_Examples_Director_DbAdapter');
```