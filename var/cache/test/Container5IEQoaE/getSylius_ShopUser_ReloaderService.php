<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_ShopUser_ReloaderService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'sylius.shop_user.reloader' shared service.
     *
     * @return \Sylius\Bundle\UserBundle\Reloader\UserReloader
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/UserBundle/Reloader/UserReloaderInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/UserBundle/Reloader/UserReloader.php';

        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService());

        if (isset($container->privates['sylius.shop_user.reloader'])) {
            return $container->privates['sylius.shop_user.reloader'];
        }

        return $container->privates['sylius.shop_user.reloader'] = new \Sylius\Bundle\UserBundle\Reloader\UserReloader($a);
    }
}
