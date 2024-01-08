<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRouting_Loader_ContainerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'routing.loader.container' shared service.
     *
     * @return \Symfony\Component\Routing\Loader\ContainerLoader
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/Loader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/ObjectLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/ContainerLoader.php';

        return $container->privates['routing.loader.container'] = new \Symfony\Component\Routing\Loader\ContainerLoader(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'kernel' => ['services', 'kernel', 'getKernelService', false],
            'sylius.routing.loader.crud_routes_attributes' => ['privates', 'sylius.routing.loader.crud_routes_attributes', 'getSylius_Routing_Loader_CrudRoutesAttributesService', true],
            'sylius.routing.loader.routes_attributes' => ['privates', 'sylius.routing.loader.routes_attributes', 'getSylius_Routing_Loader_RoutesAttributesService', true],
        ], [
            'kernel' => 'App\\Kernel',
            'sylius.routing.loader.crud_routes_attributes' => 'Sylius\\Bundle\\ResourceBundle\\Routing\\CrudRoutesAttributesLoader',
            'sylius.routing.loader.routes_attributes' => 'Sylius\\Bundle\\ResourceBundle\\Routing\\RoutesAttributesLoader',
        ]), 'test');
    }
}