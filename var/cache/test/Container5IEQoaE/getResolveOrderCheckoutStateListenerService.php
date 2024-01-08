<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getResolveOrderCheckoutStateListenerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'Sylius\Bundle\CoreBundle\EventListener\Workflow\OrderCheckout\ResolveOrderCheckoutStateListener' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\EventListener\Workflow\OrderCheckout\ResolveOrderCheckoutStateListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/EventListener/Workflow/OrderCheckout/ResolveOrderCheckoutStateListener.php';

        $a = ($container->services['sylius.state_resolver.order_checkout'] ?? $container->load('getSylius_StateResolver_OrderCheckoutService'));

        if (isset($container->privates['Sylius\\Bundle\\CoreBundle\\EventListener\\Workflow\\OrderCheckout\\ResolveOrderCheckoutStateListener'])) {
            return $container->privates['Sylius\\Bundle\\CoreBundle\\EventListener\\Workflow\\OrderCheckout\\ResolveOrderCheckoutStateListener'];
        }

        return $container->privates['Sylius\\Bundle\\CoreBundle\\EventListener\\Workflow\\OrderCheckout\\ResolveOrderCheckoutStateListener'] = new \Sylius\Bundle\CoreBundle\EventListener\Workflow\OrderCheckout\ResolveOrderCheckoutStateListener($a);
    }
}
