<?php
/**
 * Syringe PHP, A Dependency Injection Builder & Container
 *
 * @category	Builder
 * @package	Builder_Abstract
 * @copyright   Bruno Rossi <brunorossiweb@gmail.com>
 * @license BSD
 */

/**
 * Syringe_Builder_Abstract
 *
 * @category	Builder
 * @package	Builder_Abstract
 */
abstract class Syringe_Builder_Abstract
{

    /**
     * A meta builder
     *
     * @var Syringe_Meta_Builder_Interface A builder meta
     */
    protected $_meta;

    /**
     * The Director that calls the builder
     * The Director is needed to resolve the reference type arguments of injectors
     *
     * @var Syringe_DirectorInterface the director
     */
    protected $_director;

    /**
     * @see Syringe_Builder_Interface::setMeta(Syringe_Meta_Builder_Interface $meta)
     */
    public function setMeta(Syringe_Meta_Builder_Interface $meta)
    {
        $this->_meta = $meta;
        return $this;
    }

    /**
     * @see Syringe_Builder_Interface::getMeta()
     */
    public function getMeta()
    {
        return $this->_meta;
    }

    /**
     * @see Syringe_Builder_Interface::setDirector(Syringe_DirectorInterface $director)
     */
    public function setDirector(Syringe_DirectorInterface $director)
    {
        $this->_director = $director;
        return $this;
    }

    /**
     * @see Syringe_Builder_Interface::getDirector()
     */
    public function getDirector()
    {
        return $this->_director;
    }

    /**
     * Returns an Injector object using the Injector Factory Class
     * The Injector Factory Class name is set via the Director
     * to make simple to change the provided Factory Class with
     * a customized one
     *
     * @param Syringe_Meta_Injector_Interface $metaInjector
     * @return Syringe_Meta_Injector_Interface
     */
    protected function _getInjector(Syringe_Meta_Injector_Interface $metaInjector)
    {
        $injectorFactory = $this->_director->getInjectorFactoryClassName();
        if (false === class_exists($injectorFactory)) {
            throw new Syringe_Builder_Exception(
                'The class ' . $injectorFactory . ' does not exist.'
            );
        }
        $callback = array($injectorFactory, 'create');
        return call_user_func($callback, $metaInjector, array('director' => $this->_director));
    }

    /**
     * It is an helper that helps to use the injectors, it provides the following functionalities:
     * 1) gets the injector in respect of the meta injector
     * 2) sets the injected object or the class name of the object that must be constructed and injected
     * 3) executes the injection
     *
     * @param string|object $injected the class name or the object that must be injected
     * @param Syringe_Meta_Injector_Interface $metaInjector
     * @return object the injected object
     */
    protected function _inject($injected, Syringe_Meta_Injector_Interface $metaInjector)
    {
        return $this->_getInjector($metaInjector)
                    ->setInjected($injected)
                    ->inject();
    }

    /**
     * Returns the meta injectors of the specified types
     * 
     * @param array $types the types of meta injectors to return
     * @return array an array of meta injectors of the specified type
     */
    protected function _getMetaInjectorsWithTypeIn(array $types)
    {
        $metaInjectors = array();
        if (null !== $this->_meta->getInjectors()) {
            foreach ($this->_meta->getInjectors() as $metaInjector) {
                if (true === in_array($metaInjector->getType(), $types)) {
                    $metaInjectors[] = $metaInjector;
                }
            }
        }
        return $metaInjectors;
    }

    /**
     * Returns the meta injectors of types not in the specified array of types
     *
     * @param array $types the types of meta injectors that must not be returned
     * @return array an array of meta injectors
     */
    protected function _getMetaInjectorsWithTypeNotIn(array $types)
    {
        $metaInjectors = array();
        if (null !== $this->_meta->getInjectors()) {
            foreach ($this->_meta->getInjectors() as $metaInjector) {
                if (false === in_array($metaInjector->getType(), $types)) {
                    $metaInjectors[] = $metaInjector;
                }
            }
        }
        return $metaInjectors;
    }

   /**
     * Returns the meta injectors of types not in the specified array of types
     *
     * @param string the type of meta injectors to return
     * @return array an array of meta injector of the specified type
     */
    protected function _getMetaInjectorsWithTypeEqualTo($type)
    {
        $metaInjectors = array();
        if (null !== $this->_meta->getInjectors()) {
            foreach ($this->_meta->getInjectors() as $metaInjector) {
                if ($type === $metaInjector->getType()) {
                    $metaInjectors[] = $metaInjector;
                }
            }
        }
        return $metaInjectors;
    }
}