<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Listener_CheckRememberMeConditions_AdminService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'security.listener.check_remember_me_conditions.admin' shared service.
     *
     * @return \Symfony\Component\Security\Http\EventListener\CheckRememberMeConditionsListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/EventListener/CheckRememberMeConditionsListener.php';

        return $container->privates['security.listener.check_remember_me_conditions.admin'] = new \Symfony\Component\Security\Http\EventListener\CheckRememberMeConditionsListener(['remember_me_parameter' => '_remember_me', 'always_remember_me' => false], ($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService()));
    }
}
