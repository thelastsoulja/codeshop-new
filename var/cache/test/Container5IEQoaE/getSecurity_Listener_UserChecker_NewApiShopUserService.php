<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Listener_UserChecker_NewApiShopUserService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'security.listener.user_checker.new_api_shop_user' shared service.
     *
     * @return \Symfony\Component\Security\Http\EventListener\UserCheckerListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/EventListener/UserCheckerListener.php';

        return $container->privates['security.listener.user_checker.new_api_shop_user'] = new \Symfony\Component\Security\Http\EventListener\UserCheckerListener(($container->privates['SyliusLabs\\Polyfill\\Symfony\\Security\\Core\\User\\UserChecker'] ?? $container->load('getUserCheckerService')));
    }
}
