<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Behat_ChannelContextSetterService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'sylius.behat.channel_context_setter' shared service.
     *
     * @return \Sylius\Behat\Service\Setter\ChannelContextSetter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Service/Setter/ChannelContextSetterInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Service/Setter/ChannelContextSetter.php';

        return $container->privates['sylius.behat.channel_context_setter'] = new \Sylius\Behat\Service\Setter\ChannelContextSetter(($container->privates['sylius.behat.cookie_setter'] ?? $container->load('getSylius_Behat_CookieSetterService')));
    }
}
