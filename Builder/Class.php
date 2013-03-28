<?php
/**
 * Syringe PHP, A Dependency Injection Builder & Container
 *
 * @category	Builder
 * @package	Builder_Class
 * @copyright   Bruno Rossi <brunorossiweb@gmail.com>
 * @license BSD
 */

/**
 * Syringe_Builder_Class
 *
 * @category	Builder
 * @package	Builder_Class
 */
class Syringe_Builder_Class
extends Syringe_Builder_ClassTemplateMethod
implements Syringe_Builder_Interface
{


    protected function _injectBuiltObject($object, $types)
    {
        
        // no chain, the original injected object will be injected
        // with the called injectors 
        foreach ($this->_getMetaInjectorsWithTypeNotIn($types) as $metaInjector) {
            $this->_inject($object, $metaInjector);
        }       

        return $object;            
        
    }

}