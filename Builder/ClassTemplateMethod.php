<?php
/**
 * Syringe PHP, A Dependency Injection Builder & Container
 *
 * @category	Builder
 * @package	Builder_ClassTemplateMethod
 * @copyright   Bruno Rossi <brunorossiweb@gmail.com>
 * @license BSD
 */

/**
 * Syringe_Builder_ClassTemplateMethod
 *
 * @category	Builder
 * @package	Builder_ClassTemplateMethod
 */
abstract class Syringe_Builder_ClassTemplateMethod
extends Syringe_Builder_Abstract
implements Syringe_Builder_Interface
{
    
    
    abstract protected function _injectBuiltObject($object, $types);
    
    /**
     * @see Syringe_Builder_Interface::build()
     */
    public function build()
    {
        $className = $this->_meta->getClassName();

        $object = null;

        $types = array('constructor', 'unifiedConstructor');

        foreach ($this->_getMetaInjectorsWithTypeIn($types) as $metaInjector) {
            $object = $this->_inject($className, $metaInjector);
        }

        if (null === $object) {
            $object = new $className;
        }

        return $this->_injectBuiltObject($object, $types);
                
    }

}