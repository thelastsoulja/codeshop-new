<?php

namespace ContainerNytzCg0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getResolveOrderPaymentStateListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Sylius\Bundle\CoreBundle\EventListener\Workflow\OrderCheckout\ResolveOrderPaymentStateListener' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\EventListener\Workflow\OrderCheckout\ResolveOrderPaymentStateListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/EventListener/Workflow/OrderCheckout/ResolveOrderPaymentStateListener.php';

        $a = ($container->services['sylius.state_resolver.order_payment'] ?? $container->load('getSylius_StateResolver_OrderPaymentService'));

        if (isset($container->privates['Sylius\\Bundle\\CoreBundle\\EventListener\\Workflow\\OrderCheckout\\ResolveOrderPaymentStateListener'])) {
            return $container->privates['Sylius\\Bundle\\CoreBundle\\EventListener\\Workflow\\OrderCheckout\\ResolveOrderPaymentStateListener'];
        }

        return $container->privates['Sylius\\Bundle\\CoreBundle\\EventListener\\Workflow\\OrderCheckout\\ResolveOrderPaymentStateListener'] = new \Sylius\Bundle\CoreBundle\EventListener\Workflow\OrderCheckout\ResolveOrderPaymentStateListener($a);
    }
}