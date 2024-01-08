<?php

namespace ContainerNytzCg0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Grid_ResourceViewFactoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.grid.resource_view_factory' shared service.
     *
     * @return \Sylius\Bundle\ResourceBundle\Grid\View\ResourceGridViewFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Grid/View/ResourceGridViewFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Grid/View/ResourceGridViewFactory.php';

        return $container->services['sylius.grid.resource_view_factory'] = new \Sylius\Bundle\ResourceBundle\Grid\View\ResourceGridViewFactory(($container->services['sylius.grid.data_provider'] ?? $container->load('getSylius_Grid_DataProviderService')), ($container->privates['sylius.resource_controller.parameters_parser'] ?? $container->load('getSylius_ResourceController_ParametersParserService')));
    }
}
