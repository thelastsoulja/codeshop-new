<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Logout_Listener_Session_AdminService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'security.logout.listener.session.admin' shared service.
     *
     * @return \Symfony\Component\Security\Http\EventListener\SessionLogoutListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/EventListener/SessionLogoutListener.php';

        return $container->privates['security.logout.listener.session.admin'] = new \Symfony\Component\Security\Http\EventListener\SessionLogoutListener();
    }
}
