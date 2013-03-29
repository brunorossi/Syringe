Syringe PHP - A Dependency Injection Builder and Container (PHP 5.2 version)
============================================================================

It is based on a Builder design pattern, it uses a Director to call a Builder for each object to construct. 
Builders use Injectors to inject the needed arguments (dependencies and parameters) into the constructed object. 
The Director must be instructed via Meta Objects on how to use Builders, Injectors and Arguments to build each object. 
The Director should use a Shared Storage in which to place the shared constructed objects. 
The constructed and shared objects could be retrieved from the Shared Storage without the needing to reconstruct them. 
Each Meta Builder presents a shared flag to instruct the Builder to save or not the built object into the Shared Storage.
Syringe supports Setter and Constructor injection types.

Builders
--------

Syringe presents various builders to construct objects in various manner. 
By now the following Builders are availables:

Singleton - calls the getInstance method to retrieve or create the instance of the needed object and then it gives the chance to apply injection via setter or method injectors.

Class - calls the constructor, injects it and then applies optional injections via setter and method injectors. There is no way to use getter/setter pair to inject dependencies in an object retrieved from the built one.

ClassChain - Similar to the previous one but it allows to use setter/getter pairs to inject a chain of objects starting from the built one. The chain can be broken on setter and method Injectors to restart injection on the original built object.

FactoryMethod - A way to construct an object via another one that acts as a FactoryMethod or provides a chain of methods or a single method to retrieve the needed object.

Injectors
---------

By now the following Injectors are availables:

Constructor - Injects the defined arguments into the object on construction.

UnifiedConstructor - Injects the defined arguments via an unified constructor. It is a __construct method that accepts just one argument with the form of an associative array in with keys are the names of the setter methods to call, without the set prefix, and the values are the single value to pass to each setter method.

Method - Injects the built object calling the specified method with the specified arguments.

Setter - Similar to the previous one, but the name of the specified method is prefixed automatically with 'set' prefix.

Method and Setter Injectors support static calls and must be declared as chainBreaker to break a chain in a chained Builder.

Extensibility
-------------

Do you need to add new ways to construct objects? Write your own Builder and/or your own Injector. 

Do you need a custom Shared Storage? Write your own one, it is simple.

Example
-------

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