<?php
/**
 * Syringe PHP, A Dependency Injection Builder & Container
 *
 * @category	Injector
 * @package	Injector_Fallback
 * @copyright   Bruno Rossi <brunorossiweb@gmail.com>
 * @license BSD
 */

/**
 * Syringe_Injector_Fallback
 *
 * @category	Injector
 * @package	Injector_Fallback
 */
class Syringe_Injector_Fallback
extends Syringe_Injector_Abstract
implements Syringe_Injector_Interface
{

    /**
     * @see Syringe_Injector_Interface::inject()
     */
    public function inject()
    {
        return new stdClass();
    }

}