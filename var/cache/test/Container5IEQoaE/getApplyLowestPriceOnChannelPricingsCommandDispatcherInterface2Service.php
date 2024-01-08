<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApplyLowestPriceOnChannelPricingsCommandDispatcherInterface2Service extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\CoreBundle\PriceHistory\CommandDispatcher\ApplyLowestPriceOnChannelPricingsCommandDispatcherInterface' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\PriceHistory\CommandDispatcher\BatchedApplyLowestPriceOnChannelPricingsCommandDispatcher
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/PriceHistory/CommandDispatcher/ApplyLowestPriceOnChannelPricingsCommandDispatcherInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/PriceHistory/CommandDispatcher/BatchedApplyLowestPriceOnChannelPricingsCommandDispatcher.php';

        $a = ($container->services['sylius.repository.channel_pricing'] ?? $container->load('getSylius_Repository_ChannelPricingService'));

        if (isset($container->services['Sylius\\Bundle\\CoreBundle\\PriceHistory\\CommandDispatcher\\ApplyLowestPriceOnChannelPricingsCommandDispatcherInterface'])) {
            return $container->services['Sylius\\Bundle\\CoreBundle\\PriceHistory\\CommandDispatcher\\ApplyLowestPriceOnChannelPricingsCommandDispatcherInterface'];
        }
        $b = ($container->services['messenger.default_bus'] ?? $container->getMessenger_DefaultBusService());

        if (isset($container->services['Sylius\\Bundle\\CoreBundle\\PriceHistory\\CommandDispatcher\\ApplyLowestPriceOnChannelPricingsCommandDispatcherInterface'])) {
            return $container->services['Sylius\\Bundle\\CoreBundle\\PriceHistory\\CommandDispatcher\\ApplyLowestPriceOnChannelPricingsCommandDispatcherInterface'];
        }

        return $container->services['Sylius\\Bundle\\CoreBundle\\PriceHistory\\CommandDispatcher\\ApplyLowestPriceOnChannelPricingsCommandDispatcherInterface'] = new \Sylius\Bundle\CoreBundle\PriceHistory\CommandDispatcher\BatchedApplyLowestPriceOnChannelPricingsCommandDispatcher($a, $b, 100);
    }
}
