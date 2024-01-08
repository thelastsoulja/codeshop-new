<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_ShopUser_Listener_UpdateUserEncoderService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'sylius.shop_user.listener.update_user_encoder' shared service.
     *
     * @return \Sylius\Bundle\UserBundle\EventListener\UpdateUserEncoderListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/UserBundle/EventListener/UpdateUserEncoderListener.php';

        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService());

        if (isset($container->privates['sylius.shop_user.listener.update_user_encoder'])) {
            return $container->privates['sylius.shop_user.listener.update_user_encoder'];
        }

        return $container->privates['sylius.shop_user.listener.update_user_encoder'] = new \Sylius\Bundle\UserBundle\EventListener\UpdateUserEncoderListener($a, 'plaintext', 'Sylius\\Component\\Core\\Model\\ShopUser', 'Sylius\\Component\\Core\\Model\\ShopUserInterface', '_password');
    }
}
