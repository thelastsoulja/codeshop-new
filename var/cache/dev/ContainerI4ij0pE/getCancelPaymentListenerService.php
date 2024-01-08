<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCancelPaymentListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Sylius\Bundle\CoreBundle\EventListener\Workflow\Order\CancelPaymentListener' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\EventListener\Workflow\Order\CancelPaymentListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/EventListener/Workflow/Order/CancelPaymentListener.php';

        $a = ($container->services['sylius.state_machine.composite'] ?? $container->load('getSylius_StateMachine_CompositeService'));

        if (isset($container->privates['Sylius\\Bundle\\CoreBundle\\EventListener\\Workflow\\Order\\CancelPaymentListener'])) {
            return $container->privates['Sylius\\Bundle\\CoreBundle\\EventListener\\Workflow\\Order\\CancelPaymentListener'];
        }

        return $container->privates['Sylius\\Bundle\\CoreBundle\\EventListener\\Workflow\\Order\\CancelPaymentListener'] = new \Sylius\Bundle\CoreBundle\EventListener\Workflow\Order\CancelPaymentListener($a);
    }
}
