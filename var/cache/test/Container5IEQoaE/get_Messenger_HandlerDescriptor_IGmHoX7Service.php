<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_IGmHoX7Service extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.messenger.handler_descriptor.IGmHoX7' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/HandlerDescriptor.php';

        $a = ($container->services['Sylius\\Bundle\\ApiBundle\\CommandHandler\\Account\\ResendVerificationEmailHandler'] ?? $container->load('getResendVerificationEmailHandlerService'));

        if (isset($container->privates['.messenger.handler_descriptor.IGmHoX7'])) {
            return $container->privates['.messenger.handler_descriptor.IGmHoX7'];
        }

        return $container->privates['.messenger.handler_descriptor.IGmHoX7'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor($a, ['bus' => 'sylius_default.bus']);
    }
}
