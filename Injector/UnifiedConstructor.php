<?php
/**
 * Syringe PHP, A Dependency Injection Builder & Container
 *
 * @category	Injector
 * @package	Injector_UnifiedConstructor
 * @copyright   Bruno Rossi <brunorossiweb@gmail.com>
 * @license BSD
 */

/**
 * Syringe_Injector_UnifiedConstructor
 *
 * @category	Injector
 * @package	Injector_UnifiedConstructor
 */
class Syringe_Injector_UnifiedConstructor
extends Syringe_Injector_Abstract
implements Syringe_Injector_Interface
{

    /**
     * @see Syringe_Injector_Interface::inject()
     */
    public function inject()
    {
        $className = $this->_injected;
        return new $className($this->_getArguments());
    }
    
}
