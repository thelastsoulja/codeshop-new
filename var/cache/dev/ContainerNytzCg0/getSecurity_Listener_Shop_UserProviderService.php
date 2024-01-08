<?php

namespace ContainerNytzCg0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Listener_Shop_UserProviderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.listener.shop.user_provider' shared service.
     *
     * @return \Symfony\Component\Security\Http\EventListener\UserProviderListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/EventListener/UserProviderListener.php';

        return $container->privates['security.listener.shop.user_provider'] = new \Symfony\Component\Security\Http\EventListener\UserProviderListener(($container->privates['sylius.shop_user_provider.email_or_name_based'] ?? $container->load('getSylius_ShopUserProvider_EmailOrNameBasedService')));
    }
}
