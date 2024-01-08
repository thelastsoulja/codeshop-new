<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAddItemToCartHandlerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\ApiBundle\CommandHandler\Cart\AddItemToCartHandler' shared service.
     *
     * @return \Sylius\Bundle\ApiBundle\CommandHandler\Cart\AddItemToCartHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/MessageHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/ApiBundle/CommandHandler/Cart/AddItemToCartHandler.php';

        $a = ($container->services['sylius.order_modifier'] ?? $container->load('getSylius_OrderModifierService'));

        if (isset($container->services['Sylius\\Bundle\\ApiBundle\\CommandHandler\\Cart\\AddItemToCartHandler'])) {
            return $container->services['Sylius\\Bundle\\ApiBundle\\CommandHandler\\Cart\\AddItemToCartHandler'];
        }

        return $container->services['Sylius\\Bundle\\ApiBundle\\CommandHandler\\Cart\\AddItemToCartHandler'] = new \Sylius\Bundle\ApiBundle\CommandHandler\Cart\AddItemToCartHandler(($container->services['sylius.repository.order'] ?? $container->getSylius_Repository_OrderService()), ($container->services['sylius.repository.product_variant'] ?? $container->load('getSylius_Repository_ProductVariantService')), $a, ($container->services['sylius.factory.cart_item'] ?? $container->load('getSylius_Factory_CartItemService')), ($container->services['sylius.order_item_quantity_modifier.limiting'] ?? $container->load('getSylius_OrderItemQuantityModifier_LimitingService')));
    }
}
