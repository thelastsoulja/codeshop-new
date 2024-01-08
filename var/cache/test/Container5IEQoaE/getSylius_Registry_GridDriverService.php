<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Registry_GridDriverService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'sylius.registry.grid_driver' shared service.
     *
     * @return \Sylius\Component\Registry\ServiceRegistry
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['sylius.registry.grid_driver'] = $instance = new \Sylius\Component\Registry\ServiceRegistry('Sylius\\Component\\Grid\\Data\\DriverInterface', 'grid driver');

        $instance->register('doctrine/orm', ($container->services['sylius.grid_driver.doctrine.orm'] ?? $container->load('getSylius_GridDriver_Doctrine_OrmService')));
        $instance->register('doctrine/dbal', ($container->services['sylius.grid_driver.doctrine.dbal'] ?? $container->load('getSylius_GridDriver_Doctrine_DbalService')));

        return $instance;
    }
}
