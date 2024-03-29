<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Factory_CartItemService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'sylius.factory.cart_item' shared service.
     *
     * @return \Sylius\Component\Core\Factory\CartItemFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Core/Factory/CartItemFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Core/Factory/CartItemFactory.php';

        return $container->services['sylius.factory.cart_item'] = new \Sylius\Component\Core\Factory\CartItemFactory(($container->privates['sylius.custom_factory.order_item.inner'] ?? ($container->privates['sylius.custom_factory.order_item.inner'] = new \Sylius\Component\Resource\Factory\Factory('Sylius\\Component\\Core\\Model\\OrderItem'))), ($container->services['Sylius\\Component\\Product\\Resolver\\ProductVariantResolverInterface'] ?? $container->getProductVariantResolverInterfaceService()));
    }
}
