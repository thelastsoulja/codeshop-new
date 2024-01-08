<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_LogoutListener_ShopService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'security.logout_listener.shop' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\LogoutListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/LogoutListener.php';

        $a = ($container->privates['security.http_utils'] ?? $container->load('getSecurity_HttpUtilsService'));

        if (isset($container->privates['security.logout_listener.shop'])) {
            return $container->privates['security.logout_listener.shop'];
        }

        return $container->privates['security.logout_listener.shop'] = new \Symfony\Component\Security\Http\Firewall\LogoutListener(($container->services['.container.private.security.token_storage'] ?? $container->get_Container_Private_Security_TokenStorageService()), $a, ($container->privates['security.event_dispatcher.shop'] ?? $container->getSecurity_EventDispatcher_ShopService()), ['csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'logout', 'logout_path' => 'sylius_shop_logout']);
    }
}
