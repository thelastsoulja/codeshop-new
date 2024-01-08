<?php

namespace ContainerNytzCg0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator__BOR3ynService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator..bOR3yn' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator..bOR3yn'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'event_dispatcher' => ['services', 'event_dispatcher', 'getEventDispatcherService', false],
            'security.event_dispatcher.admin' => ['privates', 'security.event_dispatcher.admin', 'getSecurity_EventDispatcher_AdminService', false],
            'security.event_dispatcher.new_api_admin_user' => ['privates', 'security.event_dispatcher.new_api_admin_user', 'getSecurity_EventDispatcher_NewApiAdminUserService', true],
            'security.event_dispatcher.new_api_shop_user' => ['privates', 'security.event_dispatcher.new_api_shop_user', 'getSecurity_EventDispatcher_NewApiShopUserService', true],
            'security.event_dispatcher.shop' => ['privates', 'security.event_dispatcher.shop', 'getSecurity_EventDispatcher_ShopService', false],
        ], [
            'event_dispatcher' => '?',
            'security.event_dispatcher.admin' => 'Symfony\\Component\\EventDispatcher\\EventDispatcher',
            'security.event_dispatcher.new_api_admin_user' => 'Symfony\\Component\\EventDispatcher\\EventDispatcher',
            'security.event_dispatcher.new_api_shop_user' => 'Symfony\\Component\\EventDispatcher\\EventDispatcher',
            'security.event_dispatcher.shop' => 'Symfony\\Component\\EventDispatcher\\EventDispatcher',
        ]);
    }
}
