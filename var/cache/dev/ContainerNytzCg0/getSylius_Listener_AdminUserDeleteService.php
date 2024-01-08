<?php

namespace ContainerNytzCg0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Listener_AdminUserDeleteService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sylius.listener.admin_user_delete' shared service.
     *
     * @return \Sylius\Bundle\UserBundle\EventListener\UserDeleteListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/UserBundle/EventListener/UserDeleteListener.php';

        return $container->privates['sylius.listener.admin_user_delete'] = new \Sylius\Bundle\UserBundle\EventListener\UserDeleteListener(($container->services['.container.private.security.token_storage'] ?? $container->get_Container_Private_Security_TokenStorageService()), ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }
}
