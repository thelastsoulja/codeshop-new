<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_CommandBus_Middleware_HandleMessageService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'sylius.command_bus.middleware.handle_message' shared service.
     *
     * @return \Symfony\Component\Messenger\Middleware\HandleMessageMiddleware
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Middleware/MiddlewareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Middleware/HandleMessageMiddleware.php';

        $a = ($container->privates['sylius.command_bus.messenger.handlers_locator'] ?? $container->load('getSylius_CommandBus_Messenger_HandlersLocatorService'));

        if (isset($container->privates['sylius.command_bus.middleware.handle_message'])) {
            return $container->privates['sylius.command_bus.middleware.handle_message'];
        }

        $container->privates['sylius.command_bus.middleware.handle_message'] = $instance = new \Symfony\Component\Messenger\Middleware\HandleMessageMiddleware($a);

        $instance->setLogger(($container->privates['monolog.logger.messenger'] ?? $container->load('getMonolog_Logger_MessengerService')));

        return $instance;
    }
}
