<?php
/**
 * Syringe PHP, A Dependency Injection Builder & Container
 *
 * @category	Syringe
 * @package	Syringe_Director
 * @copyright   Bruno Rossi <brunorossiweb@gmail.com>
 * @license BSD
 */

/**
 * Syringe_Director
 *
 * @category	Syringe
 * @package	Syringe_Director
 */
class Syringe_Director
implements Syringe_DirectorInterface
{

    /**
     * The shared storage (Syringe_SharedStorage_Interface) in which the
     * builded objects are saved if the Syringe_Meta_Builder_* flag isShared
     * is set to true
     *
     * @var Syringe_SharedStorage_Interface the shared storage
     */
    protected $_sharedStorage;

    /**
     * The configuration meta builder collection
     *
     * @var Syringe_Meta_Builder_CollectionInterface the configuration meta
     */
    protected $_config;

    /**
     * The name of the class to use as Factory Method to choose the
     * builders to load in respect ot the meta builder type
     * 
     * @var string the name of the class that will be used as Factory
     * to load the Builders in respect of the Meta Builder Type
     */
    protected $_builderFactoryClassName = 'Syringe_Builder_Factory_Creator';

    /**
     * The name of the class to use as Factory Method to choose the
     * injectors to load in respect ot the meta injector type
     *
     * @var string the name of the class that will be used as Factory
     * to load the Injectors in respect of the Meta Injector Type
     */
    protected $_injectorFactoryClassName = 'Syringe_Injector_Factory_Creator';

    /**
     * @see Syringe_DirectorInterface::setConfig(Syringe_Meta_Builder_CollectionInterface $config)
     */
    public function setConfig(Syringe_Meta_Builder_CollectionInterface $config)
    {
        $this->_config = $config;
        return $this;
    }

    /**
     * @see Syringe_DirectorInterface::getConfig()
     */
    public function getConfig()
    {
        return $this->_config;
    }

    /**
     * @see Syringe_DirectorInterface::setSharedStorage(Syringe_SharedStorage_Interface $sharedStorage)
     */
    public function setSharedStorage(Syringe_SharedStorage_Interface $sharedStorage)
    {
        $this->_sharedStorage = $sharedStorage;
        return $this;
    }

    /**
     * @see Syringe_DirectorInterface::getSharedStorage()
     */
    public function getSharedStorage()
    {
        return $this->_sharedStorage;
    }

    /**
     * @see Syringe_DirectorInterface::setBuilderFactoryClassName($builderFactoryClassName)
     */
    public function setBuilderFactoryClassName($builderFactoryClassName)
    {
        if (false === is_string($builderFactoryClassName)) {
            throw new Syringe_Exception('The builderFactory class name must be a string.');
        }
        $this->_builderFactoryClassName = $builderFactoryClassName;
        return $this;
    }

    /**
     * @see Syringe_DirectorInterface::getBuilderFactoryClassName()
     */
    public function getBuilderFactoryClassName()
    {
        return $this->_builderFactoryClassName;
    }

    /**
     * @see Syringe_DirectorInterface::setInjectorFactoryClassName($injectorFactoryClassName)
     */
    public function setInjectorFactoryClassName($injectorFactoryClassName)
    {
        if (false === is_string($injectorFactoryClassName)) {
            throw new Syringe_Exception('The injectorFactory class name must be a string.');
        }
        $this->_injectorFactoryClassName = $injectorFactoryClassName;
        return $this;
    }

    /**
     * Gets the name of the class to use as Factory Method to choose the
     * builders to load in respect ot the meta injector type
     *
     * @return string
     */
    public function getInjectorFactoryClassName()
    {
        return $this->_injectorFactoryClassName;
    }

    /**
     * Returns an Builder object using the Builder Factory Class
     * The Builder Factory Class name is set via the Director
     * to make simple to change the provided Factory Class with
     * a customized one
     *
     * @param Syringe_Meta_Builder_Interface $meta
     * @return Syringe_Builder_Interface a builder object
     */
    protected function _getBuilder(Syringe_Meta_Builder_Interface $meta)
    {
        if (false === class_exists($this->_builderFactoryClassName)) {
            throw new Syringe_Exception(
                'The class ' . $this->_builderFactoryClassName . ' does not exist.'
            );
        }
        $callback = array($this->_builderFactoryClassName, 'create');
        return call_user_func($callback, $meta, array('director' => $this));
    }

    /**
     * @see Syringe_DirectorInterface::build($className)
     */
    public function build($className)
    {

        if (false === isset($this->_config[$className])) {
            throw new Syringe_Exception(
                'The specified class name is not registered into the Meta Builder Collection keys.'
            );
        }

        $meta = $this->_config[$className];

        if (true === $meta->isShared()
            && true === isset($this->_sharedStorage[$className])
        ) {
            return $this->_sharedStorage[$className];
        }

        $object = $this->_getBuilder($meta)->build();

        if (true === $meta->isShared()) {
            $this->_sharedStorage[$className] = $object;
        }

        return $object;
    }

}
