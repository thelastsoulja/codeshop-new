<?php

namespace ContainerNytzCg0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_AttributeType_TextareaService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.attribute_type.textarea' shared service.
     *
     * @return \Sylius\Component\Attribute\AttributeType\TextareaAttributeType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Attribute/AttributeType/AttributeTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Attribute/AttributeType/TextareaAttributeType.php';

        return $container->services['sylius.attribute_type.textarea'] = new \Sylius\Component\Attribute\AttributeType\TextareaAttributeType();
    }
}