<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Listener_OrderCompleteService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.listener.order_complete' shared service.
     *
     * @return \Sylius\Bundle\ShopBundle\EventListener\OrderCompleteListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/ShopBundle/EventListener/OrderCompleteListener.php';

        $a = ($container->services['sylius.email_manager.order'] ?? $container->load('getSylius_EmailManager_OrderService'));

        if (isset($container->services['sylius.listener.order_complete'])) {
            return $container->services['sylius.listener.order_complete'];
        }

        return $container->services['sylius.listener.order_complete'] = new \Sylius\Bundle\ShopBundle\EventListener\OrderCompleteListener($a);
    }
}
