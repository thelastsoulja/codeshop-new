<?php

namespace ContainerNytzCg0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Routing_Loader_ResourceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sylius.routing.loader.resource' shared service.
     *
     * @return \Sylius\Bundle\ResourceBundle\Routing\ResourceLoader
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Routing/ResourceLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Routing/RouteFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Routing/RouteFactory.php';

        return $container->privates['sylius.routing.loader.resource'] = new \Sylius\Bundle\ResourceBundle\Routing\ResourceLoader(($container->privates['sylius.resource_registry'] ?? $container->getSylius_ResourceRegistryService()), new \Sylius\Bundle\ResourceBundle\Routing\RouteFactory());
    }
}
