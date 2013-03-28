<?php
/**
 * Syringe PHP, A Dependency Injection Builder & Container
 *
 * @category	Builder
 * @package	Builder_FactoryMethod
 * @copyright   Bruno Rossi <brunorossiweb@gmail.com>
 * @license BSD
 */

/**
 * Syringe_Builder_FactoryMethod
 *
 * @category	Builder
 * @package	Builder_FactoryMethod
 */
class Syringe_Builder_FactoryMethod
extends Syringe_Builder_Abstract
implements Syringe_Builder_Interface
{

    /**
     * @see Syringe_Builder_Interface::build()
     */
    public function build()
    {
        $object = $this->_meta->getClassName();
        
        // a factory method builder that use a Reference as object to build another object
        if ($this->_meta->isReference()) {
            $object = $this->_director->build($object);
        }
        
        foreach ($this->_getMetaInjectorsWithTypeEqualTo('method') as $metaInjector) {
            $object = $this->_inject($object, $metaInjector);
        }

        return $object;
    }

}