<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getShipmentItemDataProviderService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\ApiBundle\DataProvider\ShipmentItemDataProvider' shared service.
     *
     * @return \Sylius\Bundle\ApiBundle\DataProvider\ShipmentItemDataProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/ApiBundle/DataProvider/ShipmentItemDataProvider.php';

        return $container->services['Sylius\\Bundle\\ApiBundle\\DataProvider\\ShipmentItemDataProvider'] = new \Sylius\Bundle\ApiBundle\DataProvider\ShipmentItemDataProvider(($container->services['sylius.repository.shipment'] ?? $container->getSylius_Repository_ShipmentService()), ($container->services['Sylius\\Bundle\\ApiBundle\\Context\\UserContextInterface'] ?? $container->getUserContextInterfaceService()));
    }
}
