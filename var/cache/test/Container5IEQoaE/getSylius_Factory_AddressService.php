<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Factory_AddressService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'sylius.factory.address' shared service.
     *
     * @return \Sylius\Component\Core\Factory\AddressFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Core/Factory/AddressFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Core/Factory/AddressFactory.php';

        return $container->services['sylius.factory.address'] = new \Sylius\Component\Core\Factory\AddressFactory(($container->privates['sylius.custom_factory.address.inner'] ?? ($container->privates['sylius.custom_factory.address.inner'] = new \Sylius\Component\Resource\Factory\Factory('Sylius\\Component\\Core\\Model\\Address'))));
    }
}
