<?php

namespace ContainerNytzCg0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPayum_StaticRegistryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'payum.static_registry' shared service.
     *
     * @return \Payum\Core\Bridge\Symfony\ContainerAwareRegistry
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/payum/core/Payum/Core/Registry/GatewayRegistryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/payum/core/Payum/Core/Registry/GatewayFactoryRegistryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/payum/core/Payum/Core/Registry/StorageRegistryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/payum/core/Payum/Core/Registry/RegistryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/payum/core/Payum/Core/Registry/AbstractRegistry.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/payum/core/Payum/Core/Bridge/Symfony/ContainerAwareRegistry.php';

        $container->services['payum.static_registry'] = $instance = new \Payum\Core\Bridge\Symfony\ContainerAwareRegistry([], ['Sylius\\Component\\Core\\Model\\Order' => 'payum.storage.sylius_component_core_model_order', 'Sylius\\Component\\Core\\Model\\Payment' => 'payum.storage.sylius_component_core_model_payment'], []);

        $instance->setContainer($container);

        return $instance;
    }
}
