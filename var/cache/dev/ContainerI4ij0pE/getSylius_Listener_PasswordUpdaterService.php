<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Listener_PasswordUpdaterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.listener.password_updater' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\EventListener\PasswordUpdaterListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/UserBundle/EventListener/PasswordUpdaterListener.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/EventListener/PasswordUpdaterListener.php';

        return $container->services['sylius.listener.password_updater'] = new \Sylius\Bundle\CoreBundle\EventListener\PasswordUpdaterListener(($container->services['sylius.security.password_updater'] ?? $container->load('getSylius_Security_PasswordUpdaterService')));
    }
}
