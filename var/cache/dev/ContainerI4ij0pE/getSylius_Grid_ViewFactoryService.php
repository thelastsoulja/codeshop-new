<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Grid_ViewFactoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.grid.view_factory' shared service.
     *
     * @return \Sylius\Component\Grid\View\GridViewFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/grid-bundle/src/Component/View/GridViewFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/grid-bundle/src/Component/View/GridViewFactory.php';

        return $container->services['sylius.grid.view_factory'] = new \Sylius\Component\Grid\View\GridViewFactory(($container->services['sylius.grid.data_provider'] ?? $container->load('getSylius_Grid_DataProviderService')));
    }
}
