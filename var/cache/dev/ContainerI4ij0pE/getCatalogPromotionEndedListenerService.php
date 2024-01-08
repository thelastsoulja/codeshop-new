<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCatalogPromotionEndedListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\CoreBundle\CatalogPromotion\Listener\CatalogPromotionEndedListener' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\CatalogPromotion\Listener\CatalogPromotionEndedListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/CatalogPromotion/Listener/CatalogPromotionEndedListener.php';

        $a = ($container->services['Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\Processor\\AllProductVariantsCatalogPromotionsProcessorInterface'] ?? $container->load('getAllProductVariantsCatalogPromotionsProcessorInterfaceService'));

        if (isset($container->services['Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\Listener\\CatalogPromotionEndedListener'])) {
            return $container->services['Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\Listener\\CatalogPromotionEndedListener'];
        }
        $b = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService());

        if (isset($container->services['Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\Listener\\CatalogPromotionEndedListener'])) {
            return $container->services['Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\Listener\\CatalogPromotionEndedListener'];
        }
        $c = ($container->services['messenger.default_bus'] ?? $container->getMessenger_DefaultBusService());

        if (isset($container->services['Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\Listener\\CatalogPromotionEndedListener'])) {
            return $container->services['Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\Listener\\CatalogPromotionEndedListener'];
        }

        return $container->services['Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\Listener\\CatalogPromotionEndedListener'] = new \Sylius\Bundle\CoreBundle\CatalogPromotion\Listener\CatalogPromotionEndedListener($a, ($container->services['sylius.repository.catalog_promotion'] ?? $container->load('getSylius_Repository_CatalogPromotionService')), $b, $c);
    }
}