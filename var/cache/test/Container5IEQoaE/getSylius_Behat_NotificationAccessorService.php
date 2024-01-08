<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Behat_NotificationAccessorService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'sylius.behat.notification_accessor' shared service.
     *
     * @return \Sylius\Behat\Service\Accessor\NotificationAccessor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Service/Accessor/NotificationAccessorInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Service/Accessor/NotificationAccessor.php';

        return $container->privates['sylius.behat.notification_accessor'] = new \Sylius\Behat\Service\Accessor\NotificationAccessor(($container->services['behat.mink.default_session'] ?? $container->load('getBehat_Mink_DefaultSessionService')));
    }
}
