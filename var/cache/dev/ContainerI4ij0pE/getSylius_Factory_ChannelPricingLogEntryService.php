<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Factory_ChannelPricingLogEntryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.factory.channel_pricing_log_entry' shared service.
     *
     * @return \Sylius\Component\Core\Factory\ChannelPricingLogEntryFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Core/Factory/ChannelPricingLogEntryFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Core/Factory/ChannelPricingLogEntryFactory.php';

        return $container->services['sylius.factory.channel_pricing_log_entry'] = new \Sylius\Component\Core\Factory\ChannelPricingLogEntryFactory('Sylius\\Component\\Core\\Model\\ChannelPricingLogEntry');
    }
}