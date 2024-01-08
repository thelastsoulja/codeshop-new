<?php

namespace ContainerNytzCg0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Listener_AdminUserLastLoginService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sylius.listener.admin_user_last_login' shared service.
     *
     * @return \Sylius\Bundle\UserBundle\EventListener\UserLastLoginSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/UserBundle/EventListener/UserLastLoginSubscriber.php';

        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService());

        if (isset($container->privates['sylius.listener.admin_user_last_login'])) {
            return $container->privates['sylius.listener.admin_user_last_login'];
        }

        return $container->privates['sylius.listener.admin_user_last_login'] = new \Sylius\Bundle\UserBundle\EventListener\UserLastLoginSubscriber($a, 'Sylius\\Component\\Core\\Model\\AdminUser', NULL);
    }
}
