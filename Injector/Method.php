<?php
/**
 * Syringe PHP, A Dependency Injection Builder & Container
 *
 * @category	Injector
 * @package	Injector_Method
 * @copyright   Bruno Rossi <brunorossiweb@gmail.com>
 * @license BSD
 */

/**
 * Syringe_Injector_Method
 *
 * @category	Injector
 * @package	Injector_Method
 */
class Syringe_Injector_Method
extends Syringe_Injector_Abstract
implements Syringe_Injector_Interface
{

    /**
     * @see Syringe_Injector_Interface::inject()
     */
    public function inject()
    {
  
        $arguments = array_values($this->_getArguments());

        $object = $this->_injected;

        if (true === $this->_meta->isStatic()) {
            if (true === is_object($object)) {
                $object = get_class($object);
            }
        } else {
            if (true === is_string($object)) {
                $object = new $object;
            }
        }

        $callback = array(
            $object,
            $this->_meta->getMethodName()
        );

        $result = call_user_func_array($callback, $arguments);

        if (true === $this->_meta->isChainBreaker()) {
            return null;
        }
        
        if (true === is_object($result)) {
            return $result;
        }

        return $object;

    }
    
}
