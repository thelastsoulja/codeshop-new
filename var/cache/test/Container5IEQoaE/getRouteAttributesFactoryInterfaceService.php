<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRouteAttributesFactoryInterfaceService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\ResourceBundle\Routing\RouteAttributesFactoryInterface' shared service.
     *
     * @return \Sylius\Bundle\ResourceBundle\Routing\RouteAttributesFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Routing/RouteAttributesFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Routing/RouteAttributesFactory.php';

        return $container->services['Sylius\\Bundle\\ResourceBundle\\Routing\\RouteAttributesFactoryInterface'] = new \Sylius\Bundle\ResourceBundle\Routing\RouteAttributesFactory();
    }
}