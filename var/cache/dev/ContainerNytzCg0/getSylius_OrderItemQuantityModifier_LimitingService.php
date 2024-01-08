<?php

namespace ContainerNytzCg0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_OrderItemQuantityModifier_LimitingService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.order_item_quantity_modifier.limiting' shared service.
     *
     * @return \Sylius\Component\Core\Cart\Modifier\LimitingOrderItemQuantityModifier
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Order/Modifier/OrderItemQuantityModifierInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Core/Cart/Modifier/LimitingOrderItemQuantityModifier.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Order/Modifier/OrderItemQuantityModifier.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Order/Factory/OrderItemUnitFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Order/Factory/OrderItemUnitFactory.php';

        return $container->services['sylius.order_item_quantity_modifier.limiting'] = new \Sylius\Component\Core\Cart\Modifier\LimitingOrderItemQuantityModifier(new \Sylius\Component\Order\Modifier\OrderItemQuantityModifier(($container->services['sylius.factory.order_item_unit'] ?? ($container->services['sylius.factory.order_item_unit'] = new \Sylius\Component\Order\Factory\OrderItemUnitFactory('Sylius\\Component\\Core\\Model\\OrderItemUnit')))), 9999);
    }
}
