<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_ZqR0lRYService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.messenger.handler_descriptor.ZqR0lRY' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/HandlerDescriptor.php';

        $a = ($container->services['Sylius\\Bundle\\ApiBundle\\CommandHandler\\Checkout\\SendOrderConfirmationHandler'] ?? $container->load('getSendOrderConfirmationHandlerService'));

        if (isset($container->privates['.messenger.handler_descriptor.ZqR0lRY'])) {
            return $container->privates['.messenger.handler_descriptor.ZqR0lRY'];
        }

        return $container->privates['.messenger.handler_descriptor.ZqR0lRY'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor($a, ['bus' => 'sylius_default.bus']);
    }
}