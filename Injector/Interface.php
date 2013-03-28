<?php
/**
 * Syringe PHP, A Dependency Injection Builder & Container
 *
 * @category	Injector
 * @package	Injector_Interface
 * @copyright   Bruno Rossi <brunorossiweb@gmail.com>
 * @license BSD
 */

/**
 * Syringe_Injector_Interface
 *
 * @category	Injector
 * @package	Injector_Interface
 */
interface Syringe_Injector_Interface
{

    public function setMeta(Syringe_Meta_Injector_Interface $meta);
    
    public function getMeta();

    public function setDirector(Syringe_DirectorInterface $director);

    public function getDirector();
    
    /**
     * Sets the name of the class or the object to inject
     * 
     * @param string|object the name of the class or the object to inject
     * @return Syringe_Injector_Interface a Syringe Injector object
     */
    public function setInjected($injected);

    /**
     * Gets the name of the class or the object to inject
     * 
     * @return string|object the name of the class or the object to inject
     */    
    public function getInjected();

    public function inject();

}
