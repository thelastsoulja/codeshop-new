<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_ExceptionListener_AdminService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'security.exception_listener.admin' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\ExceptionListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Util/TargetPathTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/ExceptionListener.php';

        $a = ($container->privates['security.http_utils'] ?? $container->load('getSecurity_HttpUtilsService'));

        if (isset($container->privates['security.exception_listener.admin'])) {
            return $container->privates['security.exception_listener.admin'];
        }
        $b = ($container->privates['security.authenticator.form_login.admin'] ?? $container->load('getSecurity_Authenticator_FormLogin_AdminService'));

        if (isset($container->privates['security.exception_listener.admin'])) {
            return $container->privates['security.exception_listener.admin'];
        }

        return $container->privates['security.exception_listener.admin'] = new \Symfony\Component\Security\Http\Firewall\ExceptionListener(($container->services['.container.private.security.token_storage'] ?? $container->get_Container_Private_Security_TokenStorageService()), ($container->privates['security.authentication.trust_resolver'] ?? ($container->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver())), $a, 'admin', $b, NULL, NULL, ($container->privates['monolog.logger.security'] ?? $container->getMonolog_Logger_SecurityService()), false);
    }
}
