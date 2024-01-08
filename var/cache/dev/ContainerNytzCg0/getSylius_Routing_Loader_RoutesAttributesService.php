<?php

namespace ContainerNytzCg0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Routing_Loader_RoutesAttributesService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sylius.routing.loader.routes_attributes' shared service.
     *
     * @return \Sylius\Bundle\ResourceBundle\Routing\RoutesAttributesLoader
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Routing/RouteLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Routing/RoutesAttributesLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Routing/RouteAttributesFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Routing/RouteAttributesFactory.php';

        return $container->privates['sylius.routing.loader.routes_attributes'] = new \Sylius\Bundle\ResourceBundle\Routing\RoutesAttributesLoader($container->parameters['sylius.resource.mapping'], ($container->services['Sylius\\Bundle\\ResourceBundle\\Routing\\RouteAttributesFactoryInterface'] ?? ($container->services['Sylius\\Bundle\\ResourceBundle\\Routing\\RouteAttributesFactoryInterface'] = new \Sylius\Bundle\ResourceBundle\Routing\RouteAttributesFactory())));
    }
}
