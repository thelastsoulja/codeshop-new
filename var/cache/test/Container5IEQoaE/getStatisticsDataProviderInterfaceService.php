<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getStatisticsDataProviderInterfaceService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\AdminBundle\Provider\StatisticsDataProviderInterface' shared service.
     *
     * @return \Sylius\Bundle\AdminBundle\Provider\StatisticsDataProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/AdminBundle/Provider/StatisticsDataProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/AdminBundle/Provider/StatisticsDataProvider.php';

        return $container->services['Sylius\\Bundle\\AdminBundle\\Provider\\StatisticsDataProviderInterface'] = new \Sylius\Bundle\AdminBundle\Provider\StatisticsDataProvider(($container->services['sylius.dashboard.statistics_provider'] ?? $container->load('getSylius_Dashboard_StatisticsProviderService')), ($container->services['Sylius\\Component\\Core\\Dashboard\\SalesDataProviderInterface'] ?? $container->load('getSalesDataProviderInterfaceService')), ($container->services['sylius.money_formatter'] ?? ($container->services['sylius.money_formatter'] = new \Sylius\Bundle\MoneyBundle\Formatter\MoneyFormatter())));
    }
}
