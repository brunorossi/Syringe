<?php
/**
 * Syringe PHP, A Dependency Injection Builder & Container
 *
 * @category	Syringe
 * @package	Syringe_DirectorInterface
 * @copyright   Bruno Rossi <brunorossiweb@gmail.com>
 * @license BSD
 */

/**
 * Syringe_Director
 *
 * @category	Syringe
 * @package	Syringe_DirectorInterface
 */
interface Syringe_DirectorInterface
{

    /**
     * Sets the collection of meta for the Builders
     *
     * @param Syringe_Meta_Builder_CollectionInterface $config The configuration meta builder collection
     * @return Syringe_Director
     */
    public function setConfig(Syringe_Meta_Builder_CollectionInterface $config);

    /**
     * Gets the collection of meta for the Builders
     *
     * @return Syringe_Meta_Builder_CollectionInterface $config The configuration meta builder collection
     */
    public function getConfig();

    /**
     * Sets the shared storage object
     *
     * @param Syringe_SharedStorage_Interface $sharedStorage
     * @return Syringe_Director
     */
    public function setSharedStorage(Syringe_SharedStorage_Interface $sharedStorage);

    /**
     * Returns the shared storage 
     *
     * @return Syringe_SharedStorage_Interface
     */
    public function getSharedStorage();

    /**
     * Sets the name of the class to use as Factory Method to choose the
     * builders to load in respect of the meta builder type
     *
     * @param string $builderFactoryClassName
     * @return Syringe_Director
     */
    public function setBuilderFactoryClassName($builderFactoryClassName);

    /**
     * Gets the name of the class to use as Factory Method to choose the
     * builders to load in respect of the meta builder type
     *
     * @return string
     */
    public function getBuilderFactoryClassName();
    
    /**
     * Sets the name of the class to use as Factory Method to choose the
     * builders to load in respect of the meta injector type
     *
     * @param string $injectorFactoryClassName
     * @return Syringe_Director
     */
    public function setInjectorFactoryClassName($injectorFactoryClassName);

    /**
     * Gets the name of the class to use as Factory Method to choose the
     * builders to load in respect of the meta injector type
     *
     * @return string
     */
    public function getInjectorFactoryClassName();

    /**
     * The class name of the object to build
     *
     * @param  $className
     * @return object The builded object
     */
    public function build($className);

}
