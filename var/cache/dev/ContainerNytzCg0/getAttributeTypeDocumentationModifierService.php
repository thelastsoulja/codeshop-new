<?php

namespace ContainerNytzCg0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAttributeTypeDocumentationModifierService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Sylius\Bundle\ApiBundle\OpenApi\Documentation\AttributeTypeDocumentationModifier' shared service.
     *
     * @return \Sylius\Bundle\ApiBundle\OpenApi\Documentation\AttributeTypeDocumentationModifier
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/ApiBundle/OpenApi/Documentation/DocumentationModifierInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/ApiBundle/OpenApi/Documentation/AttributeTypeDocumentationModifier.php';

        return $container->privates['Sylius\\Bundle\\ApiBundle\\OpenApi\\Documentation\\AttributeTypeDocumentationModifier'] = new \Sylius\Bundle\ApiBundle\OpenApi\Documentation\AttributeTypeDocumentationModifier(($container->services['sylius.registry.attribute_type'] ?? $container->load('getSylius_Registry_AttributeTypeService')));
    }
}
