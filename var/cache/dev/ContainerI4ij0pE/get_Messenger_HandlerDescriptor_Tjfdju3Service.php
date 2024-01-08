<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_Tjfdju3Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.messenger.handler_descriptor.Tjfdju3' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/HandlerDescriptor.php';

        return $container->privates['.messenger.handler_descriptor.Tjfdju3'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(($container->services['Sylius\\Bundle\\CoreBundle\\MessageHandler\\Admin\\Account\\ResetPasswordHandler'] ?? $container->load('getResetPasswordHandler2Service')), ['bus' => 'sylius.command_bus']);
    }
}
