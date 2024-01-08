<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPayum_DynamicRegistryService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'payum.dynamic_registry' shared service.
     *
     * @return \Payum\Core\Registry\DynamicRegistry
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/payum/core/Payum/Core/Registry/GatewayRegistryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/payum/core/Payum/Core/Registry/GatewayFactoryRegistryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/payum/core/Payum/Core/Registry/StorageRegistryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/payum/core/Payum/Core/Registry/RegistryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/payum/core/Payum/Core/Registry/DynamicRegistry.php';

        return $container->services['payum.dynamic_registry'] = new \Payum\Core\Registry\DynamicRegistry(($container->services['payum.dynamic_gateways.config_storage'] ?? $container->load('getPayum_DynamicGateways_ConfigStorageService')), ($container->services['payum.static_registry'] ?? $container->load('getPayum_StaticRegistryService')));
    }
}