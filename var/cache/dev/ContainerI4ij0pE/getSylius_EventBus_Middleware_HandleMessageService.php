<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_EventBus_Middleware_HandleMessageService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sylius.event_bus.middleware.handle_message' shared service.
     *
     * @return \Symfony\Component\Messenger\Middleware\HandleMessageMiddleware
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Middleware/MiddlewareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Middleware/HandleMessageMiddleware.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/HandlersLocatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/HandlersLocator.php';

        $container->privates['sylius.event_bus.middleware.handle_message'] = $instance = new \Symfony\Component\Messenger\Middleware\HandleMessageMiddleware(new \Symfony\Component\Messenger\Handler\HandlersLocator(['Symfony\\Component\\Mailer\\Messenger\\SendEmailMessage' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['.messenger.handler_descriptor.KzjMujZ'] ?? $container->load('get_Messenger_HandlerDescriptor_KzjMujZService'));
        }, 1), 'Sylius\\Component\\Promotion\\Event\\CatalogPromotionCreated' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['.messenger.handler_descriptor.pmxluho'] ?? $container->load('get_Messenger_HandlerDescriptor_PmxluhoService'));
            yield 1 => ($container->privates['.messenger.handler_descriptor.dkVjlTS'] ?? $container->load('get_Messenger_HandlerDescriptor_DkVjlTSService'));
        }, 2), 'Sylius\\Component\\Promotion\\Event\\CatalogPromotionUpdated' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['.messenger.handler_descriptor.ot8f6qt'] ?? $container->load('get_Messenger_HandlerDescriptor_Ot8f6qtService'));
            yield 1 => ($container->privates['.messenger.handler_descriptor.KpIuBuY'] ?? $container->load('get_Messenger_HandlerDescriptor_KpIuBuYService'));
        }, 2), 'Sylius\\Component\\Promotion\\Event\\CatalogPromotionEnded' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['.messenger.handler_descriptor.F2jhGUX'] ?? $container->load('get_Messenger_HandlerDescriptor_F2jhGUXService'));
            yield 1 => ($container->privates['.messenger.handler_descriptor.7ZYWKR0'] ?? $container->load('get_Messenger_HandlerDescriptor_7ZYWKR0Service'));
        }, 2), 'Sylius\\Component\\Core\\Event\\ProductCreated' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['.messenger.handler_descriptor.BEzrjok'] ?? $container->load('get_Messenger_HandlerDescriptor_BEzrjokService'));
        }, 1), 'Sylius\\Component\\Core\\Event\\ProductUpdated' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['.messenger.handler_descriptor.RETLWDk'] ?? $container->load('get_Messenger_HandlerDescriptor_RETLWDkService'));
        }, 1), 'Sylius\\Component\\Core\\Event\\ProductVariantCreated' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['.messenger.handler_descriptor.xnKbskR'] ?? $container->load('get_Messenger_HandlerDescriptor_XnKbskRService'));
        }, 1), 'Sylius\\Component\\Core\\Event\\ProductVariantUpdated' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['.messenger.handler_descriptor.q9ixaim'] ?? $container->load('get_Messenger_HandlerDescriptor_Q9ixaimService'));
        }, 1), 'Sylius\\Bundle\\ApiBundle\\Event\\OrderCompleted' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['.messenger.handler_descriptor.ufR7qhN'] ?? $container->load('get_Messenger_HandlerDescriptor_UfR7qhNService'));
        }, 1)]), true);

        $instance->setLogger(($container->privates['monolog.logger.messenger'] ?? $container->load('getMonolog_Logger_MessengerService')));

        return $instance;
    }
}
