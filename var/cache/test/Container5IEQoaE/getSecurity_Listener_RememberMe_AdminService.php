<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Listener_RememberMe_AdminService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'security.listener.remember_me.admin' shared service.
     *
     * @return \Symfony\Component\Security\Http\EventListener\RememberMeListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/EventListener/RememberMeListener.php';

        return $container->privates['security.listener.remember_me.admin'] = new \Symfony\Component\Security\Http\EventListener\RememberMeListener(($container->privates['security.authenticator.remember_me_handler.admin'] ?? $container->load('getSecurity_Authenticator_RememberMeHandler_AdminService')), ($container->privates['monolog.logger.security'] ?? $container->getMonolog_Logger_SecurityService()));
    }
}
