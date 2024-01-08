<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_PromotionAction_UnitFixedDiscountService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.promotion_action.unit_fixed_discount' shared service.
     *
     * @return \Sylius\Component\Core\Promotion\Action\UnitFixedDiscountPromotionActionCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Promotion/Action/PromotionActionCommandInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Core/Promotion/Action/UnitDiscountPromotionActionCommand.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Core/Promotion/Action/UnitFixedDiscountPromotionActionCommand.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Core/Promotion/Filter/FilterInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Core/Promotion/Filter/TaxonFilter.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Core/Promotion/Filter/ProductFilter.php';

        return $container->services['sylius.promotion_action.unit_fixed_discount'] = new \Sylius\Component\Core\Promotion\Action\UnitFixedDiscountPromotionActionCommand(($container->services['Sylius\\Component\\Order\\Factory\\AdjustmentFactoryInterface'] ?? $container->load('getAdjustmentFactoryInterfaceService')), ($container->services['sylius.promotion_filter.price_range'] ?? $container->load('getSylius_PromotionFilter_PriceRangeService')), ($container->services['sylius.promotion_filter.taxon'] ?? ($container->services['sylius.promotion_filter.taxon'] = new \Sylius\Component\Core\Promotion\Filter\TaxonFilter())), ($container->services['sylius.promotion_filter.product'] ?? ($container->services['sylius.promotion_filter.product'] = new \Sylius\Component\Core\Promotion\Filter\ProductFilter())), ($container->services['sylius.currency_converter'] ?? $container->getSylius_CurrencyConverterService()));
    }
}
