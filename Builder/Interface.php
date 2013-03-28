<?php
/**
 * Syringe PHP, A Dependency Injection Builder & Container
 *
 * @category	Builder
 * @package	Builder_Interface
 * @copyright   Bruno Rossi <brunorossiweb@gmail.com>
 * @license BSD
 */

/**
 * Syringe_Builder_Interface
 *
 * @category	Builder
 * @package	Builder_Interface
 */
interface Syringe_Builder_Interface
{

    /**
     * Sets the meta for the builder
     *
     * @param Syringe_Meta_Builder_Interface $meta
     * @return Syringe_Builder_Interface
     */
    public function setMeta(Syringe_Meta_Builder_Interface $meta);

    /**
     * Gets the  meta for the builder
     * @return Syringe_Meta_Builder_Interface
     */
    public function getMeta();

    /**
     * Injects the director object into the builder
     *
     * @param Syringe_DirectorInterface $director
     * @return Syringe_Builder_Interface
     */
    public function setDirector(Syringe_DirectorInterface $director);

    /**
     * Gets the director
     * @return Syringe_DirectorInterface
     */
    public function getDirector();

    /**
     * Builds the object, injects it with injectors and returns it
     *
     * @return object the built and injected object
     */
    public function build();

}
