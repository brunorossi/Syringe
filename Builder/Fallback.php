<?php
/**
 * Syringe PHP, A Dependency Injection Builder & Container
 *
 * @category	Builder
 * @package	Builder_Fallback
 * @copyright   Bruno Rossi <brunorossiweb@gmail.com>
 * @license BSD
 */

/**
 * Syringe_Builder_Fallback
 *
 * @category	Builder
 * @package	Builder_Fallback
 */
class Syringe_Builder_Fallback
extends Syringe_Builder_Abstract
implements Syringe_Builder_Interface
{

    /**
     * @see Syringe_Builder_Interface::build()
     */
    public function build()
    {
        $className = $this->_meta->getClassName();
        return new $className;
    }

}