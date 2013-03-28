<?php
/**
 * Syringe PHP, A Dependency Injection Builder & Container
 *
 * @category   MetaInjector
 * @package    Meta_Injector_Abstract
 * @copyright  Bruno Rossi <brunorossiweb@gmail.com>
 * @license BSD
 */

/**
 * Syringe_Meta_Injector_Abstract
 *
 * @category	MetaInjector
 * @package	Meta_Injector_Abstract
 */
abstract class Syringe_Meta_Injector_Abstract
extends Syringe_Library_Value_Abstract
implements Syringe_Meta_Injector_Interface
{
    /**
     * Arguments are injected on construction with
     * the order specified in the $_arguments collection
     */
    const CONSTRUCTOR_TYPE = 'constructor';
    
    /**
     * Arguments are injected on construction via unified constructor
     * A unified constructor is a constructor defined as the following:
     * 
     * public function __construct(array $options)
     * 
     * the array $options is an associative array as the following:
     * 
     * array(
     *  'nameOfFirstArgument' => 'valueOfFirstArgument',
     *  'nameOfSecondArgument' => 'valueOfSecondArgument',
     * )
     * 
     * the unified constructor will map the $options array keys to
     * protected of private properties via setter methods 
     */
    const UNIFIED_CONSTRUCTOR_TYPE = 'unifiedConstructor';
    
    /**
     * Arguments are injected via a setter method
     */
    const SETTER_TYPE = 'setter';

    /**
     * Arguments are injected via a method with a specified name
     * For example:
     * public function addArguments(Arg1, Arg2);
     */
    const METHOD_TYPE = 'method';

    /**
     * Arguments are injected via a callback
     * A callback means that Syringe needs to call or instance an object
     * and execute one of his methods
     */
    const CALLBACK_TYPE = 'callback';

    /**
     * A readonly property that defines the type of injector that
     * will be set in specialized injector classes
     *
     * @var string a readonly property that defines the type of injector;
     */
    protected $_type;

    /**
     * A collection of arguments to pass to the method
     * @var Syringe_Meta_Injector_Argument_CollectionInterface a collection of arguments
     */
    protected $_arguments;

    /**
     * @see Syringe_Meta_Injector_Interface::getType()
     */
    public function getType()
    {
        return $this->_type;
    }

    /**
     * @see Syringe_Meta_Injector_Interface::setArguments(Syringe_Meta_Injector_Argument_CollectionInterface $arguments)
     */
    public function setArguments(Syringe_Meta_Injector_Argument_CollectionInterface $arguments)
    {
        $this->_arguments = $arguments;
        return $this;
    }

    /**
     * @see Syringe_Meta_Injector_Interface::getArguments()
     */
    public function getArguments()
    {
        return $this->_arguments;
    }
    
}