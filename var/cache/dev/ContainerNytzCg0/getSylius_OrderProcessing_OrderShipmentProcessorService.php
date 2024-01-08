<?php

namespace ContainerNytzCg0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_OrderProcessing_OrderShipmentProcessorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.order_processing.order_shipment_processor' shared service.
     *
     * @return \Sylius\Component\Core\OrderProcessing\OrderShipmentProcessor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Order/Processor/OrderProcessorInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Core/OrderProcessing/OrderShipmentProcessor.php';

        $a = ($container->services['sylius.shipping_method_resolver.default'] ?? $container->load('getSylius_ShippingMethodResolver_DefaultService'));

        if (isset($container->services['sylius.order_processing.order_shipment_processor'])) {
            return $container->services['sylius.order_processing.order_shipment_processor'];
        }

        return $container->services['sylius.order_processing.order_shipment_processor'] = new \Sylius\Component\Core\OrderProcessing\OrderShipmentProcessor($a, ($container->services['sylius.factory.shipment'] ?? ($container->services['sylius.factory.shipment'] = new \Sylius\Component\Resource\Factory\Factory('Sylius\\Component\\Core\\Model\\Shipment'))), ($container->services['sylius.shipping_methods_resolver'] ?? $container->getSylius_ShippingMethodsResolverService()));
    }
}
