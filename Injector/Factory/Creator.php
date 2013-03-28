<?php
/**
 * Syringe PHP, A Dependency Injection Builder & Container
 *
 * @category	Injector
 * @package	Injector_Factory
 * @copyright   Bruno Rossi <brunorossiweb@gmail.com>
 * @license BSD
 */

/**
 * Syringe_Injector_Factory_Creator
 *
 * @category	Injector
 * @package	Injector_Factory
 */
class Syringe_Injector_Factory_Creator
implements Syringe_Injector_Factory_CreatorInterface
{

    const INJECTOR_PREFIX_PATH = 'Syringe_Injector_';    
    
    /**
     * @see Syringe_Injector_Factory_CreatorAbstract::create(Syringe_Meta_Builder_Interface $meta, array $options = null)
     */    
    public static function create(Syringe_Meta_Injector_Interface $meta, array $options = null)
    {

        $className = self::INJECTOR_PREFIX_PATH . ucfirst($meta->getType());

        if (true === class_exists($className)) {
            $injectorObject = new $className;
        } else {
            $injectorObject = new Syringe_Injector_Fallback();
        }            

        $injectorObject->setMeta($meta);

        if (null !== $options) {        
            foreach ($options as $methodName => $value) {
                $methodName = 'set' . ucfirst($methodName);
                $injectorObject->$methodName($value);
            }
        }

        return $injectorObject;
        
    }

}