<?php

namespace ContainerNytzCg0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getActionBasedDiscountApplicatorInterfaceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\CoreBundle\CatalogPromotion\Applicator\ActionBasedDiscountApplicatorInterface' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\CatalogPromotion\Applicator\ActionBasedDiscountApplicator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/CatalogPromotion/Applicator/ActionBasedDiscountApplicatorInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/CatalogPromotion/Applicator/ActionBasedDiscountApplicator.php';

        return $container->services['Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\Applicator\\ActionBasedDiscountApplicatorInterface'] = new \Sylius\Bundle\CoreBundle\CatalogPromotion\Applicator\ActionBasedDiscountApplicator(($container->services['Sylius\\Component\\CoreBundle\\CatalogPromotion\\Calculator\\CatalogPromotionPriceCalculatorInterface'] ?? $container->load('getCatalogPromotionPriceCalculatorInterfaceService')), new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->services['Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\DiscountApplicationCriteria\\ExclusiveCriteria'] ?? ($container->services['Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\DiscountApplicationCriteria\\ExclusiveCriteria'] = new \Sylius\Bundle\CoreBundle\CatalogPromotion\DiscountApplicationCriteria\ExclusiveCriteria()));
            yield 1 => ($container->services['Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\DiscountApplicationCriteria\\MinimumPriceCriteria'] ?? ($container->services['Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\DiscountApplicationCriteria\\MinimumPriceCriteria'] = new \Sylius\Bundle\CoreBundle\CatalogPromotion\DiscountApplicationCriteria\MinimumPriceCriteria()));
        }, 2));
    }
}
