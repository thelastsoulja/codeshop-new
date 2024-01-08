<?php

namespace ContainerNytzCg0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCatalogPromotionRemovalProcessorInterfaceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\CoreBundle\CatalogPromotion\Processor\CatalogPromotionRemovalProcessorInterface' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\CatalogPromotion\Processor\CatalogPromotionRemovalProcessor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/CatalogPromotion/Processor/CatalogPromotionRemovalProcessorInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/CatalogPromotion/Processor/CatalogPromotionRemovalProcessor.php';

        return $container->services['Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\Processor\\CatalogPromotionRemovalProcessorInterface'] = new \Sylius\Bundle\CoreBundle\CatalogPromotion\Processor\CatalogPromotionRemovalProcessor(($container->services['sylius.repository.catalog_promotion'] ?? $container->load('getSylius_Repository_CatalogPromotionService')), ($container->services['Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\Announcer\\CatalogPromotionRemovalAnnouncerInterface'] ?? $container->load('getCatalogPromotionRemovalAnnouncerInterfaceService')));
    }
}
