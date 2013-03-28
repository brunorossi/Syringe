<?php
define('SYRINGE_PATH', '/home/bruno/NetBeansProjects/');
function syringeAutoloader($className) {
    $className = str_replace('_', '/', $className);
    include SYRINGE_PATH . $className . '.php';
}
spl_autoload_register('syringeAutoloader');

$config = '
[
    {
        "type" : "class",
        "className" : "BasicConstructorClass",
        "shared" : true,
        "injectors" : [
            {
                "type" : "constructor",
                "arguments" : [
                    {
                        "type" : "String",
                        "name" : "firstName",
                        "value" : "Bruno Rossi"
                    },
                    {
                        "type" : "Integer",
                        "name" : "age",
                        "value" : 18
                    }
                ]
            },
            {
                "type" : "setter",
                "methodName" : "firstName",
                "arguments" : [
                    {
                        "type" : "String",
                        "name" : "firstName",
                        "value" : "Bruno Rossi"
                    },
                    {
                        "type" : "Integer",
                        "name" : "age",
                        "value" : 18
                    }
                ]
            }
        ]
    }
]';

$config = json_decode($config, true);

$builderMetaCollection = new Syringe_Meta_Builder_Collection();

foreach ($config as $metaBuilder) {

    $builderClassName = 'Syringe_Meta_Builder_' . ucfirst($metaBuilder['type']);

    $builderMetaObject = new $builderClassName;

    $injectorMetaCollection = new Syringe_Meta_Injector_Collection();

    foreach ($metaBuilder['injectors'] as $metaInjector) {

        $injectorClassName = 'Syringe_Meta_Injector_' . ucfirst($metaInjector['type']);

        $injectorMetaObject = new $injectorClassName;

        $injectorMetaCollection[] = $injectorMetaObject;
    }


    $builderMetaCollection[$metaBuilder['className']] = $builderMetaObject;
    $builderMetaObject->setInjectors($injectorMetaCollection);

}

print_r($builderMetaCollection);