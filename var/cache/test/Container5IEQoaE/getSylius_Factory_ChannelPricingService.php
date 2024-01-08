<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Factory_ChannelPricingService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'sylius.factory.channel_pricing' shared service.
     *
     * @return \Sylius\Component\Resource\Factory\Factory
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['sylius.factory.channel_pricing'] = new \Sylius\Component\Resource\Factory\Factory('Sylius\\Component\\Core\\Model\\ChannelPricing');
    }
}
