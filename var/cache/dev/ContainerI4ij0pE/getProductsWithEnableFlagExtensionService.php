<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProductsWithEnableFlagExtensionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\ApiBundle\Doctrine\QueryCollectionExtension\ProductsWithEnableFlagExtension' shared service.
     *
     * @return \Sylius\Bundle\ApiBundle\Doctrine\QueryCollectionExtension\ProductsWithEnableFlagExtension
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Core/Bridge/Doctrine/Orm/Extension/QueryCollectionExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Core/Bridge/Doctrine/Orm/Extension/ContextAwareQueryCollectionExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/ApiBundle/Doctrine/QueryCollectionExtension/ProductsWithEnableFlagExtension.php';

        return $container->services['Sylius\\Bundle\\ApiBundle\\Doctrine\\QueryCollectionExtension\\ProductsWithEnableFlagExtension'] = new \Sylius\Bundle\ApiBundle\Doctrine\QueryCollectionExtension\ProductsWithEnableFlagExtension(($container->services['Sylius\\Bundle\\ApiBundle\\Context\\UserContextInterface'] ?? $container->getUserContextInterfaceService()));
    }
}
