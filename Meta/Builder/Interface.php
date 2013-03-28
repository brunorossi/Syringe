<?php
/**
 * Syringe PHP, A Dependency Injection Builder & Container
 *
 * @category   MetaBuilder
 * @package    Meta_Builder_Interface
 * @copyright  Bruno Rossi <brunorossiweb@gmail.com>
 * @license BSD
 */

/**
 * Syringe_Meta_Builder_Interface
 *
 * @category	MetaBuilder
 * @package	Meta_Builder_Interface
 */
interface Syringe_Meta_Builder_Interface
{

    /**
     * Sets the name of the class for the object that must be built
     *
     * @param string $className The name of the class for which an object must be built
     * @return Syringe_Meta_Builder_Abstract
     */
    public function setClassName($className);

    /**
     * Gets the name of the class for the object that must be built
     *
     * @return string the name of the class for which an object must be built
     */
    public function getClassName();

    /**
     * Sets the collection of injectors that the builder needs to inject the object
     *
     * @param Syringe_Meta_Injector_CollectionInterface $injectors
     * @return Syringe_Meta_Builder_Abstract
     */
    public function setInjectors(Syringe_Meta_Injector_CollectionInterface $injectors);

    /**
     * Gets the collection of injectors that the builder needs to inject the object
     *
     * @return Syringe_Meta_Injector_CollectionInterface
     */
    public function getInjectors();

    /**
     * Sets if the builded object must be collected into the shared storage or not
     *
     * @param bool $shared if true the builded object will be collected into the shared storage for fast reuse
     * @return Syringe_Meta_Builder_Abstract
     */
    public function setShared($shared);

    /**
     * Gets if the builded object must be collected into the shared storage or not
     *
     * @return bool
     */
    public function isShared();

    /**
     * Gets the type of the builder
     *
     * @return string The type of the builder
     */
    public function getType();
    
}
