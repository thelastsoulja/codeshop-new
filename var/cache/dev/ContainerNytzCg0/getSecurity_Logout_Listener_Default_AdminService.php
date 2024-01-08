<?php

namespace ContainerNytzCg0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Logout_Listener_Default_AdminService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.logout.listener.default.admin' shared service.
     *
     * @return \Symfony\Component\Security\Http\EventListener\DefaultLogoutListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/EventListener/DefaultLogoutListener.php';

        $a = ($container->privates['security.http_utils'] ?? $container->load('getSecurity_HttpUtilsService'));

        if (isset($container->privates['security.logout.listener.default.admin'])) {
            return $container->privates['security.logout.listener.default.admin'];
        }

        return $container->privates['security.logout.listener.default.admin'] = new \Symfony\Component\Security\Http\EventListener\DefaultLogoutListener($a, 'sylius_admin_login');
    }
}
