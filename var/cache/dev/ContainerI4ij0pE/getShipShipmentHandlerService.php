<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getShipShipmentHandlerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\ApiBundle\CommandHandler\Checkout\ShipShipmentHandler' shared service.
     *
     * @return \Sylius\Bundle\ApiBundle\CommandHandler\Checkout\ShipShipmentHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/MessageHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/ApiBundle/CommandHandler/Checkout/ShipShipmentHandler.php';

        $a = ($container->services['SM\\Factory\\FactoryInterface'] ?? $container->getFactoryInterfaceService());

        if (isset($container->services['Sylius\\Bundle\\ApiBundle\\CommandHandler\\Checkout\\ShipShipmentHandler'])) {
            return $container->services['Sylius\\Bundle\\ApiBundle\\CommandHandler\\Checkout\\ShipShipmentHandler'];
        }
        $b = ($container->services['messenger.default_bus'] ?? $container->getMessenger_DefaultBusService());

        if (isset($container->services['Sylius\\Bundle\\ApiBundle\\CommandHandler\\Checkout\\ShipShipmentHandler'])) {
            return $container->services['Sylius\\Bundle\\ApiBundle\\CommandHandler\\Checkout\\ShipShipmentHandler'];
        }

        return $container->services['Sylius\\Bundle\\ApiBundle\\CommandHandler\\Checkout\\ShipShipmentHandler'] = new \Sylius\Bundle\ApiBundle\CommandHandler\Checkout\ShipShipmentHandler(($container->services['sylius.repository.shipment'] ?? $container->getSylius_Repository_ShipmentService()), $a, $b);
    }
}
