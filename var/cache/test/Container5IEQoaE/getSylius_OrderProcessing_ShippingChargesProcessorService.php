<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_OrderProcessing_ShippingChargesProcessorService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'sylius.order_processing.shipping_charges_processor' shared service.
     *
     * @return \Sylius\Component\Core\OrderProcessing\ShippingChargesProcessor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Order/Processor/OrderProcessorInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Core/OrderProcessing/ShippingChargesProcessor.php';

        return $container->services['sylius.order_processing.shipping_charges_processor'] = new \Sylius\Component\Core\OrderProcessing\ShippingChargesProcessor(($container->services['Sylius\\Component\\Order\\Factory\\AdjustmentFactoryInterface'] ?? $container->load('getAdjustmentFactoryInterfaceService')), ($container->services['sylius.shipping_calculator'] ?? $container->load('getSylius_ShippingCalculatorService')));
    }
}
