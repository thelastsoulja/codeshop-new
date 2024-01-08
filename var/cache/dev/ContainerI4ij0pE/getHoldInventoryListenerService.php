<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHoldInventoryListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Sylius\Bundle\CoreBundle\EventListener\Workflow\Order\HoldInventoryListener' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\EventListener\Workflow\Order\HoldInventoryListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/EventListener/Workflow/Order/HoldInventoryListener.php';

        $a = ($container->services['Sylius\\Component\\Core\\Inventory\\Operator\\OrderInventoryOperatorInterface'] ?? $container->load('getOrderInventoryOperatorInterfaceService'));

        if (isset($container->privates['Sylius\\Bundle\\CoreBundle\\EventListener\\Workflow\\Order\\HoldInventoryListener'])) {
            return $container->privates['Sylius\\Bundle\\CoreBundle\\EventListener\\Workflow\\Order\\HoldInventoryListener'];
        }

        return $container->privates['Sylius\\Bundle\\CoreBundle\\EventListener\\Workflow\\Order\\HoldInventoryListener'] = new \Sylius\Bundle\CoreBundle\EventListener\Workflow\Order\HoldInventoryListener($a);
    }
}
