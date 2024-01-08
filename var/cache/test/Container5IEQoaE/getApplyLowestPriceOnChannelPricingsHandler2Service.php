<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApplyLowestPriceOnChannelPricingsHandler2Service extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\CoreBundle\PriceHistory\CommandHandler\ApplyLowestPriceOnChannelPricingsHandler' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\PriceHistory\CommandHandler\ApplyLowestPriceOnChannelPricingsHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/PriceHistory/CommandHandler/ApplyLowestPriceOnChannelPricingsHandler.php';

        $a = ($container->services['Sylius\\Bundle\\CoreBundle\\PriceHistory\\Processor\\ProductLowestPriceBeforeDiscountProcessorInterface'] ?? $container->load('getProductLowestPriceBeforeDiscountProcessorInterface2Service'));

        if (isset($container->services['Sylius\\Bundle\\CoreBundle\\PriceHistory\\CommandHandler\\ApplyLowestPriceOnChannelPricingsHandler'])) {
            return $container->services['Sylius\\Bundle\\CoreBundle\\PriceHistory\\CommandHandler\\ApplyLowestPriceOnChannelPricingsHandler'];
        }

        return $container->services['Sylius\\Bundle\\CoreBundle\\PriceHistory\\CommandHandler\\ApplyLowestPriceOnChannelPricingsHandler'] = new \Sylius\Bundle\CoreBundle\PriceHistory\CommandHandler\ApplyLowestPriceOnChannelPricingsHandler($a, ($container->services['sylius.repository.channel_pricing'] ?? $container->load('getSylius_Repository_ChannelPricingService')));
    }
}