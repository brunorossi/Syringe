<?php
/**
 * Syringe PHP, A Dependency Injection Builder & Container
 *
 * @category	Builder
 * @package	Builder_Singleton
 * @copyright   Bruno Rossi <brunorossiweb@gmail.com>
 * @license BSD
 */

/**
 * Syringe_Builder_Singleton
 *
 * @category	Builder
 * @package	Builder_Singleton
 */
class Syringe_Builder_Singleton
extends Syringe_Builder_Abstract
implements Syringe_Builder_Interface
{

    /**
     * @see Syringe_Builder_Interface::build()
     */
    public function build()
    {
        $className = $this->_meta->getClassName();

        $methodName = $this->_meta->getInstanceMethodName();

        $object = call_user_func(array($className, $methodName));

        $types = array('setter', 'method');

        foreach ($this->_getMetaInjectorsWithTypeIn($types) as $metaInjector) {
            $object = $this->_inject($object, $metaInjector);
        }

        return $object;
    }

}