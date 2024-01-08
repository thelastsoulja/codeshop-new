<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_OrderItemQuantityModifier_Limiting_InnerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'sylius.order_item_quantity_modifier.limiting.inner' shared service.
     *
     * @return \Sylius\Component\Order\Modifier\OrderItemQuantityModifier
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Order/Modifier/OrderItemQuantityModifierInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Order/Modifier/OrderItemQuantityModifier.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Order/Factory/OrderItemUnitFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Order/Factory/OrderItemUnitFactory.php';

        return $container->privates['sylius.order_item_quantity_modifier.limiting.inner'] = new \Sylius\Component\Order\Modifier\OrderItemQuantityModifier(($container->services['sylius.factory.order_item_unit'] ?? ($container->services['sylius.factory.order_item_unit'] = new \Sylius\Component\Order\Factory\OrderItemUnitFactory('Sylius\\Component\\Core\\Model\\OrderItemUnit'))));
    }
}
