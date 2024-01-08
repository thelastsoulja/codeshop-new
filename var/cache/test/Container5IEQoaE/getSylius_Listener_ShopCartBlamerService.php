<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Listener_ShopCartBlamerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'sylius.listener.shop_cart_blamer' shared service.
     *
     * @return \Sylius\Bundle\ShopBundle\EventListener\ShopCartBlamerListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/ShopBundle/EventListener/ShopCartBlamerListener.php';

        $a = ($container->services['sylius.context.cart'] ?? $container->getSylius_Context_CartService());

        if (isset($container->services['sylius.listener.shop_cart_blamer'])) {
            return $container->services['sylius.listener.shop_cart_blamer'];
        }

        return $container->services['sylius.listener.shop_cart_blamer'] = new \Sylius\Bundle\ShopBundle\EventListener\ShopCartBlamerListener($a, ($container->services['sylius.section_resolver.uri_based_section_resolver'] ?? $container->getSylius_SectionResolver_UriBasedSectionResolverService()));
    }
}
