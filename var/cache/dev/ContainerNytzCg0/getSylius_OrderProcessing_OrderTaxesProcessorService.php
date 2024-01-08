<?php

namespace ContainerNytzCg0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_OrderProcessing_OrderTaxesProcessorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.order_processing.order_taxes_processor' shared service.
     *
     * @return \Sylius\Component\Core\OrderProcessing\OrderTaxesProcessor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Order/Processor/OrderProcessorInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Core/OrderProcessing/OrderTaxesProcessor.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Core/Provider/ZoneProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/Provider/ChannelBasedDefaultTaxZoneProvider.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Core/Resolver/TaxationAddressResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Core/Resolver/TaxationAddressResolver.php';

        $a = ($container->services['sylius.registry.tax_calculation_strategy'] ?? $container->load('getSylius_Registry_TaxCalculationStrategyService'));

        if (isset($container->services['sylius.order_processing.order_taxes_processor'])) {
            return $container->services['sylius.order_processing.order_taxes_processor'];
        }

        return $container->services['sylius.order_processing.order_taxes_processor'] = new \Sylius\Component\Core\OrderProcessing\OrderTaxesProcessor(($container->services['sylius.provider.channel_based_default_zone_provider'] ?? ($container->services['sylius.provider.channel_based_default_zone_provider'] = new \Sylius\Bundle\CoreBundle\Provider\ChannelBasedDefaultTaxZoneProvider())), ($container->services['sylius.zone_matcher'] ?? $container->getSylius_ZoneMatcherService()), $a, ($container->services['sylius.taxation_address_resolver'] ?? ($container->services['sylius.taxation_address_resolver'] = new \Sylius\Component\Core\Resolver\TaxationAddressResolver(false))));
    }
}
