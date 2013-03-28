<?php
/**
 * Syringe PHP, A Dependency Injection Builder & Container
 *
 * @category   Entity
 * @package    Entity_Abstract
 * @copyright  Bruno Rossi <brunorossiweb@gmail.com>
 * @license BSD
 */

/**
 * @category    Entity
 * @package     Entity_Abstract
 */
abstract class Syringe_Library_Entity_Abstract
extends Syringe_Library_Value_Abstract
implements Syringe_Library_Entity_Interface
{

    /**
     * The identifier of the entity
     *
     * @var string $_identity
     */
    protected $_identifier;

    /**
     * (non-PHPdoc)
     * @see App_EntityInterface::getIdentifier()
     */
    public function getIdentifier()
    {
        return $this->_identifier;
    }

    /**
     * (non-PHPdoc)
     * @see App_EntityInterface::setIdentifier($identifier)
     */
    public function setIdentifier($identifier)
    {
        $this->_identifier = $identifier;
    }

}