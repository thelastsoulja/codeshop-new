<?php

namespace ContainerNytzCg0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_OrderModifierService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.order_modifier' shared service.
     *
     * @return \Sylius\Component\Order\Modifier\OrderModifier
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Order/Modifier/OrderModifierInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Order/Modifier/OrderModifier.php';

        $a = ($container->services['sylius.order_processing.order_processor'] ?? $container->load('getSylius_OrderProcessing_OrderProcessorService'));

        if (isset($container->services['sylius.order_modifier'])) {
            return $container->services['sylius.order_modifier'];
        }

        return $container->services['sylius.order_modifier'] = new \Sylius\Component\Order\Modifier\OrderModifier($a, ($container->services['sylius.order_item_quantity_modifier.limiting'] ?? $container->load('getSylius_OrderItemQuantityModifier_LimitingService')));
    }
}
