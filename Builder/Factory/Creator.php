<?php
/**
 * Syringe PHP, A Dependency Injection Builder & Container
 *
 * @category	Builder
 * @package	Builder_Factory
 * @copyright   Bruno Rossi <brunorossiweb@gmail.com>
 * @license BSD
 */

/**
 * Syringe_Builder_Factory_Creator
 *
 * @category	Builder
 * @package	Builder_Factory
 */
class Syringe_Builder_Factory_Creator
implements Syringe_Builder_Factory_CreatorInterface
{

    const BUILDER_PREFIX_PATH = 'Syringe_Builder_';

    /**
     * @see Syringe_Builder_Factory_CreatorAbstract::create(Syringe_Meta_Builder_Interface $meta, array $options = null)
     */
    public static function create(Syringe_Meta_Builder_Interface $meta, array $options = null)
    {

        $className =  self::BUILDER_PREFIX_PATH . ucfirst($meta->getType());
        
        if (true === class_exists($className)) {
            $builderObject = new $className;
        } else {
            $builderObject = new Syringe_Builder_Fallback();
        }

        $builderObject->setMeta($meta);

        if (null !== $options) {
            foreach ($options as $methodName => $value) {
                $methodName = 'set' . ucfirst($methodName);
                if (true === method_exists($builderObject, $methodName)) {
                    $builderObject->$methodName($value);
                }
            }
        }

        return $builderObject;
    }

}