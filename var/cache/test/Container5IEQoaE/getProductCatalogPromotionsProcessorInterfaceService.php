<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProductCatalogPromotionsProcessorInterfaceService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\CoreBundle\CatalogPromotion\Processor\ProductCatalogPromotionsProcessorInterface' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\CatalogPromotion\Processor\ProductCatalogPromotionsProcessor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/CatalogPromotion/Processor/ProductCatalogPromotionsProcessorInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/CatalogPromotion/Processor/ProductCatalogPromotionsProcessor.php';

        $a = ($container->services['Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\CommandDispatcher\\ApplyCatalogPromotionsOnVariantsCommandDispatcherInterface'] ?? $container->load('getApplyCatalogPromotionsOnVariantsCommandDispatcherInterfaceService'));

        if (isset($container->services['Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\Processor\\ProductCatalogPromotionsProcessorInterface'])) {
            return $container->services['Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\Processor\\ProductCatalogPromotionsProcessorInterface'];
        }

        return $container->services['Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\Processor\\ProductCatalogPromotionsProcessorInterface'] = new \Sylius\Bundle\CoreBundle\CatalogPromotion\Processor\ProductCatalogPromotionsProcessor($a);
    }
}
