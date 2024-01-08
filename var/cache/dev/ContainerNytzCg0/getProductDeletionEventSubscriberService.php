<?php

namespace ContainerNytzCg0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProductDeletionEventSubscriberService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\ApiBundle\EventSubscriber\ProductDeletionEventSubscriber' shared service.
     *
     * @return \Sylius\Bundle\ApiBundle\EventSubscriber\ProductDeletionEventSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/ApiBundle/EventSubscriber/ProductDeletionEventSubscriber.php';

        return $container->services['Sylius\\Bundle\\ApiBundle\\EventSubscriber\\ProductDeletionEventSubscriber'] = new \Sylius\Bundle\ApiBundle\EventSubscriber\ProductDeletionEventSubscriber(($container->services['Sylius\\Component\\Core\\Promotion\\Checker\\ProductInPromotionRuleCheckerInterface'] ?? $container->load('getProductInPromotionRuleCheckerInterfaceService')));
    }
}
