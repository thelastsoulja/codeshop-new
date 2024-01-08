<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProcessLowestPricesOnChannelChangeObserver2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\CoreBundle\PriceHistory\EntityObserver\ProcessLowestPricesOnChannelChangeObserver' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\PriceHistory\EntityObserver\ProcessLowestPricesOnChannelChangeObserver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/PriceHistory/EntityObserver/EntityObserverInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/PriceHistory/EntityObserver/ProcessLowestPricesOnChannelChangeObserver.php';

        $a = ($container->services['Sylius\\Bundle\\CoreBundle\\PriceHistory\\CommandDispatcher\\ApplyLowestPriceOnChannelPricingsCommandDispatcherInterface'] ?? $container->load('getApplyLowestPriceOnChannelPricingsCommandDispatcherInterface2Service'));

        if (isset($container->services['Sylius\\Bundle\\CoreBundle\\PriceHistory\\EntityObserver\\ProcessLowestPricesOnChannelChangeObserver'])) {
            return $container->services['Sylius\\Bundle\\CoreBundle\\PriceHistory\\EntityObserver\\ProcessLowestPricesOnChannelChangeObserver'];
        }

        return $container->services['Sylius\\Bundle\\CoreBundle\\PriceHistory\\EntityObserver\\ProcessLowestPricesOnChannelChangeObserver'] = new \Sylius\Bundle\CoreBundle\PriceHistory\EntityObserver\ProcessLowestPricesOnChannelChangeObserver($a);
    }
}
