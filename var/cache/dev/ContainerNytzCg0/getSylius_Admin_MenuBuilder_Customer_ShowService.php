<?php

namespace ContainerNytzCg0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Admin_MenuBuilder_Customer_ShowService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.admin.menu_builder.customer.show' shared service.
     *
     * @return \Sylius\Bundle\AdminBundle\Menu\CustomerShowMenuBuilder
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/AdminBundle/Menu/CustomerShowMenuBuilder.php';

        $a = ($container->services['knp_menu.factory'] ?? $container->load('getKnpMenu_FactoryService'));

        if (isset($container->services['sylius.admin.menu_builder.customer.show'])) {
            return $container->services['sylius.admin.menu_builder.customer.show'];
        }
        $b = ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService());

        if (isset($container->services['sylius.admin.menu_builder.customer.show'])) {
            return $container->services['sylius.admin.menu_builder.customer.show'];
        }

        return $container->services['sylius.admin.menu_builder.customer.show'] = new \Sylius\Bundle\AdminBundle\Menu\CustomerShowMenuBuilder($a, $b);
    }
}
