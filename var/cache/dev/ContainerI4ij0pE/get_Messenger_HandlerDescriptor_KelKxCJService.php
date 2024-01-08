<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_KelKxCJService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.messenger.handler_descriptor.KelKxCJ' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/HandlerDescriptor.php';

        return $container->privates['.messenger.handler_descriptor.KelKxCJ'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(($container->services['Sylius\\Bundle\\ApiBundle\\CommandHandler\\Account\\SendResetPasswordEmailHandler'] ?? $container->load('getSendResetPasswordEmailHandlerService')), ['bus' => 'sylius.command_bus']);
    }
}
