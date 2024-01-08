<?php

namespace ContainerNytzCg0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Controller_Admin_Dashboard_StatisticsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.controller.admin.dashboard.statistics' shared service.
     *
     * @return \Sylius\Bundle\AdminBundle\Controller\Dashboard\StatisticsController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/AdminBundle/Controller/Dashboard/StatisticsController.php';

        return $container->services['sylius.controller.admin.dashboard.statistics'] = new \Sylius\Bundle\AdminBundle\Controller\Dashboard\StatisticsController(($container->services['.container.private.twig'] ?? $container->get_Container_Private_TwigService()), ($container->services['Sylius\\Bundle\\AdminBundle\\Provider\\StatisticsDataProviderInterface'] ?? $container->load('getStatisticsDataProviderInterfaceService')));
    }
}
