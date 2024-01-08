<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Listener_AdminUser_ReloaderService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'sylius.listener.admin_user.reloader' shared service.
     *
     * @return \Sylius\Bundle\UserBundle\EventListener\UserReloaderListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/UserBundle/EventListener/UserReloaderListener.php';

        $a = ($container->privates['sylius.admin_user.reloader'] ?? $container->load('getSylius_AdminUser_ReloaderService'));

        if (isset($container->privates['sylius.listener.admin_user.reloader'])) {
            return $container->privates['sylius.listener.admin_user.reloader'];
        }

        return $container->privates['sylius.listener.admin_user.reloader'] = new \Sylius\Bundle\UserBundle\EventListener\UserReloaderListener($a);
    }
}