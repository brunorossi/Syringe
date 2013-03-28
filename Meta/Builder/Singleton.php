<?php
/**
 * Syringe PHP, A Dependency Injection Builder & Container
 *
 * @category   MetaBuilder
 * @package    Meta_Builder_Singleton
 * @copyright  Bruno Rossi <brunorossiweb@gmail.com>
 * @license BSD
 */

/**
 * Syringe_Meta_Builder_Singleton
 *
 * @category	MetaBuilder
 * @package	Meta_Builder_Singleton
 */
class Syringe_Meta_Builder_Singleton
extends Syringe_Meta_Builder_Abstract
implements Syringe_Meta_Builder_SingletonInterface
{

    protected $_type = Syringe_Meta_Builder_Abstract::SINGLETON_TYPE;

    /**
     * The name of the method to get the singleton object instance
     *
     * @var string the name of the method to get the singleton object instance (default: getInstance)
     */
    protected $_instanceMethodName = 'getInstance';

    /**
     * @see Syringe_Meta_Builder_SingletonInterface::setInstanceMethodName($instanceMethodName)
     */
    public function setInstanceMethodName($instanceMethodName)
    {
        if (false === is_string($instanceMethodName)) {
            throw new Syringe_Meta_Builder_Exception(
                'Instance method name must be a string.'
            );
        }
        $this->_instanceMethodName = $instanceMethodName;
        return $this;
    }

    /**
     * @see Syringe_Meta_Builder_SingletonInterface::getInstanceMethodName()
     */
    public function getInstanceMethodName()
    {
        return $this->_instanceMethodName;
    }

}