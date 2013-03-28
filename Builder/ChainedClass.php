<?php
/**
 * Syringe PHP, A Dependency Injection Builder & Container
 *
 * @category	Builder
 * @package	Builder_ChainedClass
 * @copyright   Bruno Rossi <brunorossiweb@gmail.com>
 * @license BSD
 */

/**
 * Syringe_Builder_ChainedClass
 *
 * @category	Builder
 * @package	Builder_ChainedClass
 */
class Syringe_Builder_ChainedClass
extends Syringe_Builder_ClassTemplateMethod
implements Syringe_Builder_Interface
{

    protected function _injectBuiltObject($object, $types)
    {
        	
        // we set the original injected object
        $originalInjectedObject = $object;

        // foreach injector
        foreach ($this->_getMetaInjectorsWithTypeNotIn($types) as $metaInjector) {

            // if the chain is breaked the injected object 
            // will be set as the original object
            if (null === $object) {
                $object = $originalInjectedObject;
            }

            // new injected object will be the object returned
            // from the injector, the injector will returns
            // null if the flash chainBreaker is set to true
            $object = $this->_inject($object, $metaInjector);

        }

        return $originalInjectedObject;
        	
    }

}