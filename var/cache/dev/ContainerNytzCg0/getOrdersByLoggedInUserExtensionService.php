<?php

namespace ContainerNytzCg0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOrdersByLoggedInUserExtensionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\ApiBundle\Doctrine\QueryCollectionExtension\OrdersByLoggedInUserExtension' shared service.
     *
     * @return \Sylius\Bundle\ApiBundle\Doctrine\QueryCollectionExtension\OrdersByLoggedInUserExtension
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Core/Bridge/Doctrine/Orm/Extension/QueryCollectionExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Core/Bridge/Doctrine/Orm/Extension/ContextAwareQueryCollectionExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/ApiBundle/Doctrine/QueryCollectionExtension/OrdersByLoggedInUserExtension.php';

        return $container->services['Sylius\\Bundle\\ApiBundle\\Doctrine\\QueryCollectionExtension\\OrdersByLoggedInUserExtension'] = new \Sylius\Bundle\ApiBundle\Doctrine\QueryCollectionExtension\OrdersByLoggedInUserExtension(($container->services['Sylius\\Bundle\\ApiBundle\\Context\\UserContextInterface'] ?? $container->getUserContextInterfaceService()));
    }
}
