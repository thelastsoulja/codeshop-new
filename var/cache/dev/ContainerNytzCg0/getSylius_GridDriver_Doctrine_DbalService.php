<?php

namespace ContainerNytzCg0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_GridDriver_Doctrine_DbalService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.grid_driver.doctrine.dbal' shared service.
     *
     * @return \Sylius\Bundle\GridBundle\Doctrine\DBAL\Driver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/grid-bundle/src/Component/Data/DriverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/grid-bundle/src/Bundle/Doctrine/DBAL/Driver.php';

        return $container->services['sylius.grid_driver.doctrine.dbal'] = new \Sylius\Bundle\GridBundle\Doctrine\DBAL\Driver(($container->services['doctrine.dbal.default_connection'] ?? $container->getDoctrine_Dbal_DefaultConnectionService()));
    }
}
