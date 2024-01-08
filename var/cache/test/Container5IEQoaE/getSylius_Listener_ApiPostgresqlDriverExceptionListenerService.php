<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Listener_ApiPostgresqlDriverExceptionListenerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'sylius.listener.api_postgresql_driver_exception_listener' shared service.
     *
     * @return \Sylius\Bundle\ApiBundle\EventListener\PostgreSQLDriverExceptionListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/ApiBundle/EventListener/PostgreSQLDriverExceptionListener.php';

        return $container->privates['sylius.listener.api_postgresql_driver_exception_listener'] = new \Sylius\Bundle\ApiBundle\EventListener\PostgreSQLDriverExceptionListener();
    }
}