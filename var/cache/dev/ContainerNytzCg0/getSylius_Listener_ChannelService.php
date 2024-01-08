<?php

namespace ContainerNytzCg0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Listener_ChannelService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.listener.channel' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\EventListener\ChannelDeletionListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/EventListener/ChannelDeletionListener.php';

        return $container->services['sylius.listener.channel'] = new \Sylius\Bundle\CoreBundle\EventListener\ChannelDeletionListener(($container->services['sylius.checker.channel_deletion'] ?? $container->load('getSylius_Checker_ChannelDeletionService')));
    }
}