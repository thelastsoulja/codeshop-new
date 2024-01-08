<?php

namespace ContainerNytzCg0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDisableCatalogPromotionHandlerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\CoreBundle\CatalogPromotion\CommandHandler\DisableCatalogPromotionHandler' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\CatalogPromotion\CommandHandler\DisableCatalogPromotionHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/CatalogPromotion/CommandHandler/DisableCatalogPromotionHandler.php';

        $a = ($container->services['Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\Processor\\AllProductVariantsCatalogPromotionsProcessorInterface'] ?? $container->load('getAllProductVariantsCatalogPromotionsProcessorInterfaceService'));

        if (isset($container->services['Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\CommandHandler\\DisableCatalogPromotionHandler'])) {
            return $container->services['Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\CommandHandler\\DisableCatalogPromotionHandler'];
        }

        return $container->services['Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\CommandHandler\\DisableCatalogPromotionHandler'] = new \Sylius\Bundle\CoreBundle\CatalogPromotion\CommandHandler\DisableCatalogPromotionHandler(($container->services['sylius.repository.catalog_promotion'] ?? $container->load('getSylius_Repository_CatalogPromotionService')), $a);
    }
}