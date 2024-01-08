<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Listener_UserRegistrationService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'sylius.listener.user_registration' shared service.
     *
     * @return \Sylius\Bundle\ShopBundle\EventListener\UserRegistrationListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/ShopBundle/EventListener/UserRegistrationListener.php';

        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService());

        if (isset($container->services['sylius.listener.user_registration'])) {
            return $container->services['sylius.listener.user_registration'];
        }
        $b = ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService());

        if (isset($container->services['sylius.listener.user_registration'])) {
            return $container->services['sylius.listener.user_registration'];
        }
        $c = ($container->services['sylius.security.user_login'] ?? $container->load('getSylius_Security_UserLoginService'));

        if (isset($container->services['sylius.listener.user_registration'])) {
            return $container->services['sylius.listener.user_registration'];
        }

        return $container->services['sylius.listener.user_registration'] = new \Sylius\Bundle\ShopBundle\EventListener\UserRegistrationListener($a, ($container->services['sylius.shop_user.token_generator.email_verification'] ?? $container->load('getSylius_ShopUser_TokenGenerator_EmailVerificationService')), $b, ($container->services['Sylius\\Component\\Channel\\Context\\ChannelContextInterface'] ?? $container->getChannelContextInterfaceService()), $c, 'shop');
    }
}
