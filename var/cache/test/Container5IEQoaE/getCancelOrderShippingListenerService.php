<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCancelOrderShippingListenerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'Sylius\Bundle\CoreBundle\EventListener\Workflow\Order\CancelOrderShippingListener' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\EventListener\Workflow\Order\CancelOrderShippingListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/EventListener/Workflow/Order/CancelOrderShippingListener.php';

        $a = ($container->services['sylius.state_machine.composite'] ?? $container->load('getSylius_StateMachine_CompositeService'));

        if (isset($container->privates['Sylius\\Bundle\\CoreBundle\\EventListener\\Workflow\\Order\\CancelOrderShippingListener'])) {
            return $container->privates['Sylius\\Bundle\\CoreBundle\\EventListener\\Workflow\\Order\\CancelOrderShippingListener'];
        }

        return $container->privates['Sylius\\Bundle\\CoreBundle\\EventListener\\Workflow\\Order\\CancelOrderShippingListener'] = new \Sylius\Bundle\CoreBundle\EventListener\Workflow\Order\CancelOrderShippingListener($a);
    }
}
