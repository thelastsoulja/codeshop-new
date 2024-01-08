<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Listener_LockingService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.listener.locking' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\EventListener\LockingListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/EventListener/LockingListener.php';

        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService());

        if (isset($container->services['sylius.listener.locking'])) {
            return $container->services['sylius.listener.locking'];
        }

        return $container->services['sylius.listener.locking'] = new \Sylius\Bundle\CoreBundle\EventListener\LockingListener($a);
    }
}
