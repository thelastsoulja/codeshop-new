<?php

namespace ContainerNytzCg0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDebug_Security_Firewall_Authenticator_NewApiShopUserService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'debug.security.firewall.authenticator.new_api_shop_user' shared service.
     *
     * @return \Symfony\Component\Security\Http\Authenticator\Debug\TraceableAuthenticatorManagerListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/Debug/TraceableAuthenticatorManagerListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/AuthenticatorManagerListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/AuthenticatorManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/UserAuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/AuthenticatorManager.php';

        $a = ($container->privates['security.authenticator.jwt.new_api_shop_user'] ?? $container->load('getSecurity_Authenticator_Jwt_NewApiShopUserService'));

        if (isset($container->privates['debug.security.firewall.authenticator.new_api_shop_user'])) {
            return $container->privates['debug.security.firewall.authenticator.new_api_shop_user'];
        }
        $b = ($container->privates['security.authenticator.json_login.new_api_shop_user'] ?? $container->load('getSecurity_Authenticator_JsonLogin_NewApiShopUserService'));

        if (isset($container->privates['debug.security.firewall.authenticator.new_api_shop_user'])) {
            return $container->privates['debug.security.firewall.authenticator.new_api_shop_user'];
        }
        $c = ($container->privates['security.event_dispatcher.new_api_shop_user'] ?? $container->load('getSecurity_EventDispatcher_NewApiShopUserService'));

        if (isset($container->privates['debug.security.firewall.authenticator.new_api_shop_user'])) {
            return $container->privates['debug.security.firewall.authenticator.new_api_shop_user'];
        }

        return $container->privates['debug.security.firewall.authenticator.new_api_shop_user'] = new \Symfony\Component\Security\Http\Authenticator\Debug\TraceableAuthenticatorManagerListener(new \Symfony\Component\Security\Http\Firewall\AuthenticatorManagerListener(new \Symfony\Component\Security\Http\Authentication\AuthenticatorManager([0 => $a, 1 => $b], ($container->services['.container.private.security.token_storage'] ?? $container->get_Container_Private_Security_TokenStorageService()), $c, 'new_api_shop_user', ($container->privates['monolog.logger.security'] ?? $container->getMonolog_Logger_SecurityService()), true, true, [])));
    }
}
