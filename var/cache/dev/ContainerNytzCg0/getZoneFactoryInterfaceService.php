<?php

namespace ContainerNytzCg0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getZoneFactoryInterfaceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\Component\Addressing\Factory\ZoneFactoryInterface' shared service.
     *
     * @return \Sylius\Component\Addressing\Factory\ZoneFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Addressing/Factory/ZoneFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Addressing/Factory/ZoneFactory.php';

        return $container->services['Sylius\\Component\\Addressing\\Factory\\ZoneFactoryInterface'] = new \Sylius\Component\Addressing\Factory\ZoneFactory(new \Sylius\Component\Resource\Factory\Factory('Sylius\\Component\\Addressing\\Model\\Zone'), ($container->services['sylius.factory.zone_member'] ?? ($container->services['sylius.factory.zone_member'] = new \Sylius\Component\Resource\Factory\Factory('Sylius\\Component\\Addressing\\Model\\ZoneMember'))));
    }
}
