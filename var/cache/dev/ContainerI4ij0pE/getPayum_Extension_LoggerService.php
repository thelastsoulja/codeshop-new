<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPayum_Extension_LoggerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'payum.extension.logger' shared service.
     *
     * @return \Payum\Core\Bridge\Psr\Log\LoggerExtension
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/payum/core/Payum/Core/Bridge/Psr/Log/LoggerExtension.php';

        return $container->services['payum.extension.logger'] = new \Payum\Core\Bridge\Psr\Log\LoggerExtension(($container->privates['monolog.logger.payum'] ?? $container->load('getMonolog_Logger_PayumService')));
    }
}
