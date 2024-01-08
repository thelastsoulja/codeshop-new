<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEligibleCatalogPromotionsProviderInterfaceService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\PromotionBundle\Provider\EligibleCatalogPromotionsProviderInterface' shared service.
     *
     * @return \Sylius\Bundle\PromotionBundle\Provider\EligibleCatalogPromotionsProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/PromotionBundle/Provider/EligibleCatalogPromotionsProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/PromotionBundle/Provider/EligibleCatalogPromotionsProvider.php';

        return $container->services['Sylius\\Bundle\\PromotionBundle\\Provider\\EligibleCatalogPromotionsProviderInterface'] = new \Sylius\Bundle\PromotionBundle\Provider\EligibleCatalogPromotionsProvider(($container->services['sylius.repository.catalog_promotion'] ?? $container->load('getSylius_Repository_CatalogPromotionService')), new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->services['sylius.catalog_promotion.criteria.enabled'] ?? ($container->services['sylius.catalog_promotion.criteria.enabled'] = new \Sylius\Bundle\PromotionBundle\Criteria\Enabled()));
            yield 1 => ($container->services['sylius.catalog_promotion.criteria.date_range'] ?? $container->load('getSylius_CatalogPromotion_Criteria_DateRangeService'));
        }, 2));
    }
}
