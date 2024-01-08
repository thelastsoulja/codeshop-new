<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessenger_Middleware_SendMessageService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'messenger.middleware.send_message' shared service.
     *
     * @return \Symfony\Component\Messenger\Middleware\SendMessageMiddleware
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Middleware/MiddlewareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Middleware/SendMessageMiddleware.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Transport/Sender/SendersLocatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Transport/Sender/SendersLocator.php';

        $a = ($container->privates['.service_locator.nWEppfd'] ?? $container->load('get_ServiceLocator_NWEppfdService'));

        if (isset($container->privates['messenger.middleware.send_message'])) {
            return $container->privates['messenger.middleware.send_message'];
        }
        $b = ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService());

        if (isset($container->privates['messenger.middleware.send_message'])) {
            return $container->privates['messenger.middleware.send_message'];
        }

        $container->privates['messenger.middleware.send_message'] = $instance = new \Symfony\Component\Messenger\Middleware\SendMessageMiddleware(new \Symfony\Component\Messenger\Transport\Sender\SendersLocator(['Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\Command\\ApplyCatalogPromotionsOnVariants' => [0 => 'main'], 'Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\Command\\DisableCatalogPromotion' => [0 => 'main'], 'Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\Command\\RemoveCatalogPromotion' => [0 => 'catalog_promotion_removal'], 'Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\Command\\RemoveInactiveCatalogPromotion' => [0 => 'catalog_promotion_removal'], 'Sylius\\Bundle\\CoreBundle\\PriceHistory\\Command\\ApplyLowestPriceOnChannelPricings' => [0 => 'main'], 'Sylius\\Component\\Promotion\\Event\\CatalogPromotionCreated' => [0 => 'main'], 'Sylius\\Component\\Promotion\\Event\\CatalogPromotionEnded' => [0 => 'main'], 'Sylius\\Component\\Promotion\\Event\\CatalogPromotionUpdated' => [0 => 'main']], $a), $b);

        $instance->setLogger(($container->privates['monolog.logger.messenger'] ?? $container->load('getMonolog_Logger_MessengerService')));

        return $instance;
    }
}
