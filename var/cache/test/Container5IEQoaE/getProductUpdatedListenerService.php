<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProductUpdatedListenerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\CoreBundle\CatalogPromotion\Listener\ProductUpdatedListener' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\CatalogPromotion\Listener\ProductUpdatedListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/CatalogPromotion/Listener/ProductUpdatedListener.php';

        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService());

        if (isset($container->services['Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\Listener\\ProductUpdatedListener'])) {
            return $container->services['Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\Listener\\ProductUpdatedListener'];
        }

        return $container->services['Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\Listener\\ProductUpdatedListener'] = new \Sylius\Bundle\CoreBundle\CatalogPromotion\Listener\ProductUpdatedListener(($container->services['sylius.repository.product'] ?? $container->load('getSylius_Repository_ProductService')), ($container->services['Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\Processor\\ProductCatalogPromotionsProcessorInterface'] ?? $container->load('getProductCatalogPromotionsProcessorInterfaceService')), $a);
    }
}
