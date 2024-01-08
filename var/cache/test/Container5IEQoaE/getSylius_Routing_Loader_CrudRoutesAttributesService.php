<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Routing_Loader_CrudRoutesAttributesService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'sylius.routing.loader.crud_routes_attributes' shared service.
     *
     * @return \Sylius\Bundle\ResourceBundle\Routing\CrudRoutesAttributesLoader
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Routing/RouteLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Routing/CrudRoutesAttributesLoader.php';

        return $container->privates['sylius.routing.loader.crud_routes_attributes'] = new \Sylius\Bundle\ResourceBundle\Routing\CrudRoutesAttributesLoader($container->parameters['sylius.resource.mapping'], ($container->privates['sylius.routing.loader.resource'] ?? $container->load('getSylius_Routing_Loader_ResourceService')));
    }
}
