<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Listener_UserImpersonatedService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'sylius.listener.user_impersonated' shared service.
     *
     * @return \Sylius\Bundle\ShopBundle\EventListener\UserImpersonatedListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/ShopBundle/EventListener/UserImpersonatedListener.php';

        return $container->services['sylius.listener.user_impersonated'] = new \Sylius\Bundle\ShopBundle\EventListener\UserImpersonatedListener(($container->services['sylius.storage.cart_session'] ?? $container->getSylius_Storage_CartSessionService()), ($container->services['Sylius\\Component\\Channel\\Context\\ChannelContextInterface'] ?? $container->getChannelContextInterfaceService()), ($container->services['sylius.repository.order'] ?? $container->getSylius_Repository_OrderService()));
    }
}
