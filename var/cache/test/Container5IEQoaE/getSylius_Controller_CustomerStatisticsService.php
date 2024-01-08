<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Controller_CustomerStatisticsService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'sylius.controller.customer_statistics' shared service.
     *
     * @return \Sylius\Bundle\AdminBundle\Controller\CustomerStatisticsController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/AdminBundle/Controller/CustomerStatisticsController.php';

        return $container->services['sylius.controller.customer_statistics'] = new \Sylius\Bundle\AdminBundle\Controller\CustomerStatisticsController(($container->services['sylius.customer_statistics_provider'] ?? $container->load('getSylius_CustomerStatisticsProviderService')), ($container->services['sylius.repository.customer'] ?? $container->load('getSylius_Repository_CustomerService')), ($container->services['.container.private.twig'] ?? $container->get_Container_Private_TwigService()));
    }
}
