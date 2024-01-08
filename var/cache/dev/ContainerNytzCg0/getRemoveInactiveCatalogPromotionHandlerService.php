<?php

namespace ContainerNytzCg0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRemoveInactiveCatalogPromotionHandlerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\CoreBundle\CatalogPromotion\CommandHandler\RemoveInactiveCatalogPromotionHandler' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\CatalogPromotion\CommandHandler\RemoveInactiveCatalogPromotionHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/CatalogPromotion/CommandHandler/RemoveInactiveCatalogPromotionHandler.php';

        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService());

        if (isset($container->services['Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\CommandHandler\\RemoveInactiveCatalogPromotionHandler'])) {
            return $container->services['Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\CommandHandler\\RemoveInactiveCatalogPromotionHandler'];
        }

        return $container->services['Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\CommandHandler\\RemoveInactiveCatalogPromotionHandler'] = new \Sylius\Bundle\CoreBundle\CatalogPromotion\CommandHandler\RemoveInactiveCatalogPromotionHandler(($container->services['sylius.repository.catalog_promotion'] ?? $container->load('getSylius_Repository_CatalogPromotionService')), $a);
    }
}