<?php

namespace ContainerNytzCg0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessenger_Failure_SendFailedMessageToFailureTransportListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'messenger.failure.send_failed_message_to_failure_transport_listener' shared service.
     *
     * @return \Symfony\Component\Messenger\EventListener\SendFailedMessageToFailureTransportListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/EventListener/SendFailedMessageToFailureTransportListener.php';

        return $container->privates['messenger.failure.send_failed_message_to_failure_transport_listener'] = new \Symfony\Component\Messenger\EventListener\SendFailedMessageToFailureTransportListener(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'catalog_promotion_removal' => ['privates', 'messenger.transport.catalog_promotion_removal_failed', 'getMessenger_Transport_CatalogPromotionRemovalFailedService', true],
            'main' => ['privates', 'messenger.transport.main_failed', 'getMessenger_Transport_MainFailedService', true],
        ], [
            'catalog_promotion_removal' => '?',
            'main' => '?',
        ]), ($container->privates['monolog.logger.messenger'] ?? $container->load('getMonolog_Logger_MessengerService')));
    }
}
