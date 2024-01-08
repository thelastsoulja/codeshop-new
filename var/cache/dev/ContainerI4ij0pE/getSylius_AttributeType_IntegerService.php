<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_AttributeType_IntegerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.attribute_type.integer' shared service.
     *
     * @return \Sylius\Component\Attribute\AttributeType\IntegerAttributeType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Attribute/AttributeType/AttributeTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Attribute/AttributeType/IntegerAttributeType.php';

        return $container->services['sylius.attribute_type.integer'] = new \Sylius\Component\Attribute\AttributeType\IntegerAttributeType();
    }
}
