<?php

namespace ContainerNytzCg0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Grid_DataSourceProviderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.grid.data_source_provider' shared service.
     *
     * @return \Sylius\Component\Grid\Data\DataSourceProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/grid-bundle/src/Component/Data/DataSourceProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/grid-bundle/src/Component/Data/DataSourceProvider.php';

        return $container->services['sylius.grid.data_source_provider'] = new \Sylius\Component\Grid\Data\DataSourceProvider(($container->services['sylius.registry.grid_driver'] ?? $container->load('getSylius_Registry_GridDriverService')));
    }
}
