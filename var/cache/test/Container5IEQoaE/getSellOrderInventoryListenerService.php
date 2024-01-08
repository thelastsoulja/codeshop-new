<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSellOrderInventoryListenerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'Sylius\Bundle\CoreBundle\EventListener\Workflow\OrderPayment\SellOrderInventoryListener' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\EventListener\Workflow\OrderPayment\SellOrderInventoryListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/EventListener/Workflow/OrderPayment/SellOrderInventoryListener.php';

        return $container->privates['Sylius\\Bundle\\CoreBundle\\EventListener\\Workflow\\OrderPayment\\SellOrderInventoryListener'] = new \Sylius\Bundle\CoreBundle\EventListener\Workflow\OrderPayment\SellOrderInventoryListener(($container->services['Sylius\\Component\\Core\\Inventory\\Operator\\OrderInventoryOperatorInterface'] ?? $container->load('getOrderInventoryOperatorInterfaceService')));
    }
}
