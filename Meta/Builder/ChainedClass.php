<?php
/**
 * Syringe PHP, A Dependency Injection Builder & Container
 *
 * @category   MetaBuilder
 * @package    Meta_Builder_ChainedClass
 * @copyright  Bruno Rossi <brunorossiweb@gmail.com>
 * @license BSD
 */

/**
 * Syringe_Meta_Builder_ChainedClass
 *
 * @category	MetaBuilder
 * @package	Meta_Builder_ChainedClass
 */
class Syringe_Meta_Builder_ChainedClass
extends Syringe_Meta_Builder_Abstract
implements Syringe_Meta_Builder_ClassInterface
{

    protected $_type = Syringe_Meta_Builder_Abstract::CHAINED_CLASS_TYPE;
        
}