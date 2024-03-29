<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getResolveOrderShipmentStateListenerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'Sylius\Bundle\CoreBundle\EventListener\Workflow\Shipment\ResolveOrderShipmentStateListener' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\EventListener\Workflow\Shipment\ResolveOrderShipmentStateListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/EventListener/Workflow/Shipment/ResolveOrderShipmentStateListener.php';

        $a = ($container->services['sylius.state_resolver.order_shipping'] ?? $container->load('getSylius_StateResolver_OrderShippingService'));

        if (isset($container->privates['Sylius\\Bundle\\CoreBundle\\EventListener\\Workflow\\Shipment\\ResolveOrderShipmentStateListener'])) {
            return $container->privates['Sylius\\Bundle\\CoreBundle\\EventListener\\Workflow\\Shipment\\ResolveOrderShipmentStateListener'];
        }

        return $container->privates['Sylius\\Bundle\\CoreBundle\\EventListener\\Workflow\\Shipment\\ResolveOrderShipmentStateListener'] = new \Sylius\Bundle\CoreBundle\EventListener\Workflow\Shipment\ResolveOrderShipmentStateListener($a);
    }
}
