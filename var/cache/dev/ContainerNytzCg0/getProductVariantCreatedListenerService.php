<?php

namespace ContainerNytzCg0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProductVariantCreatedListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\CoreBundle\CatalogPromotion\Listener\ProductVariantCreatedListener' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\CatalogPromotion\Listener\ProductVariantCreatedListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/CatalogPromotion/Listener/ProductVariantCreatedListener.php';

        $a = ($container->services['Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\Processor\\ProductVariantCatalogPromotionsProcessorInterface'] ?? $container->load('getProductVariantCatalogPromotionsProcessorInterfaceService'));

        if (isset($container->services['Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\Listener\\ProductVariantCreatedListener'])) {
            return $container->services['Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\Listener\\ProductVariantCreatedListener'];
        }
        $b = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService());

        if (isset($container->services['Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\Listener\\ProductVariantCreatedListener'])) {
            return $container->services['Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\Listener\\ProductVariantCreatedListener'];
        }

        return $container->services['Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\Listener\\ProductVariantCreatedListener'] = new \Sylius\Bundle\CoreBundle\CatalogPromotion\Listener\ProductVariantCreatedListener(($container->services['sylius.repository.product_variant'] ?? $container->load('getSylius_Repository_ProductVariantService')), $a, $b);
    }
}