<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSaveCustomerAddressesListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Sylius\Bundle\CoreBundle\EventListener\Workflow\Order\SaveCustomerAddressesListener' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\EventListener\Workflow\Order\SaveCustomerAddressesListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/EventListener/Workflow/Order/SaveCustomerAddressesListener.php';

        return $container->privates['Sylius\\Bundle\\CoreBundle\\EventListener\\Workflow\\Order\\SaveCustomerAddressesListener'] = new \Sylius\Bundle\CoreBundle\EventListener\Workflow\Order\SaveCustomerAddressesListener(($container->services['sylius.customer_order_addresses_saver'] ?? $container->load('getSylius_CustomerOrderAddressesSaverService')));
    }
}
