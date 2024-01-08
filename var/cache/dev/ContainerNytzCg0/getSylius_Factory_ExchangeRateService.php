<?php

namespace ContainerNytzCg0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Factory_ExchangeRateService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.factory.exchange_rate' shared service.
     *
     * @return \Sylius\Component\Resource\Factory\Factory
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['sylius.factory.exchange_rate'] = new \Sylius\Component\Resource\Factory\Factory('Sylius\\Component\\Currency\\Model\\ExchangeRate');
    }
}
