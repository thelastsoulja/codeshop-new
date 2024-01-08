<?php

namespace ContainerNytzCg0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Factory_GatewayConfigService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.factory.gateway_config' shared service.
     *
     * @return \Sylius\Component\Resource\Factory\Factory
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['sylius.factory.gateway_config'] = new \Sylius\Component\Resource\Factory\Factory('Sylius\\Bundle\\PayumBundle\\Model\\GatewayConfig');
    }
}
