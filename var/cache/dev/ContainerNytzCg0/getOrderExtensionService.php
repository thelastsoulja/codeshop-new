<?php

namespace ContainerNytzCg0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOrderExtensionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\ApiBundle\Doctrine\QueryExtension\OrderExtension' shared service.
     *
     * @return \Sylius\Bundle\ApiBundle\Doctrine\QueryExtension\OrderExtension
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Core/Bridge/Doctrine/Orm/Extension/QueryCollectionExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Core/Bridge/Doctrine/Orm/Extension/ContextAwareQueryCollectionExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Core/Bridge/Doctrine/Orm/Extension/QueryItemExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/ApiBundle/Doctrine/QueryExtension/OrderExtension.php';

        return $container->services['Sylius\\Bundle\\ApiBundle\\Doctrine\\QueryExtension\\OrderExtension'] = new \Sylius\Bundle\ApiBundle\Doctrine\QueryExtension\OrderExtension(($container->services['sylius.section_resolver.uri_based_section_resolver'] ?? $container->getSylius_SectionResolver_UriBasedSectionResolverService()), $container->parameters['sylius_api.order_states_to_filter_out']);
    }
}