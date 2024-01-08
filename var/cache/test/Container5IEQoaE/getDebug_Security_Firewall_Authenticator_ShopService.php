<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDebug_Security_Firewall_Authenticator_ShopService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'debug.security.firewall.authenticator.shop' shared service.
     *
     * @return \Symfony\Component\Security\Http\Authenticator\Debug\TraceableAuthenticatorManagerListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/Debug/TraceableAuthenticatorManagerListener.php';

        $a = ($container->privates['debug.security.firewall.authenticator.shop.inner'] ?? $container->load('getDebug_Security_Firewall_Authenticator_Shop_InnerService'));

        if (isset($container->privates['debug.security.firewall.authenticator.shop'])) {
            return $container->privates['debug.security.firewall.authenticator.shop'];
        }

        return $container->privates['debug.security.firewall.authenticator.shop'] = new \Symfony\Component\Security\Http\Authenticator\Debug\TraceableAuthenticatorManagerListener($a);
    }
}
