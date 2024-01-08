<?php

namespace ContainerNytzCg0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_8T_AZ2yService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.messenger.handler_descriptor.8T.AZ2y' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/HandlerDescriptor.php';

        return $container->privates['.messenger.handler_descriptor.8T.AZ2y'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(($container->services['Sylius\\Bundle\\ApiBundle\\CommandHandler\\Checkout\\ChooseShippingMethodHandler'] ?? $container->load('getChooseShippingMethodHandlerService')), ['bus' => 'sylius.command_bus']);
    }
}
