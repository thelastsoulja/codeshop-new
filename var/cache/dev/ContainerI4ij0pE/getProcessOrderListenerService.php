<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProcessOrderListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Sylius\Bundle\CoreBundle\EventListener\Workflow\Payment\ProcessOrderListener' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\EventListener\Workflow\Payment\ProcessOrderListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/EventListener/Workflow/Payment/ProcessOrderListener.php';

        $a = ($container->services['sylius.order_processing.order_payment_processor.after_checkout'] ?? $container->load('getSylius_OrderProcessing_OrderPaymentProcessor_AfterCheckoutService'));

        if (isset($container->privates['Sylius\\Bundle\\CoreBundle\\EventListener\\Workflow\\Payment\\ProcessOrderListener'])) {
            return $container->privates['Sylius\\Bundle\\CoreBundle\\EventListener\\Workflow\\Payment\\ProcessOrderListener'];
        }

        return $container->privates['Sylius\\Bundle\\CoreBundle\\EventListener\\Workflow\\Payment\\ProcessOrderListener'] = new \Sylius\Bundle\CoreBundle\EventListener\Workflow\Payment\ProcessOrderListener($a);
    }
}
