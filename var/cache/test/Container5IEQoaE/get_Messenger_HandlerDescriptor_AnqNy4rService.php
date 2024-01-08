<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_AnqNy4rService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.messenger.handler_descriptor.AnqNy4r' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/HandlerDescriptor.php';

        $a = ($container->services['Sylius\\Bundle\\ApiBundle\\CommandHandler\\Checkout\\UpdateCartHandler'] ?? $container->load('getUpdateCartHandlerService'));

        if (isset($container->privates['.messenger.handler_descriptor.AnqNy4r'])) {
            return $container->privates['.messenger.handler_descriptor.AnqNy4r'];
        }

        return $container->privates['.messenger.handler_descriptor.AnqNy4r'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor($a, ['bus' => 'sylius_default.bus']);
    }
}
