<?php

namespace ContainerNytzCg0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCatalogPromotionPriceCalculatorInterfaceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\Component\CoreBundle\CatalogPromotion\Calculator\CatalogPromotionPriceCalculatorInterface' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\CatalogPromotion\Calculator\CatalogPromotionPriceCalculator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/CatalogPromotion/Calculator/CatalogPromotionPriceCalculatorInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/CatalogPromotion/Calculator/CatalogPromotionPriceCalculator.php';

        return $container->services['Sylius\\Component\\CoreBundle\\CatalogPromotion\\Calculator\\CatalogPromotionPriceCalculatorInterface'] = new \Sylius\Bundle\CoreBundle\CatalogPromotion\Calculator\CatalogPromotionPriceCalculator(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->services['Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\Calculator\\FixedDiscountPriceCalculator'] ?? ($container->services['Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\Calculator\\FixedDiscountPriceCalculator'] = new \Sylius\Bundle\CoreBundle\CatalogPromotion\Calculator\FixedDiscountPriceCalculator()));
            yield 1 => ($container->services['Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\Calculator\\PercentageDiscountPriceCalculator'] ?? ($container->services['Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\Calculator\\PercentageDiscountPriceCalculator'] = new \Sylius\Bundle\CoreBundle\CatalogPromotion\Calculator\PercentageDiscountPriceCalculator()));
        }, 2));
    }
}