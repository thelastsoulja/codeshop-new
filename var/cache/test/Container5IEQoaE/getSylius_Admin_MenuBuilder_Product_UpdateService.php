<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Admin_MenuBuilder_Product_UpdateService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'sylius.admin.menu_builder.product.update' shared service.
     *
     * @return \Sylius\Bundle\AdminBundle\Menu\ProductUpdateMenuBuilder
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/AdminBundle/Menu/ProductUpdateMenuBuilder.php';

        $a = ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService());

        if (isset($container->services['sylius.admin.menu_builder.product.update'])) {
            return $container->services['sylius.admin.menu_builder.product.update'];
        }

        return $container->services['sylius.admin.menu_builder.product.update'] = new \Sylius\Bundle\AdminBundle\Menu\ProductUpdateMenuBuilder(($container->services['knp_menu.factory'] ?? $container->load('getKnpMenu_FactoryService')), $a);
    }
}
